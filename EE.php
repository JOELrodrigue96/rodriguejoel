<?php
    include "cnx.php";
    // if(isset($_POST['envoyez']))    
    // {
        
    //     $matricule=$_get["matricule"];
    //     $nom=$_get["nom"];
    //     $prenom=$_get["prenom"];
    //     $sexe=$_get["sexe"];
    //     $datedenaissance=$_get["date"];
    //     $lieudenaissance=$_get["lieu"];
    //     $niveau=$_get["niveau"];
    //     $telephone=$_get["telephone"];
    //     $adresse=$get["adresse"];
    //     // $req=mysqli_query($link, insert into eleves (nom,prenom,sexe,date_de_naissance,lieu_de_naissance,niveau,matricule,telephone,adresse)
    //     // values ('$nom','$prenom','$sexe','$datedenaissance','$lieudenaissance','$niveau','$matricule','$telephone','$adresse'));
        
    //     if($req)
    //     {
    //         echo "insertion effectuée";
    //     }
    //     else
    //     {
    //         echo "erreur d'insertion";
    //     }
    if(isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["sexe"]) && isset($_GET["date"])&& isset($_GET["lieu"])&& isset($_GET["niveau"] )&& isset($_GET["telephone"])&& isset($_GET["adresse"])&& isset($_GET["matricule"]))
	{
		$nom=$_get["nom"];
        $prenom=$_get["prenom"];
        $sexe=$_get["sexe"];
        $datedenaissance=$_get["date"];
        $lieudenaissance=$_get["lieu"];
        $niveau=$_get["niveau"];
        $telephone=$_get["telephone"];
        $adresse=$get["adresse"];
        $matricule=$_get["matricule"];

		echo $nom;

		$bd=new PDO("mysql:host=localhost;dbname=enregistrement","root","");
		$req=$bd->prepare("insert into eleves(nom,prenom,sexe,date_de_naissance,lieu_de_naissance,niveau,matricule,telephone,adresse) values ('$nom','$prenom','$sexe','$datedenaissance','$lieudenaissance','$niveau','$matricule','$telephone','$adresse')");
		$req->execute();

        echo '<script> window.location.href="C:\xampp\htdocs\pp\accueil.php";</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELEV</title>
    <style>
        #entete{
            background-color: aqua;
            text-align: center;
            width: 800px;
            height: 30PX;
            margin-left: 400px;
            margin-right: 400px;
            padding-bottom: 1cm;
        }
        #main{
            max-width: 960px;
            margin: auto;
        }
        #menu{
            float: left;
            width: 240px;
            background-color: rgb(223, 223, 233);
            
            height: 700px;
            overflow-x: auto; 
        }
        #contenu{
            margin-left: 245px;
            background-color: ;
        }
        #footer{
            background-color: aquamarine;
            text-align: center;
            clear: both;
        }
        input[type="text"] {
        position: relative;
        border-radius: 5px;
        padding: 10px;
        width: 70%;
        background-color: rgb(193, 182, 207);
        margin: 10px;
        }
        form{
            font-family: 'Times New Roman', Times, serif;
            font-style: italic;
            font-size: 25px;
            line-height: normal;
            object-position: right;

        }
        fieldset{
                    border-radius: 8px;
                    width: 70%;
                    display: inline-block;
                    text-align: left;
                    background-color: aqua;
                }
        label {
                    width: 20%;
                    display: inline-block;
                    text-align: left;
                }
        option{
            position: relative;
        border-radius: 5px;
        padding: 10px;
        width: 70%;
        background-color: rgb(193, 182, 207);
        margin: 10px;
        display: inline-block;
        }
        input[type="date"] {
        position: relative;
        border-radius: 5px;
        padding: 10px;
        width: 70%;
        background-color: rgb(193, 182, 207);
        margin: 10px;
        }
        .placeholder{
            align-items: center;

        }
        .H2{
            font-size: 15PX;
            font-family: 'Times New Roman', Times, serif;
            font-style: normal;
            outline-color: aqua;
            color: blue;
            padding: 20px;
margin-left: 30px;
position: relative;
left: 30%;;
        }
    </style>
</head>
<body style="background-color: aqua;">
    <div id="entete">
        <!--en tete--><p>BIENVENUE SUR NOTRE PLATE FORME D'ENREGISTREMENT</p>
    </div>
    <div id="main">
        <div id="menu"><p><span style="size=14px; font-family: 'Times New Roman', Times, serif;font-style: italic;">description du site</span></p><br>
            <p>conçue pour l'enregistrement des élèves d'un etablissement choisie, afin de faciliter les prises de contact avec un eleves en cas d'accident afin de retrouver facilement les informations sur ce dernier nottament son contact ou celui de son tuteurs</p>
            <!--menu-->
        </div>
        <div id="contenu">
            <fieldset>
                <legend>ENREGISTREMENT EN TANT QUE ELEVE</legend>
        
                <form>
                <label>nom</label>
                <input type="text" name="nom" size="50" value=''><br>
                
               <label> prenom</label>
                <input type="text" name="prenom" size="50" value=""><br>
    
                <label>sexe</label>
                <input type="radio" name="sexe" value="M">homme<input type="radio" name="sexe" value='F'>Femme<br>
    
                <label>date de naissance</label> 
                <input type="date" placeholder="entrer la date de naissance" value=""><br>
    
                <label>lieu de naissance</label>
                <input type="text" size="50" placeholder="lieu de naissance" name="lieu" value=""><br>
    
                <label> votre Niveau Actuel</label>
                <select size="1" name="niveau">
                    <option value="6eme">sixième</option>
                    <option value="5eme">cinquième</option>
                    <option value="4eme">quatrième</option>
                    <option value="3eme">troisième</option>
                    <option value="2nde">Seconde</option>
                    <option value="1ere">Première</option>
                    <option value="Tle">Terminale</option>
                </select><br>
                
                <label>Matricule</label>
                    <input type="text" size="10" placeholder="entrer votre matricule" name="matricule" value=""><br>
                
                  <label>  telephone</label>
                    <input type="text" name="" size="50" name="telephone" ><br>
                    
                    <label>adresse mail (gmail)</label>
                    <input type="text" name="" size="50" name="adresse"><br>
            
        
                <a href="C:\xampp\htdocs\pp\accueil.php"><input type="submit" name="envoyez" value="envoyez"></a>
                <input type="reset" name="" value="effacer les information entrées"><br>
            
        
                <!--Cuoleur favorie
                <input type="checkbox" name="" value="">rouge<input type="checkbox" name="">vert<input type="checkbox" name="">blue<br>-->
                </form>     
        </fieldset>

        </div>
    </div>
    <div id="footer">
        <!--pied de page--><p> conçue par <span style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;">LONTSI RODRIGUE JOEL</span> <BR> MATRICULE: 21A098FS</p>
    </div>
</body>
</html>