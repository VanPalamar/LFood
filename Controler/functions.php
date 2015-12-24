<?php 
function connect_bdd() {
    try
    {
    // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=LFood', 'root', '');
    }
    catch(Exception $e)
    {
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
    }
    return $bdd;
 
}
function get_pizzas () {
   $bdd = new PDO('mysql:host=localhost;dbname=LFood', 'root', '');
    $reponse = $bdd->query('SELECT * FROM Pizza');
    return $reponse;
 
}
function get_sandwichs () {
   $bdd = new PDO('mysql:host=localhost;dbname=LFood', 'root', '');
    $reponse = $bdd->query('SELECT * FROM Sandwichs');
    return $reponse;
 
}
function get_boissons () {
   $bdd = new PDO('mysql:host=localhost;dbname=LFood', 'root', '');
    $reponse = $bdd->query('SELECT * FROM Boissons');
    return $reponse;
 
}
function get_sauces () {
   $bdd = new PDO('mysql:host=localhost;dbname=LFood', 'root', '');
    $reponse = $bdd->query('SELECT * FROM Sauces');
    return $reponse;
 
}
function get_ingredients () {
   $bdd = new PDO('mysql:host=localhost;dbname=LFood', 'root', '');
    $reponse = $bdd->query('SELECT * FROM Ingredients');
    return $reponse;
 
}
function get_pizza_by_name () {
   $bdd = new PDO('mysql:host=localhost;dbname=LFood', 'root', '');
    $reponse = $bdd->query('SELECT * FROM Pizza WHERE nomPizza = "'.$_POST["nomPizza"].'"');
    return $reponse;
 
}
function get_sandwich_by_name () {
   $bdd = new PDO('mysql:host=localhost;dbname=LFood', 'root', '');
    $reponse = $bdd->query('SELECT * FROM Sandwichs WHERE nomSandwich = "'.$_POST["nomSandwich"].'"');
    return $reponse;
 
}
function get_boisson_by_name () {
   $bdd = new PDO('mysql:host=localhost;dbname=LFood', 'root', '');
    $reponse = $bdd->query('SELECT * FROM Boissons WHERE nomBoisson = "'.$_POST["nomBoisson"].'"');
    return $reponse;
 
}
function get_sauce_by_name () {
   $bdd = new PDO('mysql:host=localhost;dbname=LFood', 'root', '');
    $reponse = $bdd->query('SELECT * FROM Sauces WHERE nomSauce = "'.$_POST["nomSauce"].'"');
    return $reponse;
 
}
function get_ingredient_by_name () {
   $bdd = new PDO('mysql:host=localhost;dbname=LFood', 'root', '');
    $reponse = $bdd->query('SELECT * FROM Ingredients WHERE nomIngredient = "'.$_POST["nomIngredient"].'"');
    return $reponse;
 
}

?> 


