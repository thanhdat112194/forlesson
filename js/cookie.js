function myCookies(nameCookies,value,day){
    
        let newData = new Date();
           newData.setTime(newData.getTime()+(day*24*60*60*1000))//its 3 day 
         let exp = "expires="+newData.toUTCString();// "expires=" this syntx javascript  :>>
        document.cookie = nameCookies+"="+value+exp+";path=/" //its meoan fav//why need it
            
    
 
 }
 
 export {
     myCookies
 }