<?php 

    if(isset($_POST['btn-send']))
    {
        echo "hello";
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
      
           header('location:index.php?error');
       }
       else
       {
     
           $to = "daliamahmoud405@gmail.com";
           echo "hello";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>