<?php

try {
    $access = new PDO("mysql:host=localhost;dbname=site e-commerce;charset=utf8", "root", "");

    $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (\Throwable $th) {
    $th->getMessage();
}
