
<?php
session_start();
echo "<html>" ;
echo "<head>" ;
echo "</head>" ;
echo "<body>" ;
echo "<h1> Page membres</h1>" ;
if(isset($_SESSION["login"])&& $_SESSION["mdp"]) {
    echo "<h3> Bienvenue " . $_SESSION['login'] . "</h3>";
    echo "<hr>";
    echo "<div class='enTete'>" ;
    echo"<div class ='enTeteUn'>" ;
    echo "<li><a> Modifier les informations d'un inscrit </a></li>";
    echo "</div>";
    echo"<div class ='enTeteDeux'>" ;
    echo "<li> <a>Ajouter un nouvel emprunt</a></li>";
    echo "</div>";
    echo "</div>" ;
    echo "<hr>";
    echo "<h3> Liste des livres empruntés</h3>" ;
    // Select * from livre

    echo "<a href=deconnecter.php>Se deconnecter</a>";

    }
    echo "</body>" ;
    echo "</html>" ;

?>
<style type ="text/css">
    .enTete{
        display : flex ;
        padding : 50px;
        margin-left: 100px;
    }
    .enTeteDeux {
        margin-left: 100px;
    }
    html{
        width : 80%
        margin : auto;

    }


