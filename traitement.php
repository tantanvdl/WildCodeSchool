<?php
    $host='localhost';
    $port=3306;
    $dbname='ajouter un(e) argonaute';
    $user='root';
    $pwd='';

        try{
            $newBD=new PDO('mysql:host=$host;port=$port;dbname=$dbname,$user,$pwd');
            echo "Agronaute ajouté";
        }catch(PDOException $e){
            die('Erreur :'.$e->getMessage());
        }

        if (isset($_POST['prenom'])){
                    $insertion=$newBD->prepare('INSERT INTO profil VALUES(NULL,:prenom)'); 
                $insertion->bindValue(':prenom',$_POST['prenom']);
                    $verification=$insertion->execute();
                if ($verification){
                    echo "<br>Ajouté avec succès";
                }else{
                    echo "Echec d'ajout";
                }

                                
        
        }else{
            echo "Une variable n'est pas declaree et ou est null";
        }
              
?>