if (document.readyState == `loading`) {

    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}


function ready() {


    var LogForm = document.getElementById("LogForm");
    var RegForm = document.getElementById("RegForm"); 
    var Indicator = document.getElementById("Indicator");




    //dash board  
    
   

}
    

function admin() {
    RegForm.style.transform = "translateX(0px)";
    LogForm.style.transform = "translateX(0px)";
    Indicator.style.transform = "translateX(100px)";
}


function login() {
    RegForm.style.transform = "translateX(300px)";
    LogForm.style.transform = "translateX(300px)";
    Indicator.style.transform = "translateX(0px)";
}

         
     
       //dash board  variables

       const select = document.getElementById('select-id'); 
       select.addEventListener('change',  function()
     
       {

     const url = this.value;

     if(url !== '')
     {

        window.location.href = url;
     }
          

       });



    
        

    