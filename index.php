<form method='post' action='index.php'>
	<label for='digit'>Choisissez un chiffre en 0 et 3 :</label><br>
	<input type="number" name="digit" id="digit"  min="1" max="3"><br>
    <input type='submit' value='Envoyer'>
</form>

<?php

if(isset($_POST['digit']) && !empty($_POST['digit'])) 

{
     $x = $_POST['digit']; 
    switch($x){
    case 0:
        echo 'Vous avez choisi 0';
        break;
    case 1:
        echo 'Vous avez choisi 1';
        break;
    case 2:
        echo 'Vous avez choisi 2';
        break;
    case 3:
        echo 'Vous avez choisi 3';
        break;
    default:
        echo 'Vous n\'avez pas choisi un nombre compris entre 0 et 3 !';
    }
}

?>

