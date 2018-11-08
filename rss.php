<rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	>

<channel>
	<title>Blektre RSS</title>
	<link>http://kanar.ci0.org/blektre</link>
	<description>Blektre simulateur de vraie vie</description>
	<pubDate>Tue, 11 Mar 2008 16:29:50 +0000</pubDate>

	<generator>http://kanar.ci0.org/blektre</generator>
	<language>fr</language>
	
	<?php

require("include/connexion.php");


$verif='SELECT * FROM log ORDER BY id DESC LIMIT 0,20;'; 
  $req=requete($verif);
  $bite=0;
  while ($data = mysqli_fetch_assoc($req))
  {
			echo'<item>';
			echo'<description>';		
			$news=$data['player_name'].':'.$data['objet'];
;
$news=($news);
			echo $news.'</description></item>';

	

		  }
  


mysqli_close();

echo'</channel></rss>
';

?>