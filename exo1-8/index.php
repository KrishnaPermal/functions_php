<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo1-8</title>
</head>
<body>
    
//exo 1
<?php 

    function Verite(){
       
        return true; 

    }

    echo $reponse = Verite();
    
    ?>

// Exo 2
      
<?php
function Chaine($char){
      return $char;
    }

$chaineChar = Chaine("Bonjour");
echo $chaineChar;
?>
  
// Exo 3 
  
<?php
  
function chCharact($chaine1, $chaine2) {
  return $chaine1 . $chaine2;
}

$chaine = chCharact("Je suis ", "gueri");

echo $chaine;




?>
  
//Exo 4  
  
<?php
  
  function Nb($val1, $val2){
  		if ($val1 > $val2) { 
    		return "Le premier nombre est plus grand";
      
    }
  	
   elseif ($val1 < $val2) { 
     
    		return "Le premier nombre est plus petit";
     
   }
  	
  	elseif ($val1 == $val2) {
      
    		return "Les deux nombres sont identiques";
     
	}

	$valeur = Nb(1, 5)
  		
    echo	$valeur;
    
  ?>
    
    
// exo 5
    <?php
    function Concatenation($varNum, $varString){
    return $varNum . ' ' . $varString;
  }

$concatenation = Concatenation(55, "je suis vieux!");
echo $concatenation;
?>
  
// exo 6
  
<?php
        
function Affiche($nom, $prenom, $age){
return "Bonjour " . $nom . " " . $prenom . ", tu as " . $age . " ans";
}

echo Affiche("Jams", "Kevin", 23);         

?>
  
 //exo7 
    
<?php
        
		$age =(int)18;
		$gender =(string)"homme";


    function Personne($chaine,$chaine2){

        if ($chaine < 18 AND $chaine2 == "homme")
            {
                return "Vous êtes un homme et vous êtes mineur";
            }

        elseif ($chaine >= 18 AND $chaine2 == "homme")
            {
                return "Vous êtes un homme et vous êtes majeur";
            }

        elseif ($chaine < 18 AND $chaine2 == "femme")
            {
                return "Vous êtes une femme et vous êtes mineur";

            }

        elseif ($chaine >= 18 AND $chaine2 == "femme")
            {
                return "Vous êtes une femme et vous êtes majeur";
            }

    }

		echo Personne($age,$gender);
  
  
  


?>  
  
  

 //exo 8
  
  <?php
    
$n1=13;
$n2=42;
$n3=7;

function Somme($chaine, $chaine2, $chaine3){
  return $chaine + $chaine2 + $chaine3;
}
echo Somme($n1, $n2, $n3);
  ?>


</body>
</html>