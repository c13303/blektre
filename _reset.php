<?php
requete('DELETE * FROM players;');
requete('DELETE * FROM log;');
requete('DELETE * FROM messagerie;');
requete('UPDATE special SET player="Blektre";');
requete('UPDATE special SET title="Indefini";');
requete('UPDATE special SET value=60;');
requete('INSERT INTO players VALUES(NULL, "Blektre", 0,0,0,0,"ours",100,0,0,12,0,0,0);');
requete('INSERT INTO players VALUES(NULL, "Inconnu", 0,0,0,0,"ours",100,0,0,12,0,0,0);');

?>
