<?php

if(isset($_POST)){
    include('header.php');
    $query = 'UPDATE vartotojas SET blokuotas=1 WHERE id_Vartotojas=' . $_POST['id'];
    mysqli_query($db, $query);

    $query = "INSERT INTO blokuotas_vartotojas (komentaras, fk_Administratoriusid_Administratorius, fk_Vartotojasid_Vartotojas)
              VALUES ('".$_POST['reason']."','".$USERINFO['fk_Administratorius']."','".$_POST['id']."')";
    mysqli_query($db, $query);
    header("Location: naudotojoPuslapis.php?id=" . $_POST['id']);
}

?>
