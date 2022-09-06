// Submit button
function postValue(){

    var username = $('#username').val();


    if(!username)
    {   
              $('#message').html("Key in username and click submit");
                message.style.color = "#5fbb81";
      
    }
    else
    {   
    
        $.post('info.php',{username:username},
        function(output){
    
            $('#message').html(output);
            
            // Validate abc input
            if(output =="true"){
                $('#message').html("<b>Verified</b>");
                  
                message.style.color = "green";
            }
            else 
            {
                $('#message').html("<b>Error</b>");

            
                message.style.color = "red";
            }
    
        });
        
        return true;
    }
  

}
