<?php 
    // on demarre une session //
    session_start();
    require_once 'config.php';

    // On vérifie si l'email et le mot de passe ne sont pas vide
    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
        // sécurité
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        // on récupère l'identifiant, l'email et le mot de passe
        $check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        // on recupère les données qu'on place dans une variable
        $data = $check->fetch();
        // on met un compteur
        $row = $check->rowCount();

        if($row == 1)
        {
            // on filtre les différentes adresses mail pour qu'elle corresponde au mot de passe
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                
                if(password_verify($password, $data['password']))
                {
                    // si l'utilisateur correspond bien à l'email
                    $_SESSION['user'] = $data['email'];
                    // on le redirige à la page principale
                    header('Location: landing.php');
                    die();
                }
                else
                    { 
                        // on le redirige sur index.php, la où il y a les différents cas d'erreur qui est issue ici du mot de passe
                        header('Location: index.php?login_err=password'); 
                        die(); 
                    }
            }
            else
            { 
                // idem ici sauf qu'il s'agit ici de l'email
                header('Location: index.php?login_err=email'); 
                die(); 
            }
        }
        else
        { 
            // ici aussi sauf qu'il s'agit ici du compte non créer
            header('Location: index.php?login_err=already'); 
            die(); 
        }
    }
 