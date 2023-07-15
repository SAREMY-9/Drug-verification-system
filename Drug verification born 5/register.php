<?php

include "config.php";
//  create a connection  to the database

//$conn = new mysqli('localhost', 'root', '', 'drug verification system');

//check connection

/* if($conn==TRUE)
{

echo 'Connection succesful';

}

else ()
{

die(mysqli_error());
}

 */

//collect form information

//  collect form information

if (isset($_POST['submit'])) {

    // echo 'button clicked';

    $admin_name = $_POST['admin-name'];
    $email = $_POST['email'];
    $phoneno = $_POST['phone-no'];
    $password = md5($_POST['password']);

    //create a query to save the collected data

    $sql = "   INSERT INTO admins SET
                   admin = '$admin_name',
                   email ='$email',
                   phone ='$phoneno',
                   password ='$password'


        ";

    //select db

    $db_select = mysqli_select_db($conn, 'drug verification system');

    //execute the query

    $res = mysqli_query($conn, $sql);

    //check if the query executed

    if ($res == true) {

        //  echo "You're now registered as an admin";

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
                    <li><a href="dashboard.html">Admin Panel</a></li>
                    <li><a href="index.html">Drugs Bunk</a></li>
                    <li><a href="index.html">Faqs</a></li>



            </ul>

           </nav>



                </div>
             </div>

        <!---------end of header-->

         <h4> You're registered as an admin . Login </>

        <!---------start of  admin and verification --------->



        <div class="form-page">

                <div class="row">


                    <div class="col-2">


                        <div class="form-container">
                            <div class="form-btn">

                                <span onclick="admin()">Admin Login</span>


                            </div>





                            <!--------admin------->
                            <form id="RegForm"   action="adminlogin.php"   method="POST">

                                <input type="text" placeholder="Admin name"  name="admin-name" required>
                                <input type="email" placeholder="Email/Id" name="email" required>
                                <input type="password" placeholder="Password" name="password" required>
                                <button type="submit " class="btn-2"  id="btn-reg"  name="submit">Login</button>
                                <br>
                                <a href="">Forgot Password?</a>

                            </form>



                            <!---user-->

                            <form id="LogForm">

                                <input type="text" placeholder="user-name" required>

                                <input type="password" placeholder="password" required>
                                <a href="userpanel.html"  class="btn">Login</a>
                               <br>
                                <a href=" ">Forgot Password?</a>


                            </form>





                        </div>

                    </div>


                    <div class="col-2">


                        <img src="images/drug 9.png">

                    </div>
                </div>



                 <!---------of  admin and verification --------->


                   <script src="response.js">




                     </script>



        </body>
        </html>





        _HTML_;

    } else {

        print <<<_HTML_

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"   href="style.css">
        <title>Maseno Uni Drug Verification System</title>
    </head>
    <body>

    </body>
    </html>



    <div class="header">
        <div class="container">
            <div class="nav-bar">
            <div class="Welcome">

               <h2>MUHDVS</h2>


           </div>

        <nav>
         <ul>



            <li><a href="index.html">Home</a></li>
            <li><a href="accounts.html">Accounts</a></li>
            <li><a href="index.html">Drugs Bunk</a></li>
            <li><a href="index.html">Faqs</a></li>

    </ul>

    </nav>

        </div>
     </div>

    <!---------end of header-->



          <div class="small-container">
               <div class="row ">


                   <div class="col-2 ">
                       <img src="images/drug 9.png">
                   </div>


                   <div class="col-1 ">
                    <h2>Drug Safety and Eligibility Checker at your palm
                    <br>A platform built to suit your medical needs</h2>
               <p class="quote"> Welcome to Maseno University Drug Verification System</p>
                <a href="#register" class=" ">Explore Now &#8594;</a>
               </div>



               </div>
         </div>







              <!------------start of verified drugs-->



              <div class="small-container">

                <h2 class="title">Sample Verified Drugs </h2>

                <div clas="categories">
                    <div class="row">

                        <div class="col-4">
                            <img src="images/drug 9.png">
                            <h4>Paracetamol</h4>

                            <p>Verified</p>

                            <div class="button">
                                <a href="accounts.html" div class="btn-2"> Drug details </a
                          ></div>
                        </div>



                        <div class="col-4">
                            <img src="images/drug 9.png">
                            <h4>Asprin</h4>

                            <p></p>
                            <p>Verified</p>
                            <a href="accounts.html" div class="btn-2"> Drug details </a>
                            </div>



                        <div class="col-4">
                                <img src="images/drug 9.png">
                                <h4>Panadol</h4>

                                <p>Verified</p>
                                <a href="accounts.html"  class="btn-2"> Drug details </a>
                            </div>

                        </div>
                    </div>
                </div>





                <!--end of categories 1-->




            <!--start of categories 2-->

                <div class="small-container">


                    <div clas="categories">
                        <div class="row">



                            <div class="col-4">
                                <img src="images/drug 13.png">
                                <h4>Paracetamol</h4>

                                <p>Verified</p>

                                <div class="button">
                                    <a href="accounts.html" div class="btn-2"> Drug details </a
                              ></div>
                            </div>



                            <div class="col-4">
                                <img src="images/drug 13.png">
                                <h4>Asprin</h4>

                                <p></p>
                                <p>Verified</p>
                                <a href="accounts.html" div class="btn-2"> Drug details </a>
                                </div>



                            <div class="col-4">
                                    <img src="images/drug 13.png">
                                    <h4>Panadol</h4>

                                    <p>Verified</p>
                                    <a href="accounts.html"  class="btn-2"> Drug details </a>
                                </div>

                            </div>
                        </div>
                    </div>



        <!--end of categories 2-->





         <!--start of companies-->

    <div class="small-container">
        <h2 class="title">Registered Companies</h2>
            <div class="row ">


                <div class="col-1 ">


                    <h2> 1.Moderna Drug Manufacturing Company</h2>
                    <p class="quote">This is a registered drug manufacturing company that deals  with all <br>types of production </p>
                     <a href="accounts.html" class="">About us &#8594;</a>


                </div>


                          <div class="col-1 ">
                      <h2> 2. Pfizer Drug Manufacturing Company</h2>
                  <p class="quote"> This is a registered drug manufacturing company that deals  with all <br>types of production</p>
             <a href="accounts.html" class="">About us&#8594;</a>
            </div>
        </div>
      </div>


    </div>


             <!-----------start of company cat-2-->
    <div class="small-container">

            <div class="row ">


                <div class="col-1 ">


                    <h2>3. J and J Drug Manuf Comp</h2>
                    <p class="quote"> This is a registered drug manufacturing company that deals  with all <br>types of production</p>
                     <a href="accounts.html" class="">About us &#8594;</a>


                </div>


                          <div class="col-1 ">
                      <h2>4. KEMSA</h2>
                  <p class="quote">This is a registered drug manufacturing company that deals  with all <br>types of production</p>
             <a href="accounts.html" class="">About us &#8594;</a>
            </div>
        </div>
      </div>
    </div>


        <!-----------end of company cat-2-->

           <!--end of companies-->






              <!------------end of verified drugs-->





    <div class="form-page">

        <div class="row">

           <div class="small-container"  id="register">
           <h2 class="btn-2">REGISTER HERE  &#8594;</h2>
                   <img src="images/drug 9.png">

        </div>
            <div class="col-2">



                <div class="form-container">
                    <div class="form-btn">

                        <span onclick="admin()">Admin Register</span>
                        <span onclick="login()">User Registration</span>

                        <hr id="Indicator">
                    </div>





                    <!--------admin------->
                    <form id="RegForm"    action="register.php"    method="POST">

                        <input type="text" placeholder="Admin name" name="admin-name" required>
                        <input type="email" placeholder="email"  name="email" required>
                        <input type="text" placeholder="Phone No..." name="phone-no" required>
                        <input type="password" placeholder="password" name="password" required>

                        <button class="btn-2"   name="submit">Register</button>

                    </form>



                    <!---user-->

                    <form id="LogForm">

                        <input type="text" placeholder="user-name" required>
                        <input type="email" placeholder="email" required>
                        <input type="password" placeholder="password" required>
                        <button class="btn-2"   name="submit">Register</button>
                       <br>



                    </form>


                    <img src="images/drug 13.png">


                </div>

            </div>





            </div>
        </div>

    </div>


              <script src="response.js">



                    </script>


         <!---------of  admin and verification --------->
_HTML_;

    }

}
