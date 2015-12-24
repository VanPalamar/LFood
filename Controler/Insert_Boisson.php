<?php
include ("functions.php");
$bdd = connect_bdd();

   try
    {
      $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
      $bdd = new PDO('mysql:host=localhost;dbname=LFood', 'root', '', $pdo_options);
      
        $req = $bdd->prepare("INSERT INTO Boissons(nomBoisson,desBoisson,imageBoisson) 
                            VALUES(:nomBoisson,:desBoisson,:imageBoisson");
        $req->execute(array(
          'nomBoisson' => $_POST['nomBoisson'],
          'desBoisson' => $_POST['desBoisson'],
          'imageBoisson' => $_POST['imageBoisson'] 
          ));

        header('Location: Insert_Boisson.php');
    }
    catch(Exception $e)
    {
      die('Erreur : '.$e->getMessage());
    }
 
?>