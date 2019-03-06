<?php
try{
    $bdd = New PDO("mysql:host=localhost;dbname=todolistg1;charset=utf8", "root", "" ,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    if (isset($_POST['form_inscription']))
    {
        $pseudo = htmlspecialchars($_POST['ajout_pseudo']);
        $email = htmlspecialchars($_POST['ajout_email']);
        $mdp = sha1 ($_POST['ajout_mdp']);
        $mdp2 =sha1 ($_POST['ajout_mdp2']);

        if (!empty($pseudo) AND !empty($email) AND !empty($mdp) AND !empty($mdp2))
        {
            //verif mail valide
            if(filter_var($email))
            {
                //vérification si l'email existe
                $reqemail = $bdd -> prepare('SELECT * FROM utilisateurs where email = ?');
                $reqemail -> execute(array($email));
                $emailexist = $reqemail -> rowcount();

                if ($emailexist == 0)
                {
                    //verif les 2 mdp identiques
                    if ($mdp == $mdp2)
                    {
                        $insertmbr = $bdd -> prepare('INSERT INTO utilisateurs (email, mot_de_passe, pseudo ) VALUES (?, ?, ?)');
                        $insertmbr ->execute(array($email, $mdp, $pseudo));
                        echo "Votre compte a bien été crée";
                    }

                    else
                    {?>
                    <script type="">
                        //créer une div
                        var div = document.createElement('div');
                        
                        //ajout de class sur la div 
                        $(div).addClass('alert alert-danger');
                        //créer du text
                        var text = document.createTextNode("Vos mots de passe ne concordent pas.");  

                        //manipulation HTML
                        $(div).append(text); 
                        $('#form-inscription').before(div);
                    </script>

                    <?php
                    }

                    
                }

                else
                {?>
                <script type="">
                    //créer une div
                    var div = document.createElement('div');
                        
                    //ajout de class sur la div 
                    $(div).addClass('alert alert-danger');
                    //créer du text
                    var text = document.createTextNode("Ce mail est déjà associè à un compte.");  

                    //manipulation HTML
                    $(div).append(text); 
                    $('#form-inscription').before(div);  
                </script>

                <?php
                }
            }

            else
            {?>
            <script type="">
                //créer une div
                var div = document.createElement('div');
                
                //ajout de class sur la div 
                $(div).addClass('alert alert-danger');
                //créer du text
                var text = document.createTextNode("Mail invalide.");  

                //manipulation HTML
                $(div).append(text); 
                $('#form-inscription').before(div);
            </script>

            <?php
            }
        }
        else
        {?>
        <script type="">
           //créer une div
           var div = document.createElement('div');
           
           //ajout de class sur la div 
           $(div).addClass('alert alert-danger');
           //créer du text
           var text = document.createTextNode("Il manque une information.");  

           //manipulation HTML
           $(div).append(text); 
           $('#form-inscription').before(div);                         
        </script>

        <?php
        }

    }
    else
    {?>
    <script type="">
        //créer une div
        var div = document.createElement('div');
           
        //ajout de class sur la div 
        $(div).addClass('alert alert-danger');
        //créer du text
        var text = document.createTextNode("Tous les champs doivent être complétés.");  

        //manipulation HTML
        $(div).append(text); 
        $('#form-inscription').before(div);                        
    </script>

    <?php
    }
?>