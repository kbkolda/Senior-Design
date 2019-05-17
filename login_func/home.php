
<?php
    session_start();
    $name = $_SESSION['username'];
    echo '<div>HELLO '.$name.'</div>'    ;
    if (!isset($_SESSION['username'])) { //not logged in

        //redirect to homepage
        header("Location: login");
        exit();          
    }
?>
