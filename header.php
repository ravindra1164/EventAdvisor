<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link href="/css/header.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--webfonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Lato:400,300,100,300italic" rel="stylesheet" type="text/css">
	<!--//webfonts-->
</head>
<body>
	<div class="header">
		<div style="margin:0" class="innerHeader">
			<a href="/">
				<div style="background:none;" class="logo6">
					<img class="main_site_logo" title="Easy Solution for any Occasion | Event Advisor" alt="Event Advisor - logo" src="/images/eventAdvisor_logo.jpg">
				</div>
			</a>
			<div class="outer_table_div">
				<ul>
					<li style="text-align:right; padding-right:30px;">
						<form method="get" action="/search/">
							<input type="text" placeholder="Search" name="q" class="searchmainpage">
							<input type="submit" style="display:none;" value="Go" class="whitebtn">
						</form>
					</li>
					<!-- <li style="text-align:right; padding-right:30px;">
						<div title="Feedback" onclick="$('#feedback').show();$('#form2').hide(); $('#myModal_feedback').modal('show');" class="feedback-2" id="feed-back"></div>
					</li> -->
					<!-- <li style="margin-top: 10px;"><a target="_blank" href="/aboutus"><label class="we-are-hiring">ABOUT US</label></a></li> -->
					
					
					<li id="sign-up-login">
						<div class="cl"></div>
						<a data-target="#myModal_signup" data-toggle="modal" id="signup_btn_topPanel">SIGN UP</a>
						<a data-target="#myModal_login" data-toggle="modal" id="login_btn_topPanel">LOG IN</a> 
						<div class="cl"></div>
					</li>
					
					<div class="cl"></div>
				</ul>
				<div class="cl"></div>
			</div>





<!-- <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe frameborder="0" name="fb_xdm_frame_http" allowtransparency="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" style="border: medium none;" src="http://static.ak.facebook.com/connect/xd_arbiter/6Dg4oLkBbYq.js?version=41#channel=f31c63350a628fc&amp;origin=http%3A%2F%2Fwww.wishpicker.com"></iframe><iframe frameborder="0" name="fb_xdm_frame_https" allowtransparency="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" style="border: medium none;" src="https://s-static.ak.facebook.com/connect/xd_arbiter/6Dg4oLkBbYq.js?version=41#channel=f31c63350a628fc&amp;origin=http%3A%2F%2Fwww.wishpicker.com"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>
<script type="application/json" id="allauth-facebook-settings">
{"cancelUrl": "http://www.wishpicker.com/accounts/social/login/cancelled/", "loginByTokenUrl": "http://www.wishpicker.com/accounts/facebook/login/token/", "loginOptions": {"auth_type": "https", "scope": "email,user_birthday,friends_birthday,user_likes,friends_likes,friends_interests,user_interests,user_location,friends_activities"}, "logoutUrl": "http://www.wishpicker.com/accounts/logout/", "errorUrl": "http://www.wishpicker.com/accounts/social/login/error/", "appId": "130457927150626", "locale": "en_US", "csrfToken": "eIwivYsUzBqLMTVM4iuX1614MVkkMLvn", "channelUrl": "http://www.wishpicker.com/accounts/facebook/channel/"}
</script>
<script src="http://static.wishpicker.com/static/facebook/js/fbconnect.js" type="text/javascript"></script>

		<!-- sign up  Modal 
<div style="display:none;" data-show="true" aria-hidden="true" id="myModal_signup" tabindex="-1" class="modal hide ">

	<div style="width: auto;
