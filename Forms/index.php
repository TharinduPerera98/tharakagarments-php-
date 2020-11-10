<?php
    session_start();
    if ( !empty( $_SESSION['Username'] ) ) {
    	header( "Location: ./../Inside/L_home.php" );
    }
    ?>