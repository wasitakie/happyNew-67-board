<?php
if (empty($_SESSION["adminUser"])) {
    header("location: index.php");
}