<?php
include ("functions.php");
$bdd = connect_bdd();

   try
    {
      $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
      $bdd = new PDO('mysql:host=localhost;dbname=LFood', 'root', '', $pdo_options);
      
        $req = $bdd->prepare("INSERT INTO Pizza(nomPizza,desPizza,prixPizza,imagePizza) 
                            VALUES(:nomPizza,:desPizza,:prixPizza,:imagePizza");
        $req->execute(array(
          'nomPizza' => $_POST['nomPizza'],
          'desPizza' => $_POST['desPizza'],
          'prixPizza' => $_POST['prixPizza'],
          'imagePizza' => $_POST['imagePizza'] 
          ));

        header('Location: Insert_Pizza.php');
    }
    catch(Exception $e)
    {
      die('Erreur : '.$e->getMessage());
    }
 
?>