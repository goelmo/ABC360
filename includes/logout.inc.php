<?php
session_start();
session_destroy();

// will forward if user is loged in to index page
header("Location : index.php")
?>