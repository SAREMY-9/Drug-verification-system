<?php

include "config.php";

//take manufacturesr information

if (isset($_POST['submit'])) {

    $companyname = $_POST['companyname'];
    $email = $_POST['email'];
    $telephone = $_POST['Telephone'];
    $certificate = $_POST['certificateofreg'];
    $address = $_POST['address'];

    //confirm the data

    //print "$companyname";
    //print "$email";

    //its working so collect the info

    $sql = "INSERT INTO manufacturers

      SET

        companyname='$companyname',
        email ='$email',
        Telephone = '$telephone',
        Certificateofreg='$certificate',
        address= '$address'



    ";

//select the database

    $db_select = mysqli_select_db($conn, 'drug verification system');

//  execute the  query

    $res = mysqli_query($conn, $sql);

//check if the query executed

    if ($res == true) {

        // echo "Manufacturer Successfully registered";

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
                            <h2>Dashboard  </h2>

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

               <marquee>Manufacturer $companyname successfully registered</marquee>
             </div>




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


           <!--------drugs------->
                 <div class="col-2">

                     <div class="form-container-1">
                         <div class="form-btn">


                           <h2 >Drugs</h2>

                         </div>



                         <form id="LogForm"   action="drugsreg.php"   method="POST">
                          <input type="text" placeholder="drug-name"   name="drug-name" required>
                           <input type="text" placeholder="nafdac-no" name="nafdac-no" required>
                           <input type="date" placeholder="manufacturing date" name="manufacturing-date" required>
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

        print 'ERROR REGISTERING THE MANUFACTURER. TRY AGAIN';

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
                         <h2>Dashboard  </h2>

                       </div>

              <select id="select-id">
               <option  value="">Manufacturers Registration</option>
                 <option  value="">Manufacturers Registration</option>
                   <option value="" >Drugs Registration</option>
                   <option value="index.html">List of verified Drugs</option>
                    <option value="accounts.html">Accounts</option>
                 <option value="index.html">Log out</option>
                </select>
               </div>
            </div>
          </div>




  <!---------start of manufacturers  and drugs --------->



  <div class="form-page-w">
          <div class="row">



             <!--------manufacturers------->
              <div class="col-2">


                  <div class="form-container-1">
                      <div class="form-btn">

                      <h2 >Failed to register the manufacturers.Confirm the details</h2>
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


        <!--------drugs------->
              <div class="col-2">

                  <div class="form-container-1">
                      <div class="form-btn">


                        <h2 >Drugs</h2>

                      </div>



                      <form id="LogForm">

                       <input type="text" placeholder="drug-name"   name="companyname" required>
                        <input type="text" placeholder="nafdac-no" name="nafdac-no" required>
                        <input type="text" placeholder="manufacturing date" name="manufacturing date" required>
                        <input type="text" placeholder="expiry date..."  name="expiry-date" required>

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

    }

}
