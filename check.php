<?php
/*
 * Author:           I.A John <ifeoluwa.adewunmi94@gmail.com>
 * Copyright:        (c) 2020, Ifeoluwa-Adewunmi John | All Rights Reserved.
 */

if (isset($_GET['amount']))
{
    try
    {
        require 'Transfer.php';
        echo (new Transfer($_GET['amount']))->xmlOutput(); // PHP 5.4 syntax, access on instantiation        

    }
    catch (Exception $oE)
    {
        file_put_contents('exception.log', $oE->getMessage() . PHP_EOL . PHP_EOL, FILE_APPEND); // Create a log file
        return false;
    }
}