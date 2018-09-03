<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <link rel="stylesheet" href="css/admin.css">

        <!--<script type="text/javascript">
            $(document).ready(function() {
                $("#login-button").click(function(){
                   $("#Username").val("");
                   $("#Password").val("");
                });
            });
        </script>-->
    </head>
    <body>
        <?php
            //echo 'Test Admin';
            //include '../config.php';
            if(isset($_REQUEST['error'])){
                $message = "wrong Username or Password";
                echo "<script type='text/javascript'>alert('$message');</script>";

            }
            //header("Location: index.php");
            //echo "Username" . USERNAME . "Password" . PASSWORD;
        ?>

        <div class="wrapper">
            <div class="container">
                    <h1>Welcome</h1>

                    <div class="form">
                        <input type="text" placeholder="Username" name="adminUsername" >
                        <input type="password" placeholder="Password" name="adminPassword">
                        <button type="submit" id="login-button">Login</button>
                    </div>
            </div>
        </div>

    </body>
</html>
