<?php

include "config.php";
//create a conn to the db

/*$conn = new mysqli('localhost', 'root', '', 'drug verification system');

//check the conn

if ($conn != true) {

die(mysqli_error());
}

print "Saremy";

 */

//get form data

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    //confirm the data

    //echo $_POST['username'];

    //its working so i comment it, query for data intake

    $sql = "INSERT INTO users

      SET
     username= '$username',
     email ='$email',
     password ='$password'



    ";

    //select the database
    $db_select =mysqli_select_db($conn, 'drug verification system'); 

    //execute the query

    $res =mysqli_query($conn, $sql);

    //check if the query executed

    if ($res == true) {

        print <<<_HTML_



        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet"  href="style.css">

            <title>Drug verification system</title>
        </head>
        <body>


             <div class="header">
                <div class="container">
                    <div class="nav-bar">
                    <div class="Welcome">

                       <h2>MUHDVS</h2>

                   </div>




                <nav>
                 <ul>



                    <li><a href="index.html">Home</a></li>
                    <li><a href="#RegForm">User Panel</a></li>
                    <li><a href="index.html">Drugs Bunk</a></li>
                    <li><a href="index.html">Faqs</a></li>
                    



            </ul>

           </nav>



                </div>
             </div>

        <!---------end of header-->

        <marquee>You're now a registered user $username. Login </></marquee>

        <!---------start of  admin and verification --------->



        <div class="form-page">

                <div class="row">


                    <div class="col-2">


                        <div class="form-container">
                            <div class="form-btn">


                                <span onclick="login()">Login</span>


                            </div>





                            <!--------user login------>


                            <form id="RegForm"  action="userslogin.php"  method="POST">

                                <input type="text" placeholder=" Username"  name="username" required>

                                <input type="password" placeholder="password" name="password" required>
                                
                                <button type="submit " class="btn-2"  id="btn-reg"  name="submit">Login</button>

                                <br>
                                <a href="">Forgot Password?</a>

                            </form>

                        </div>

                    </div>


                    <div class="col-2">


                        <img src="images/drug 9.png">

                    </div>
                </div>



                 <!---------end of verification --------->


                   <script src="response.js">




                     </script>

        </body>
        </html>

        _HTML_; 

    }

}
