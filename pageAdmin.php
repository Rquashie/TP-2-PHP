
<?php
session_start();
echo "<html>" ;
echo "<head>" ;
echo "</head>" ;
echo "<body>" ;
echo "<h1> Page Administrateur</h1>" ;
if(isset($_SESSION["login"])&& $_SESSION["mdp"]) {
    echo "<h3> Bienvenue " . $_SESSION['login'] . "</h3>";
    echo "<hr>";
    echo "<div class='enTete'>" ;
    echo"<div class ='enTeteUn'>" ;
    echo "<li> <a href=modifier.html> Modifier les informations d'un utilisateur </a></li>";
    echo "</div>";
    echo"<div class ='enTeteDeux'>" ;
    echo "<li> <a href='suppression.php'>Supprimer des informations</a></li>";
    echo "</div>";
    echo "</div>" ;
    echo "<hr>";


    echo "<a href=index.html>Se deconnecter</a>";


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

