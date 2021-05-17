<?php 

$numrat = array( 1, 2, 3, 4, 5);
         
foreach( $numrat as $vlera ) {
   echo "Vlerat eshte $vlera <br />";
}

echo "<br>";
echo "<br>";
echo "<br>";


// 2. Asociative
$vendi = ['qyteti' => 'Prishtina', 'shteti' => 'Kosoves'];

echo "Kryeqyteti i " . $vendi['shteti'] . " eshte " . $vendi['qyteti'];



echo "<br>";
echo "<br>";
echo "<br>"; 

//Exeception

function verifikoNoten($nota){
	if($nota<6 ||  $nota>10){
		throw new Exceptions("Nota mes 6 dhe 10");
	}
return true;
}
// perdorimi i try

try{
    $nota = 6;
	verifikoNoten($nota);
	echo 'Nota eshte '. $nota . '. Studenti kalon!';
}

//catch

catch(Exception $e) {
	echo 'Mesazhi : ' .$e->getMessage();
}
?>
<p align="center"><a href="index.php">Kthehu ne Home</a></p>