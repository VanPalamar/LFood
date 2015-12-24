<?php
include ("functions.php");
$bdd = connect_bdd();

   try
    {
      $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
      $bdd = new PDO('mysql:host=localhost;dbname=LFood', 'root', '', $pdo_options);
      
        $req = $bdd->prepare("INSERT INTO Sandwichs(nomSandwich,desSandwich,prixSandwich,imageSandwich) 
                            VALUES(:nomSandwich,:desSandwich,:prixSandwich,:imageSandwich");
        $req->execute(array(
          'nomSandwich' => $_POST['nomSandwich'],
          'desSandwich' => $_POST['desSandwich'],
          'prixSandwich' => $_POST['prixSandwich'],
          'imageSandwich' => $_POST['imageSandwich'] 
          ));

        header('Location: Insert_Sandwich.php');
    }
    catch(Exception $e)
    {
      die('Erreur : '.$e->getMessage());
    }
 
?>