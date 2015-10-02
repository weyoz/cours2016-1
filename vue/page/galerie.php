<?php include("vue/layout/header.inc.php"); ?>

<div id="poptrox">
	<ul id="gallery">
		<li><img id="mini1" src="assets/images/img01.jpg" title="Bulle" alt="" /></li>
		<li><img id="mini2" src="assets/images/img02.jpg" title="Bulle" alt="" /></li>
		<li><img id="mini3" src="assets/images/img03.jpg" title="Bulle" alt="" /></li>
		<li><img id="mini4" src="assets/images/img04.jpg" title="Bulle" alt="" /></li>
		<li><img id="mini5" src="assets/images/img02.jpg" title="Bulle" alt="" /></li>
		<li><img id="mini6" src="assets/images/img01.jpg" title="Bulle" alt="" /></li>
		<li><img id="mini7" src="assets/images/img04.jpg" title="Bulle" alt="" /></li>
		<li><img id="mini8" src="assets/images/img03.jpg" title="Bulle" alt="" /></li>
	</ul>
	<img id="zoom" src="assets/images/img01_big.jpg" title="Texte de bulle" alt="" width="98%" />
	<p>
		<a id="startdiapo" href="#">Lancer le diaporama</a>
		Délai : <input type="text" id="delai" size="2" value="2" />
		<a id="stopdiapo" href="#">Arrêter le diaporama</a>
	</p>
</div>

<script type="text/javascript" src="assets/js/evt_galerie.js"></script>

<?php include("vue/layout/footer.inc.php"); ?>


