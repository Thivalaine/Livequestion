<!-- il s'agit ici du traitement lors que l'inscription de l'utilsateur -->
<?php 
    require_once 'config.php';

    // lorsque le pseudo, l'email, le mot de passe et la réécriture du mot de passe n'est pas vide et que le genre soit égale monsieur ou madame
    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype']) && $_POST['genre'] == 'Monsieur' || $_POST['genre'] == 'Madame')
    {
        // sécurité
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        if ($_POST['genre'] == 'Monsieur') {
            $genre = 'Monsieur';
        }
        if ($_POST['genre'] == 'Madame')
        {
            $genre = 'Madame';
        }

        $password_retype = htmlspecialchars($_POST['password_retype']);

        // on vérifie si le compte n'existe pas dans la base de données 

        $check = $bdd->prepare('SELECT pseudo, email, password, genre FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 0){ 
            // si la longueur du pseudo est inférieur ou égale à 100
            if(strlen($pseudo) <= 100){
                // si l'adresse mail est inférieur ou égale à 100
                if(strlen($email) <= 100){
                    // on filtre parmi les autres adresse mail
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                        // si le mot de passe est bien égale à la réécriture du mot de passe
                        if($password == $password_retype){

                            // il s'agit du coût souhaité
                            $cost = ['cost' => 12];
                            // système de hachage "BCRYPT" de mot de passe
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                            
                            // on récupère l'adresse ip de l'utilisateur
                            $ip = $_SERVER['REMOTE_ADDR'];

                            // on insère le pseudo, l'email, le mot de passe et l'ip dans la base de données
                            $insert = $bdd->prepare('INSERT INTO utilisateurs(pseudo, email, password, genre, ip) VALUES(:pseudo, :email, :password, :genre, :ip)');
                            // et on les définis dans des variables
                            $insert->execute(array(
                                'pseudo' => $pseudo,
                                'email' => $email,
                                'password' => $password,
                                'genre' => $genre,
                                'ip' => $ip
                            ));

                            

                            // si le mot de passe est bien égale à la réécriture du mot de passe alors on redirige l'utilsiateur vers la page d'inscription "inscription.php" et on le met dans le cas "success" du switch de cette page
                            header('Location:inscription.php?reg_err=success');
                            die();
                        }
                        else
                        { 
                            // idem sauf qu'ici on le met dans le cas du "password"
                            header('Location: inscription.php?reg_err=password'); 
                            die();
                        }
                    }
                    else
                    { 
                        // idem sauf qu'ici c'est le cas de "email"
                        header('Location: inscription.php?reg_err=email'); 
                        die();
                    }
                }
                else
                { 
                    // ici la longueur de l'adresse mail
                    header('Location: inscription.php?reg_err=email_length'); 
                    die();
                }
            }
            else
            { 
                // ici la longueur du pseudo
                header('Location: inscription.php?reg_err=pseudo_length'); 
                die();
            }
        }
        else
        { 
            // ici si le compte exite déjà !
            header('Location: inscription.php?reg_err=already'); 
            die();
        }
    }
