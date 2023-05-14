<?php
    include "cnx.php";
       if(isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["sexe"]) && isset($_GET["date"])&& isset($_GET["lieu"])&& isset($_GET["niveau"] )&& isset($_GET["telephone"])&& isset($_GET["adresse"])&& isset($_GET["matricule"]))
	{
		$nom=$_get["nom"];
        $prenom=$_get["prenom"];
        $sexe=$_get["sexe"];
        // $datedenaissance=$_get["date"];
        // $lieudenaissance=$_get["lieu"];
        $role=$_get["role"];
        $grade=$_get["grade"];
        $matricule=$_get["matricule"];
        $telephone=$_get["telephone"];
        $adresse=$get["adresse"];
        $code=$_get["code"];

		echo $nom;

		$bd=new PDO("mysql:host=localhost;dbname=enregistrement","root","");
		$req=$bd->prepare("insert into enseignant(nom,prenom,sexe,role,grade,matricule,telephone,adresse mail,code) 
        values ('$nom','$prenom','$sexe','$role','$grade','$matricule','$telephone','$adresse','$code')");
		$req->execute();

        echo '<script> window.location.href="http://localhost/Projet%20Plateforme%20Memoire%20FS/JuryLicencePro/Examinateur.php";</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINIS</title>
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
                <legend>ENREGISTREMENT MEMBRE DE l'ADMINISTRATION</legend>
        
                <form>
                <label>nom</label>
                <input type="text" name="nom" placeholder="votre Nom" size="50"><br>
                
            <label> prenom</label>
                <input type="text" name="prenom" placeholder="votre PréNom" size="50"><br>
        
                <label>sexe</label>
                <input type="radio" name="sexe" value='M'>M<input type="radio" name="sexe" value="f">F<br>
        
                <label> votre rôle</label>
                <select size="1" value='role'>
                    <option value="">surveillant</option>
                    <option value="">enseignant</option>
                    <option value="">surveillant Général</option>
                    <option value="">censeur</option>
                    <option value="">Proviseur</option>
                    <option value="">Vice profiseur</option>
                </select><br>
                
                <label> votre grade</label>
                <select size="1" value="grade">
                    <option value="maitrise">maitrise</option>
                    <option value="PCEG">PCEG</option>
                    <option value="PLEG">PLEG</option>
                    <option value="Docteur">Docteur</option>
                    <option value="Licence">Licence</option>
                </select><br>
        
                <label>Matricule</label>
                    <input type="text" size="10" placeholder="entrer votre matricule" name="matricule"><br>
                
                <label>  telephone</label>
                    <input type="text" name="" placeholder="votre Numéro télephonique" size="50"><br>
                    
                    <label>adresse mail (gmail)</label>
                    <input type="text" name="adresse"  placeholder="votre adresse e-mail" size="50"><br>
        
                    <label>code d'enregistrement</label>
                    <input type="text" name="code"  placeholder="entrer votre code d'enregistrement" size="50"><br>
            
                    <label>NB: Vérifier vos information saisie</label><br>
                <input type="submit" name="s'enregistrer" value="s'enregistrer">
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