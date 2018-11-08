

</p>

  <p align="center">Modif pour la voyante</p>
  <p align="center"><a href="voyante_entree.php">INSERT/MODIF</a> / <a href="voyante_pedia.php">[afficher tout le dico] </a></p>
  <p align="center">
  <form method="post" action="voyante_modif_OK.php">
    <div align="center">
  MOT CL&eacute;:<?php echo $keyword; ?>
<input name="keyword" type="hidden" id="keyword" value="<?php echo $keyword; ?>" />   
</p>
</div>
    <p align="center">&nbsp;</p>
  <p align="center">alias(mettre un mot cl&eacute; ORIGINAL (pas alias) d&eacute;j&agrave; d&eacute;fini) OU definir: </p>
  <p align="center">ALIAS
  
    <input name="alias" type="text" id="alias" /> 
/    DEFINE
    <textarea name="define" cols="50" rows="8" id="textarea"><?php echo $def; ?></textarea>
	<p align="center">    
	<p align="center">
      <input type="submit">
</form>
  </p>
  <p align="center">&nbsp;  </p>
