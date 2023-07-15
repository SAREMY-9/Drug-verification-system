<?php

include "config.php";
//echo "saremy";

if (!$conn) {
    die("Connection error" . mysqli_connect_error());
}

//get the data from the formm

if (isset($_POST['submit'])) {

   // echo "Button Clicked";

    //get the data from the form

    $username = $_POST['username'];

    $password =md5($_POST['password']);  

   // echo "$username";  

   // echo "$password";   

    //if its working query the database

    $sql = "SELECT * FROM users WHERE username = '$username' AND password= '$password'";

    //select the database

    $db_select = mysqli_select_db($conn, 'drug verification system');

    //run the query

    $res = mysqli_query($conn, $sql);

    //check if the query executed

    if ($res ==TRUE) {

       //check count

      $count =mysqli_num_rows($res);

      //check if count executed 

      if($count==1)
      {   

  // echo "Success";


   //  a here document will be ideal  

   print <<<_HTML_

        
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
          <li><a href="index.html">Drug Bunk</a></li>
          <li><a href="index.html">Faqs</a></li>
             </ul>
         </nav>
      </div>
   </div>


    
         <!-----------end of my header------->

      

        
       <div class="header">
        
           <div class="nav-bar">               
                <div class="Welcome">
                     <div class="header">
                       <h2>User Panel </h2>
                     
                     </div>

            <select id="select-id">  
             
          
                 <option value="index.html">List of Verified Drugs</option>
                 <option value="index.html">List of Verified Drugs</option>
                  <option value="accounts.html">Accounts</option>
               <option value="index.html">Log out</option>
              </select>
             </div>
          </div>
        </div>
   
            <marquee> You're Logged in As $username</marquee>

       <!---------start of verification --------->

    <div class="form-page-w">
        <div class="row">

           
            <div class="col-2">
                                                                                                                                                            

                <div class="form-container-1">
                    <div class="form-btn">

                       
                      <h2>Enter drug to verify</h2>
                        
                    </div>

                    <!--------admin------->
                    <form id="RegForm"  action="drugveri.php"  method="POST">

                        <input type="text" placeholder="Nafdac No" name="nafdac-no" required>
                        <input type="text" placeholder="Drug Name" name="drug-name" required>
                        <input type="date" placeholder="Manufacturing Date" name="manufacturing-date" required>
                        <button type="submit " class="btn" name="submit" id="btn-reg">Verify</button>
                       <a href="index.html">Registered Drugs</a>
                    </form>


               
                    <!----verify-->

                   
                </div>

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

      }
      else {

       // echo "failed";


        //a here doc to re-login  
 
 print <<<_HTML_


        
             <!DOCTYPE html>
             <html lang="en">
              <head>
                <meta charset="UTF-8">
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

               <marquee>Account not found $username. Register Now </marquee>

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



                 <!---------of  admin and verification --------->


                   <script src="response.js">




                     </script>

                   </body>
                 </html>



           _HTML_;
      }
    } 
     else 
        {   
        echo "failed";
    }

}
