<?php
include ("functions.php");
$bdd = connect_bdd();

   try
    {
      $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
      $bdd = new PDO('mysql:host=localhost;dbname=LFood', 'root', '', $pdo_options);
      
        $req = $bdd->prepare("INSERT INTO Ingredients(nomIngredient) 
                            VALUES(:nomIngredient");
        $req->execute(array(
          'nomIngredient' => $_POST['nomIngredient']
          ));

        header('Location: Insert_Ingredients.php');
    }
    catch(Exception $e)
    {
      die('Erreur : '.$e->getMessage());
    }
 
?>