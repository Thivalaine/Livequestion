<!-- ici je décide de faire un nouveau "config.php" car ce n'est pas la même base de données et le chemin est trop loin pour cette partie-->
<?php 
    try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=livequestion;charset=utf8", "root", "root");
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
