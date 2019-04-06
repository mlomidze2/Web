<?php
include './View/home.php';

if(isset($_POST))
{
    // Second email filter after html input filter useless but still..
    if (filter_var($_POST[email], FILTER_VALIDATE_EMAIL))
    {
        if (!file_exists("Users.txt"))
        {
            $file = "Users.txt";
            $txt = $_POST[username] . " " . $_POST[password] . " "  . $_POST[email] . "\n";
            file_put_contents($file, $txt);  
        } 
        else
        {
            $file = "Users.txt";
            $txt = $_POST[username] . " " . $_POST[password] . " "  . $_POST[email] . "\n";
            file_put_contents($file, $txt, FILE_APPEND | LOCK_EX);
        }
    } 
    else
    {
        echo "Invalid E-mail";
    }
}

/*
$homepage = file_get_contents('Users.txt');
echo $homepage;*/


/*if(isset($_POST))
{
    if (!file_exists("Users.txt"))
    {
        $myfile = fopen("Users.txt", "w") or die("Unable to open file!");
        $txt = $_POST[username] . " " . $_POST[password]."\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    }
    else
    {
        $myfile = fopen("Users.txt", "a");
        $txt = $_POST[username] . " " . $_POST[password]."\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    }
}*/