max-width: 423px;" class="modal-dialog">

		<div class="modal-content">
			
			<div class="cl"></div>
			<div id="contact_form">
				<span> 

				<a style="margin-top: 10px;" data-dismiss="modal" class="close">x</a>

			</span>
				<p class="heading">Signup for Wishpicker</p>
				<a class="btns" href="javascript:allauth.facebook.login('/', 'authenticate', 'login')">Signup with Facebook</a>
				<p style="position: relative;
					font-size: 13px;
					color: black;
					text-align: center;
					bottom:-4px;
					width: 20px;
					margin: 0 auto;
					background: white;
					font-weight:bold;">or</p>
				<hr color="#dadfe1" style="margin: 0;margin-top: -6px;">
				<br>
				<form name="signup" id="signup" method="post" action="/auth/signup?next=/" novalidate="novalidate">   
					<input type="hidden" value="eIwivYsUzBqLMTVM4iuX1614MVkkMLvn" name="csrfmiddlewaretoken">
							<!-- <input type="text" name="firstname" id="firstname" class="signupfirst" placeholder="First Name" tabindex="1" />
							<div id="invalid_errors_sign" class="errorcls">Error</div>
					<input type="text" tabindex="1" required="required" placeholder="First Name" name="first_name" maxlength="30" id="firstname" class="signupfirst" aria-required="true" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
					<div id="errorfirst_name" class="errorcls"></div>
						    <!-- <input placeholder="Last name" type="text" name="lastname" id="lastname" class="signuplast" tabindex="2"> 
					<input type="text" tabindex="2" required="required" placeholder="Last Name" name="last_name" maxlength="30" id="lastname" class="signuplast" aria-required="true">
					<div id="errorlast_name" class="errorcls"></div>
					<input type="email" tabindex="3" required="required" placeholder="E-mail address" name="email" id="" class="signupemail" aria-required="true">
						<input placeholder="Email address" type="email" id="email" name="email" class="signupemail" tabindex="3">
					<div id="erroremail" class="errorcls"></div>
						<!-- <input placeholder="Password" type="password" name="password" class="signuppassword" tabindex="4" > 
						<input type="password" tabindex="4" required="required" placeholder="Password" name="password1" id="" class="signuppassword" aria-required="true" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACIUlEQVQ4EX2TOYhTURSG87IMihDsjGghBhFBmHFDHLWwSqcikk4RRKJgk0KL7C8bMpWpZtIqNkEUl1ZCgs0wOo0SxiLMDApWlgOPrH7/5b2QkYwX7jvn/uc//zl3edZ4PPbNGvF4fC4ajR5VrNvt/mo0Gr1ZPOtfgWw2e9Lv9+chX7cs64CS4Oxg3o9GI7tUKv0Q5o1dAiTfCgQCLwnOkfQOu+oSLyJ2A783HA7vIPLGxX0TgVwud4HKn0nc7Pf7N6vV6oZHkkX8FPG3uMfgXC0Wi2vCg/poUKGGcagQI3k7k8mcp5slcGswGDwpl8tfwGJg3xB6Dvey8vz6oH4C3iXcFYjbwiDeo1KafafkC3NjK7iL5ESFGQEUF7Sg+ifZdDp9GnMF/KGmfBdT2HCwZ7TwtrBPC7rQaav6Iv48rqZwg+F+p8hOMBj0IbxfMdMBrW5pAVGV/ztINByENkU0t5BIJEKRSOQ3Aj+Z57iFs1R5NK3EQS6HQqF1zmQdzpFWq3W42WwOTAf1er1PF2USFlC+qxMvFAr3HcexWX+QX6lUvsKpkTyPSEXJkw6MQ4S38Ljdbi8rmM/nY+CvgNcQqdH6U/xrYK9t244jZv6ByUOSiDdIfgBZ12U6dHEHu9TpdIr8F0OP692CtzaW/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
					<div id="errorpassword1" class="errorcls"></div>

					<p style="font-size: 13.5px;
						font-family: 'Helvetica-neue',Arial,sans-serif;
						top: 19px;
						position: relative;
						left: 45px;
						font-weight: bold;
						color: #797f7f;margin: 0;">I am a </p>
					<div id="sex">
						<ul>
<li><label for="id_male_or_female_0"><input type="radio" value="male" tabindex="5" required="required" name="male_or_female" id="id_male_or_female_0" class="baseinput" aria-required="true"> Male</label></li>
<li><label for="id_male_or_female_1"><input type="radio" value="female" tabindex="5" required="required" name="male_or_female" id="id_male_or_female_1" class="baseinput" aria-required="true"> Female</label></li>
</ul>
					</div>
					<div class="cl"></div>
					<div id="errormale_or_female"></div>
					<button type="Submit" id="submit_btn" class="submit_btn3">Continue</button>
				</form> 

				<div class="tos">By signing up, you agree to our <a target="_blank" href="/terms">Terms of Use</a> and <a target="_blank" href="/privacy">Privacy Policy</a></div>

				<div class="popup-note">Already have an account? <a style="cursor:pointer;" class="js-switch-to-login" href="/log">Sign in.</a></div>
			</div>
		</div>
	</div>
</div>



           
             	
       

       
       


<!-- FOrgot PAssword
<div style="display:none" data-show="true" aria-hidden="true" id="myModal_forgot" tabindex="-1" class="modal hide ">
    <div class="modal-dialog">
        <div class="modal-content"> 
				<div style="color:black" class="center-page">

			<span class="clearfix"> <a style="padding:1px;  color:grey ;margin-top:-12px;margin-right:-23px;" data-dismiss="modal" class="close">x</a></span>
		
				<div style="font-size: 13px;line-height: 2;" id="form_forgot">
					<div class="for_this_only"> 
					<p>An email to reset your password has been sent to</p> <a id="containEid"></a> <p>Didn't get the email? Try sending it</p> <a id="resetPasswordagain">again</a>
					</div>
					<div class="cl"></div>
						<div class="popup-note"> <a style="cursor:pointer;" class="js-switch-to-login" href="/log">Sign in.</a></div>
				<div class="cl"></div>

				</div>
				<form id="email1" method="post" action="/auth/forgot?next=/" novalidate="novalidate">
						<h4>We'll send password reset instructions to the email address associated with your account.</h4>
				<input type="hidden" value="eIwivYsUzBqLMTVM4iuX1614MVkkMLvn" name="csrfmiddlewaretoken">
					<label for="ForgotPasswordForm_email"><p style="font-family:'Helvetica-neue',Arial,sans-serif;;font-size:14px;">Enter Email Address		    
					</p><div style="margin-top:10px;" class="fields">
						<!-- <input class="text initialized" name="email" id="email" type="text">		
						<input type="text" name="email" id="email" class="text initialized">
					</div>      
							<div style="margin:5px 0 0 5px;" id="error"></div> 
							<div style="display:none;color: red;" id="InvalidEmailForgot"></div> 
							<br>
						<input type="submit" value="Reset Password" name="yt0" class="btn_forgot small orange initialized">
					</label></form></div>
				
				
			</div>
			
		</div>
	</div> -->
</div>
</div>

</body>