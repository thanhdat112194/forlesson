function myajax(value,post,url){
    $.ajax({//you can also ajax ?? put other place try home how cookies
        beforeSend:function(){
           $(".load").css("display","block");// what do you want from me here ??
           //what i do ?here nofthin
        },
        url:url,
        type:post,
        data:{"data":JSON.stringify([value])},//waht mean n:name s:surname?
        //yes
        error:function(jqXHR,textStatus,errorTHrown){
             alert("you have an error")
        },
        cache:false,
        success:function(r){
         $("#ajaxresult").html(r);
         $(".load").css("display","none");
        }
 
 
      })


}

export {
  myajax


}