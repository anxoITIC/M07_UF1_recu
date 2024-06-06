<?php
    //iniciar la sessió
    session_start();

    //array amb els usuaris registrats
    $llistaUsuaris = array("joan", "anna", "carlos", "maria", "carla");

    //variables amb les dades del formulari
    $nom = $_POST['name'];
    $edat = $_POST['age'];
    $condicions = isset($_POST['conditions']);

    //mirar si l'usuari forma part dels usuaris registrats i si ha marcat les condicions
    if(in_array($nom, $llistaUsuaris) && $condicions == true){
        //guardem en sessions el nom del usuari i si ha fet login
        $_SESSION['usuari'] = $nom;
        $_SESSION['sessio_login'] = true;
    } else {
        //si no forma part dels usuaris posem que la session es false
        $_SESSION['sessio_login'] = false;
    }
    //redirigim a la pàgina del resultat si el login es true
    if ($_SESSION['sessio_login'] == true){
        header("Location: resultat.php");
    } else {
        header("Location: index.php");
    }
    
    // si la sessio_login es false, retorna a index.html ficant usuari no trobat
    if ($_SESSION['sessio_login'] == false) {
        header("Location: index.php?error=usuari no trobat");
    }

    //buidem i destruim la sessió
    session_unset();
    session_destroy();
?>