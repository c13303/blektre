<?php 
/**
 * Referer parser class
 *
 * Cette classe sert e parser les adresses entrantes
 * renvoie un objet "referer" contenant l'url de depart, le nom de domaine, le nom du moteur de recherche
 * les mots cles cherches, et les erreurs eventuelles.
 * Ex :
 *        $ref = new referer('http://www.google.fr/search?q=mobilier+brasserie');
 *        echo $ref->kw;       // renvoie "mobilier brasserie"
 *        echo $ref->se;       // renvoie "google"
 *
 * @version 0.5b 
 * @author Michael Carton <webmaster@2imahl.fr>
 */
class referer {
    var $url='', $ndd='', $se='', $kw='', $err='';   
    
    /**
     * Constructeur
     */
    function referer($in){
        $this->url = $in;
        $this->getNdd();            // Recupere le nom de domaine
        $this->stripEngine();       // en deduit le nom du moteur utilise
        $this->getQuery();          // recupere les mots cles
        $this->cleanKw();           // "nettoie" les mots cles
    }    
    /**
     * Recupere le nom de domaine en fonction d'une url
     */
    function getNdd() {
        $url = substr($this->url, 7);                   // on vire le "http://"
        if(strpos($url,'/'))                            // si l'url contient un slash
            $ndd = substr($url, 0, strpos($url, '/'));  // on s'arrete au slash
        else $ndd = $url;                               // sinon on retourne l'url entiere (ex : www.google.com)
        $this->ndd = $ndd;
    }
    /**
     * Rabote le nom de domaine pour ne garder que le nom du site ("google", "yahoo", etc..)
     * Utilise $this->ndd pour modifier $this->se  (Search Engine)
     */
    function stripEngine() {
            $cut = substr($this->ndd,0,strrpos($this->ndd,'.'));     // on vire l'extension du ndd
            $this->se = substr($cut,strrpos($cut,'.'));            // et on garde du dernier '.' jusqu'e la fin
			if(strstr($this->se,'.')) $this->se = substr($this->se,1);
    }
    /**
     * Recupere la requete
     * $this->se permet de determiner le separateur utilise par le moteur
     * IL Y A SUREMENT UN MEILLEUR MOYEN DE FAIRE CA !! (tableau ?)
     */
    function getQuery() {
        switch($this->se) {
                case 'yahoo'     : $sep = 'p';              break;
                case 'noos'      : $sep = 'Keywords';       break;
                case 'opera'     : $sep = 'search';         break;
                case 'voila'     : $sep = 'rdata';          break;
                case 'myspace'   : $sep = 'searchrequest';  break;
                case 'exalead'   :
                case 'lycos'     : $sep = 'query';          break;
                case 'aliceadsl' :
                case 'alice'     : $sep = 'qs';             break;
                case 'google'    :
                case 'aol'       :
                case 'msn'       : $sep = 'q';              break;
                default          : $this->error('moteur inconnu'); 
                                   $sep = 'q';              break; // utilisation du separateur par defaut
               
            } 
			$ampsep = '&'.$sep.'=';
			$quesep = '?'.$sep.'=';
            if(strpos($this->url,$ampsep)) 
                $this->explose($ampsep);                        // on recupere les mots cles
			elseif(strpos($this->url,$quesep))
				$this->explose($quesep);
            else {
                if($engine == 'voila') $this->explose('kw'); // cas particulier avec Voila
                else 
                    $this->kw = 'N/A'; 
                    $this->error('erreur de recuperation des mots cles');
            }                                                //$this->err = 'no keyword : '.$this->se.' ('.$this->string.')';
    }
    /**
     * Prend $this->url et renvoie les mots cles dans $this->kw
     * en se servant du separateur passe en argument (cf. getQuery)
     */
    function explose($sep) { 
        $this->url = str_replace('&'.$sep.'&'.$sep,'&'.$sep,$this->url); // nettoyage (?)
        $sub = substr($this->url,strpos($this->url,$sep)+strlen($sep)); 
        if(strpos($sub,'&')) $this->kw = substr($sub,0,strpos($sub,'&'));
        else $this->kw = $sub;        
        if(strpos(' '.$this->kw,'cache:')) 
            $this->kw = substr($this->url,strpos($this->url,'+'));
        /////$this->url = str_replace('%22','&#34;',$this->url);            // je sais plus ce que c'etait, ea
    }
    /**
     * Nettoie les mots-cles. Fonction e developper en fonction
     * des cas particuliers...
     */
    function cleanKw() {                                
        $this->kw = urldecode(str_replace('+',' ',$this->kw));
        $this->kw = str_replace('è','e',$this->kw);
		$this->kw = str_replace('é','e',$this->kw);
    }
    /**
     * Ajoute une erreur au log $this->err
     */
    function error($string,$alert=FALSE) {
        $this->err .= "$string<br/>\n";
        if($alert) echo $string;
    }
}    
        
?>