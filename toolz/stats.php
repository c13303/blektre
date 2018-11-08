<?php
include('referer.php');

class visite 
	{
	var $date='', $ndd='inconnu', $string='no_string', $url='', $se='', $res='', $kw='?', $log='';
		
	function visite($string) {
		$this->string = $string;
		$this->getDate();
		$this->getUrl();
		
		$ref = new referer($this->url);			
		$this->ndd = $ref->ndd;	
		$this->se = $ref->se;
		$this->kw = ($ref->kw == 'N/A') ? '>>> lien <<<' : $ref->kw;
		$this->log .= $ref->err;
		$this->url = htmlentities($this->url);
	}	
	function cleanRes(){
		return str_replace('_',' ',utf8_decode(rawurldecode($this->res)));
	}
	
	function getDate() {	
		if($this->string=='') {
			$this->log .= '<br/>erreur getDate : $string est vide !';
		} else {
			$jj = substr($this->string, 2, 2);
			$mm = substr($this->string, 5, 2);
			$aa = substr($this->string, 8, 4);
			$hh = substr($this->string, 13, 2);
			$mn = substr($this->string, 16, 2);
			$this->date = mktime($hh, $mn, 0, $mm, $jj, $aa);
		}
	}
	function echoDate() {
		return date("d/m H:i", $this->date);
	}
	function getUrl(){
		$this->url = substr($this->string, 21);	
		if(strpos($this->url, ' <<')!=0) {
			$sep = explode(' << ',$this->url);
			$this->url = $sep[0];
			$this->res = str_replace('title=','',$sep[1]);
		}	
	}
}

?>