<?php
if (empty($_SESSION["idCode"])) {
    header("location: index.php");
}