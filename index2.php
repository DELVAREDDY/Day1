<?php
//session_start();
 ?>
 <html>
      <head>

      </head> 
	  <body>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            appId      : '944011136869461',
            cookie     : true,
            xfbml      : true,
            version    : 'v12.0'
        });
        FB.AppEvents.logPageView();   
       };

       (function(d, s, id){
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) {return;}
          js = d.createElement(s); js.id = id;
          js.src = "https://connect.facebook.net/en_US/sdk.js";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
		
		function fbLogin(){
			FB.login(function(response){
				if(response.authResponse){
					fbAfterLogin();
				}
			});
			
		}
		
		function fbAfterLogin(){
			FB.getLoginStatus(function(response) {
			   if (response.status === 'connected') { 
                   FB.api('/me', function(response) {
                     console.log(response);
				   });
			   }
            });
		}
</script>
<a href="javascript:void(0)" onclick="fbLogin()"> Login with Facebook</a>
<a href="datade.php">data delete</a>
	  </body>
 </html>