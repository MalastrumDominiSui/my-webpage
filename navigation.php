<?php

function highlightNavCurrentPage() {
	$arrPaths = array("/jellyfish.php","/Poem.php","/external-links.php","/sushi.php","/index.php");
	$arrAlts = array("jellyfish","thresher shark", "driftwood", "dark ocean", "ocean pic");
	$arrSrcs = array("pics/jelly.jpg", "pics/thresher.jpg", "pics/driftwood.jpg", "http://i.imgur.com/Kkp9pKN.jpg", "pics/ocean.jpg");
	$currentPage = $_SERVER['REQUEST_URI'];
	for ($i = count($arrPaths)-1; $i>=0; $i--) {
		if ($currentPage == $arrPaths[$i]) {
			echo "<img class=\"bottomlink\" alt=\"$arrAlts[$i]\" src=\"$arrSrcs[$i]\" width=\"75\" height= \"75\" style=\"border: 5px solid  blue\">";
		} else {
			echo "<a href=\"$arrPaths[$i]\">
			<img class=\"bottomlink\" alt=\"$arrAlts[$i]\" src=\"$arrSrcs[$i]\" width=\"75\" height= \"75\">
			</a>";
		}
		
	}
	
}

highlightNavCurrentPage();

?>