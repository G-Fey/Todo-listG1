<?php
    if (isset($_POST['form_inscription']))
    {
        $pseudo = htmlspecialchars($_POST['ajout_pseudo']);
        $email = htmlspecialchars($_POST['ajout_email']);
        $mdp = sha1 ($_POST['ajout_mdp']);
        $mdp2 =sha1 ($_POST['ajout_mdp2']);

        if (!empty($pseudo) AND !empty($email) AND !empty($mdp) AND !empty($mdp2))
        {
            //verif mail valide
            if(filter_var($email), FILTER_VALIDATE_EMAIL)
            {
                //vérification si l'email existe
                $reqemail = $bdd -> prepare('SELECT * FROM utilisateurs where mail = ?');
                $reqemail -> execute(array($email));
                $emailexist = $reqmail -> rowcount();

                if ($mailexist == 0)
                {
                    //verif les 2 mdp identiques
                    if ($mdp == $mdp2)
                    {
                        $insertmbr = $bdd -> prepare('INSERT INTO utilisateurs (pseudo, email, mdp ) VALUES (?, ?, ?)');
                        $insertmbr ->execute(array($pseudo, $email, $mdp));
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