<?php

include "config.php";

// echo "saremy";

//get form data from the drug section

if (isset($_POST['submit'])) { 

    $drugname = $_POST['drug-name'];
    $nafdac = $_POST['nafdac-no'];
    $manufacturing = $_POST['manufacturing-date'];
    $expiry = $_POST['expiry-date'];

    //confirm the data taken
//its working

   /* print $_POST['drug-name'];
    print $_POST['nafdac-no'];
    print $_POST['manufacturing-date'];
    print $_POST['expiry-date'];



       */



    // take the data to db

    $sql = "INSERT INTO drugs
    SET
        drugname= '$drugname',
        nafdac= '$nafdac',
        manufacturing= '$manufacturing',
        expiry= '$expiry'



        ";

    //select database

    $db_select = mysqli_select_db($conn, 'drug verification system');

    ///execute the query now

    $res = mysqli_query($conn, $sql);

    //check if the query executed

    if ($res == true) {

        //print 'Succesfully registered';






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
   
                  <marquee>$drugname successfully registered </marquee>
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
   
   
   
                             <form id="LogForm" action="drugsreg.php"   method="POST">


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
   

    }

}
