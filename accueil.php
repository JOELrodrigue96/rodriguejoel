<?php
    include "cnx.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCU</title>
    <style>
        #entete{
            background-color:;
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
            height:700px;
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
            background-color:aqua;
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
                    background-color:;
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
            outline-color:;
            color:;
            padding: 20px;
margin-left: 30px;
position: relative;
left: 30%;;
        }
        .button1 {
            background-color: blue;
            font-family: russo one;
            align-content: center;
            color: white;
            padding: 20px;
            margin: 50px;
            margin-left: 30px;
            position: relative;
            text-decoration: none;
            left: 30%;;
            display: inline-block;
        }
        .button2 {
            background-color: blue;
            font-family: russo one;
            align-content: right;
            color: white;
            padding: 20px;
            margin: 80px;
            margin-right: 300px;
            position: relative;
            text-decoration: none;
            left: 30%;;
            display: inline-block;
        }
        .button {
            background-color: #1abc1a;
            font-family: 'Montserrat';
            align-content: center;
            color: white;
            padding: 20px;
            margin: 5px;
            margin-left: 30px;
            position: relative;
            text-decoration: none;
            left: 30%;;
            display: inline-block; 
        }
    </style>
</head>
<body >
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
                <legend id="contenu">ENREGISTREMENT EN TANT QUE ELEVE</legend>
        
                        <center><h2></b>choisissez l'action a mener<b></h2></center>
                             <label><a class="boutton" href="">rechercher </a></label><br>
                             <label></label><a href="C:\xampp\htdocs\pp\EE.html">ENREGISTREMENTS EN TANT QU'ELEVE</a></label><br>
                             <label></label><a href="C:\xampp\htdocs\pp\EMA.html">ENREGISTREMENTS EN TANT QU'ADMINISTRATEUR</a></label>
                             

                      

                   
            </fieldset>

        </div>
    </div>
    <div id="footer">
        <!--pied de page--><p> conçue par <span style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;">LONTSI RODRIGUE JOEL</span> <BR> MATRICULE: 21A098FS</p>
    </div>
</body>
</html>