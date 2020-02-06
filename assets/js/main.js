function alertNavegador(){
   alert('Ejercicio realizado por Jose Fandiño');
}














var clic = 1;

function divLogin(){ 

   if(clic==1){

   document.getElementById("caja").style.height = "auto";

   clic = clic + 1;

   } else{
       document.getElementById("caja").style.height = "60px";      

    clic = 1;
   }  
}

