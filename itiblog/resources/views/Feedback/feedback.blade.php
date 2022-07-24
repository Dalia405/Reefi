<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Contact Us Form In Php</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;


        }

        body {
            min-height: 100vh;
            width: 100%;
            background: #c8e8e9;
            display: block;
            align-items: center;
            justify-content: center;
            background-image: url("R.jpg");


        }

    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2"> FeedBack </h2>
                        <hr>
                        <?php
                        $Msg = "";
                        if (isset($_GET['error'])) {
                            $Msg = " Please Fill in the Blanks ";
                            echo '<div class="alert alert-danger">' . $Msg . '</div>';
                        }

                        if (isset($_GET['success'])) {
                            $Msg = " Your Message Has Been Sent ";
                            echo '<div class="alert alert-success">' . $Msg . '</div>';
                        }

                        ?>
                    </div>
                    <div class="card-body">
                        <form action="/feedback2" method="post">
                            <input type="text" name="UName" placeholder="User Name" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                            <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                            <button class="btn btn-success" name="btn-send"> Send </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div style="margin:20px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h2 class="text-center py-2"> FeedBack </h2>
                            <hr>
                        </div>
                        <div class="card-body">
                            <form action="index.php" method="post">
                                <input type="text" name="name" placeholder="User Name" class="form-control mb-2">

                                <textarea name="message" class="form-control mb-2" placeholder="Write The Message"></textarea>
                                <div class="btn btn-success"><input type="Submit" name="submit" value="submit"> </div>
   
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>
<?php
$submit = $_POST['submit'];

if ($submit) {
   
    $name = $_POST['name'];
  
    $message = $_POST['message'];
  

    //write inside file

    $file = fopen("feedback.txt", "a");
    fwrite($file, "<u><b>  $name</b></u><br> $message<br>");
    fclose($file);

    //display comments 
    $fileread = fopen("feedback.txt", "r");
    echo " <h3>ALL Comments</h3>";

    while (!feof($fileread)) {
        echo fread($fileread, 5000);
    }
    fclose($fileread);
} else {
    $fileread = fopen("feedback.txt", "r");
    echo " <h3>ALL Comments</h3>";

    while (!feof($fileread)) {
        echo fread($fileread, 5000);
    }
    fclose($fileread);
}



?>