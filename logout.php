<?php
    // Finally, destroy the session.
    session_destroy();

    // Redirect to the login page after logout
    header("Location: login.php");
    exit;
?>