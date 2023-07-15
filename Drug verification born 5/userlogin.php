<?php include "config.php";

if (!$conn) {
    die("Connection error" . mysqli_connect_error());
}
//get the data from the database
if (isset($_POST['submit'])) {
    //get the data from the form
    $username = $_POST['user-name'];

    $password = md5($_POST['password']); 

    //its working so now query the db to confirm the data availability
    $sql = "SELECT * FROM admins WHERE  admin='$username'  AND  password='$password'  
      ";
    //run the query

    $db_select = mysqli_select_db($conn, 'drug verification system');

    $res = mysqli_query($conn, $sql);
    //check if the query executed
    if ($res == true) {
        //confirm the result
        $count = mysqli_num_rows($res);
        if ($count == 1) {
            
            // echo "Success";

            //include a here document over there

            print <<< _HTML_



            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="style.css">
                <title>Drug Verification</title>
            </head>

              <body>

                <!-----------start of my header------->



                <div class="header">
                  <div class="container">
                      <div class="nav-bar">
                      <div class="Welcome">
                         <h2>MHDVS</h2>
                     </div>
                  <nav>
                   <ul>
                      <li><a href="index.html">Home</a></li>
                      <li><a href="accounts.html">Accounts</a></li>
                      <li><a href="">Drug Bunk</a></li>
                      <li><a href="">Faqs</a></li>
                         </ul>
                     </nav>
                  </div>
               </div>




                     <!-----------end of my header------->




                   <div class="header">

                       <div class="nav-bar">
                            <div class="Welcome">
                                 <div class="header">
                                   <h2>Admin Dashboard  </h2>

                                 </div>

                        <select id="select-id">
                         <option  value="">Manufacturers Registration</option>
                           <option  value="">Manufacturers Registration</option>
                             <option value="" >Drugs Registration</option>
                             <option value="index.html">List of verified Drugs</option>
                              <option value="accounts.html">Accounts</option>
                           <option value="accounts.html">Log out</option>
                          </select>
                         </div>
                      </div>
                    </div>


                    <marquee>You're Logged In As Administrator $username</marquee>






            <!---------start of  manufacturers and drugs --------->



            <div class="form-page-w">
                    <div class="row">



                       <!--------manufacturers------->
                        <div class="col-2">


                            <div class="form-container-1">
                                <div class="form-btn">


                                  <h2 >Manufacturers</h2>

                                </div>




                                <form id="RegForm"  action="manufacturersreg.php"   method="POST">

                                    <input type="text" placeholder="Company name" name="companyname" required>
                                    <input type="email" placeholder="Email"   name="email" required>
                                    <input type="text" placeholder="Telephone"   name="Telephone"  required>
                                    <input type="text" placeholder="Certificate of registration"  name="certificateofreg"  required>
                                    <input type="text" placeholder="Address"  name="address" required>


                                    <button type="submit " class="btn-2"  id="btn-reg"  name="submit">Register</button>



                                </form>






                            </div>

                        </div>


            <!--------end  of manufacturers------->





                  <!--------start of drugs------->


                        <div class="col-2">

                            <div class="form-container-1">
                                <div class="form-btn">


                                  <h2 >Drugs</h2>

                                </div>



                                <form id="LogForm" action="drugsreg.php"   method="POST">

                                 <input type="text" placeholder="drug-name"   name="drug-name" required>
                                  <input type="text" placeholder="nafdac-no" name="nafdac-no" required>

                                  <input  placeholder="manufacturing date" type="date" name="manufacturing-date" required>
                                  <input type="date" placeholder="expiry date..."  name="expiry-date" required>

                                  <button type="submit" class="btn-2"  name="submit">Register</button>



                              </form>


                        </div>
                    </div>
                </div>


            <!---------of  admin and verification --------->







                   <!---------start of script-->


                   <script src="response.js">



                   </script>




             <!---------end of script-->






                           </div>
                       </div>
            </body>
            </html>



            _HTML_;

        } else {
            echo "Failed";

            echo "$username";
            echo "$email";
            echo "$password";

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
            <li><a href="accounts.html">Admin Panel</a></li>
            <li><a href="accounts.html">User Panel</a></li>
            <li><a href="index.html">Faqs</a></li>



    </ul>

   </nav>



        </div>
     </div>

<!---------end of header-->

  <marquee>Account Was Not Found.....Try To Login Again/ Sign up..</marquee>

<!---------start of  admin and verification --------->



<div class="form-page">

        <div class="row">


            <div class="col-2">


                <div class="form-container">
                    <div class="form-btn">

                        <span onclick="admin()">Admin</span>
                        <span onclick="login()">User</span>

                        <hr id="Indicator">
                    </div>





                    <!--------admin------->
                    <form id="RegForm"   action="adminlogin.php"  method="POST">


                        <input type="text" placeholder="Admin name" name="admin-name" required  >
                        <input type="email" placeholder="Email / Id" name="email" required>
                        <input type="password" placeholder="Password" name="password" required>

                        <button type="submit " class="btn-2"  id="btn-reg"  name="submit">Login</button>
                        <br>
                        <a href="">Forgot Password?</a>


                    </form>



                    <!---user-->

                    <form id="LogForm">

                        <input type="text" placeholder="User-name" required>

                        <input type="password" placeholder="Password" required>

                        <button type="submit " class="btn-2"  id="btn-reg"  name="submit">Login</button>
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

        }
    }
}
