<?php 

   include "config.php";

  //echo "saremy";

  //take drug info

  if(isset($_POST['submit']))

  {


//echo "button clicked";

//get form info the

   $nafdac =$_POST['nafdac-no'];
   $drugname = $_POST['drug-name'];
   $manufacturing = $_POST ['manufacturing-date']; 
  


   //echo "$nafdac";

   //its working so query database for comparison of the data


   $sql ="SELECT * FROM drugs WHERE drugname='$drugname'  AND nafdac='$nafdac' AND manufacturing='$manufacturing'";

   //select database

   $db_select = mysqli_select_db($conn,'drug verification system');

   //execute the query

   $res = mysqli_query($conn,$sql);

   //check if the query executed

   if($res==TRUE)

   {

     //check count  
     $count = mysqli_num_rows($res);

     //check if count executed

     if($count==1)

     {

   //  echo "The drug is verifiable";


    print  <<<_HTML_

     
    
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

                             <marquee> $drugname is a Verified Drug </marquee>
                                     <!---------start of  admin and verification --------->
     
                    <div class="form-page-w">
        <div class="row">

           
            <div class="col-2">
                                                                                                                                                            

                <div class="form-container-1">
                    <div class="form-btn">

                       
                      <h2>Enter drug to verify</h2>
                        
                    </div>

                    <!--------admin------->
                    <form id="RegForm"   action="drugveri.php"  method="POST"> 

                        <input type="text" placeholder="Nafdac No"  name="nafdac-no" required>
                        <input type="text" placeholder="Drug Name"  name="drug-name" required>  
                        <input type="date" placeholder="Manufacturing Date"  name="manufacturing-date" required>  
                        <button type="submit" class="btn-2" name="submit" id="btn-reg">Verify</button>
                       <br>
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



     else  {


  // echo "Failed the drug is a counterfeit";


   print  <<<_HTML_

     
    
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

                             <marquee> $drugname is NOT a Verified Drug </marquee>
                                     <!---------start of  admin and verification --------->
     
                    <div class="form-page-w">
        <div class="row">

           
            <div class="col-2">
                                                                                                                                                            

                <div class="form-container-1">
                    <div class="form-btn">

                       
                      <h2>Enter drug to verify</h2>
                        
                    </div>

                    <!--------admin------->
                    <form id="RegForm"   action="drugveri.php"  method="POST"> 

                        <input type="text" placeholder="Nafdac No"  name="nafdac-no" required>
                        <input type="text" placeholder="Drug Name"  name="drug-name" required>  
                        <input type="date" placeholder="Manufacturing Date"  name="manufacturing-date" required>  
                        <button type="submit" class="btn-2" name="submit" id="btn-reg">Verify</button>
                       <br>
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
   }


  }










?>