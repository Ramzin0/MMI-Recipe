<?php
define("DB_HOST", "localhost");
define("DB_NAME", "earaj_recipes");
define("DB_USER", "s257076recipes");
define("DB_PASS", "XB4jp1DnWLI1");
try {
    $Conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $Conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $Conn->setAttribute(PDO::ATTR_PERSISTENT, true);
    $Conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e) {
    echo $e->getMessage();
    exit();
    }