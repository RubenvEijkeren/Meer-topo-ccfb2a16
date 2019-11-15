<<?php
$topo = array();
echo "Hoeveel landen ga je toevoegen?\n";
$aantal = readline();
if (!(is_numeric($aantal))){
	echo "Dit is geen nummer\n";
	exit;
}
else {
for ($i=0; $i < $aantal; $i++) { 
	echo "Welk land wil je toevoegen?\n";
	$land = readline();
	echo "Wat is de hoofdstad van " . $land . "?\n";
	$stad = readline();
	$topo[$land] = $stad;
}
echo "De volgende landen en steden zitten in de database\n";
foreach ($topo as $key => $value) {
	echo $key . ", " . $value . "\n";
}
}
?>