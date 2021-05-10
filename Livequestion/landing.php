<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>

        <!-- si c'est un membre -->
        <?php
    if(isset($_SESSION['user'])) {
        ?>
    <title>Espace membre</title>
    <?php
}
?>
    <title>Espace visiteur</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- link pour intégrer du Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-color: #EDF2F5;">
    <h1 style="color: #ED008C; margin-left: 5%; margin-top: 1%; float: left;">
    Livequestion</h1>
    <h1 style="float: left; margin-top: 1%; margin-left: 2%;">Les questions</h1>
    <br>
    <div class="container">
        <div class="col-md-12">
            <?php 
            if(isset($_GET['err'])){
                    // sécurité
                $err = htmlspecialchars($_GET['err']);
                    // ici on a les différents cas, lorsque le mot de passe est incorrect et quand le mot de passe a été modifié
                switch($err){
                    case 'current_password':
                    echo "<div class='alert alert-danger'>Le mot de passe actuel est incorrect</div>";
                    break;

                    case 'success_password':
                    echo "<div class='alert alert-success'>Le mot de passe a bien été modifié ! </div>";
                    break; 
                }
            }
            ?>

            <br>
            <div class="text-center">
                <?php
                    if(isset($_SESSION['user'])) {
                        ?>
                <br>
                <h1 class="p-5">Bonjour ! <?php echo $_SESSION['user']; ?></h1>
                <hr />
                <?php
            }
            else
            {
                ?>
            <h1 class="p-5">Bonjour, veuillez vous connecter pour pouvoir intéragir !</h1>
            <?php
        }
            ?>

                <?php
                    if(isset($_SESSION['user']))
                    {
                        ?>
          <!-- une balise <a> qui permet de deconnecter l'utilsateur avec un href de la page "deconnexion.php" -->
                    <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
                  <?php
              }
                  ?>
                 
             </div>
         </div>
     </div>    
        
<?php
    if (isset($_POST['submit'])) {
        extract($_POST);

        if (!empty($nom) and !empty($email) and !empty($message) and !empty($categorie)) 
        {
            require_once('commentaires/db.php');
            $req=$db->prepare('INSERT INTO commentaires(nom,email,messages,categorie,datepost) VALUES (?,?,?,?,NOW())');
            $req->execute(array($nom, $email, $message, $categorie));
        }
    }
?>

    <section style="text-align: center;">
        <br>
    <?php
        require_once('commentaires/db.php');
        $req=$db->prepare('SELECT * FROM commentaires');
        $req->execute();
        while ($reponse = $req->fetch(PDO::FETCH_OBJ)) {
            ?>
            <div style="border: 1px solid; display: inline-block; background-color: white;">
                <span style="font-weight: bold; padding-right: 15px;">Poster par <?php echo $reponse->nom; ?> le <?php echo $reponse->datepost; ?> dans <?php echo $reponse->categorie ?></span>
                <br>
                <p style="padding-right: 15px;"><?php echo $reponse->messages; ?></p>
                <br>
                <?php
                if(isset($_SESSION['user'])) {
                    ?>
                    <a style="border-radius: 25px; background-color:#ED008C; text-decoration: none; color: white; padding: 5px; margin-left: 15px;" href="commentaires/nbreponses.php?id=<?php echo $reponse->id;?>">Vers les réponses :
                        <?php
                        $nbReponse = $db->prepare('SELECT * FROM reponses WHERE id_parent = ?');
                        $nbReponse->execute(array($reponse->id));
                        $nbReponse = $nbReponse->fetchAll();
                        echo count($nbReponse);
                        ?>
                    </a>
                    <?php
                }
                ?>
                <?php
                if(isset($_SESSION['user'])) {
                    ?>
                <a style="border-radius: 25px; background-color:#ED008C; text-decoration: none; color: white; padding: 5px; margin-left: 15px;" href="commentaires/reponses.php?id=<?php echo $reponse->id;?>">Y répondre</a>
                <?php
            }
            ?>
            </p>
        </div>
        <br>
        <br>
            <?php
        }
    ?>

    <?php
        if(isset($_SESSION['user'])) {
            ?>
    <h3>Poser une question</h3>
    <form method="POST" action="">
        <div class="form-group">
            <label>Votre pseudo</label>
            <input style="width: 25%; margin: auto; display:block;" type="text" name="nom" placeholder="Votre pseudo" required="" class="form form-control">
        </div>
        <div class="form-group">
            <label>Votre adresse mail</label>
            <input style="width: 25%; margin: auto; display:block;" type="email" name="email" placeholder="Votre adresse mail" required="" class="form form-control">
        </div>
        <div class="form-group">
            <label>Votre catégorie</label>
            <input style="width: 25%; margin: auto; display:block;" type="text" name="categorie" placeholder="Votre catégorie" required="" class="form form-control">
        </div>
        <div class="form-group">
            <p>Votre question</p>

            <textarea style="width: 25%; margin: auto; display:block;" name="message" placeholder="Votre question"></textarea>
        </div>
        <input type="submit" name="submit" value="Poster" required="" class="btn btn-primary">
    </form>
    <?php
}
?>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
