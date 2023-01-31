$("#login_form").submit(function(e){
    e.preventDefault();

   var all = $(this).serialize();

   $.ajax({
       url:  $(this).attr('action'),
       type: "POST",
       data: all,
       beforeSend:function(){
           $(document).find('span.error-text').text('');
       },
       
       //validate form with ajax. This will be communicating with your LoginController
       success: function(data){
           if (data.status==0) {
               $.each(data.error, function(prefix, val){
                   $('span.'+prefix+'_error').text(val[0]);
               });
           }
          /* Redirect the user to [another page] if the login cred are correct.
             Remember this is communicating with the LoginController which we 
              are yet to create */
           if(data == 1){
               window.location.replace(
                '{{route("marketplace.clients")}}'
               );
           }else if(data == 2){
            // Show the user authentication error if the login cred are invalid. 
            //Remember this is communicating with the LoginController which we are yet to create
               $("#show_error").hide().html("Invalid login details");
           }

       }
       })

   });
