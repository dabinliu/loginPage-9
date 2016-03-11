<?php
include("includeCSSJSFiles.php");

?>
<style>
    #signin:hover {
  border: 1px solid;
  box-shadow: inset 0 0 100px rgba(255, 255, 255, .5), 0 0 20px rgba(255, 255, 255, .2);
  outline-color: rgba(255, 255, 255, 0);
  outline-offset: 15px;
  text-shadow: 1px 1px 2px #427388; 
}
     #cancelButton:hover {
  border: 1px solid;
  box-shadow: inset 0 0 100px rgba(255, 255, 255, .5), 0 0 20px rgba(255, 255, 255, .2);
  outline-color: rgba(255, 255, 255, 0);
  outline-offset: 15px;
  text-shadow: 1px 1px 2px #427388; 
}
</style>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap Login Form</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true" style="background-image:url('/acquiscent/images/loginPage/loginPageBackground.jpg')">
  <div class="modal-dialog">
  <div class="modal-content" style="background-color: #19E9A6;">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center" style="margin-top: 0px;">Login</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block">
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Email" style="border: 1px solid #0F0E0E;">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Password" style="border: 1px solid #0F0E0E;">
            </div>
              <div class="row">
                  <div class="col-md-3">
                        <label>Are you...</label>
                  </div>
                  <div class="col-md-9 radio">
                      <label><input type="radio" name="loginAs" value="biker">Biker</label>
                      <label><input type="radio" name="loginAs" value="serviceCenter">Service Center</label>
                      <label><input type="radio" name="loginAs" value="distributer">Distributer</label>
                      <label><input type="radio" name="loginAs" value="company">Company</label>
                  </div>
              </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block" id="signin" style="height:34px;font-size:14px;border-radius: 3px;background-color: #19E9A6;;color:#0C0C0C;border-color: #101112;">Sign In</button>
              <span class="pull-right"><a href="#" style="color: #5D2F66;">Register</a></span><span><a href="#" style="color: #5D2F66;">Need help?</a></span>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" id="cancelButton" data-dismiss="modal" aria-hidden="true" style="background-color: #19E9A6;color:#0C0C0C;border-color: #101112;">Cancel</button>
		  </div>	
      </div>
  </div>
  </div>
</div>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>