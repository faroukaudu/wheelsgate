<?php

if(isset($_POST['btn-send']))
{
    echo 'working';
    $Username = $_POST['name'];
    $Email = $_POST['email'];
    $Subject = $_POST['subject'];
    $Msg = $_POST['message'];

    if(empty($Username) || (empty($Email) || (empty($Subject) || (empty($Msg))
    
    {
        header('location:contact.php?error');
    }

    else
    {
        $to = "fagzy99@gmail.com";
        if (Mail($to,$Subject,$Msg,$Email)) 
        {
            header("location:contact.php?success");
        }

    }

else 
{

    header("location:contact.php");

}


    
}


?>