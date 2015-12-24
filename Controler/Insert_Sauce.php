<?php
include ("functions.php");
$bdd = connect_bdd();

   try
    {
      $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
      $bdd = new PDO('mysql:host=localhost;dbname=LFood', 'root', '', $pdo_options);
      
        $req = $bdd->prepare("INSERT INTO Sauces(nomSauce,imageSauce) 
                            VALUES(:nomSauce,:imageSauce");
        $req->execute(array(
          'nomSauce' => $_POST['nomSauce'],
          'imageSauce' => $_POST['imageSauce'] 
          ));

        header('Location: Insert_Sauce.php');
    }
    catch(Exception $e)
    {
      die('Erreur : '.$e->getMessage());
    }
 
?>