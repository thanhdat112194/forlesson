import {myCookies} from "./cookie.js";
import {myajax} from "./ajaxReg.js";

$(document).ready(function(){

$("#but").click(function (){
        let name = $("#name").val();
        let username = $("#username").val();//
        let  mail = $("#email").val();
        let pass = $("#password").val();
   
      const jsonfile = {
            "user":{
                   "POSTRequest":true,
                   "name":name,
                    "username":username,
                     "mail":mail,
                     "pass":pass,
                     "date":{
                               "now":new Date()
                           },
                     "city":{
                          "1":''
                     }
           },
           "status":"user"    
     
   }
   if($(".remember").is(":checked")){//is checked is also syntax in jha\\zyes it check you choose remember
    myCookies("namecookie",[jsonfile],1);
   }
   
   myajax(jsonfile,"POST","control.php");//okok :3
   //but you dont teach me and i dont know to do it @@ i teach now
   
       
    
 })
   
})