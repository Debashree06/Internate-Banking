<html> 
<head>
<tittle> </tittle>
    <h1><b> REGISTATION </b></h1>
</head>
<body bgcolor="lightyellow">
<sryle>
<border margin-left: 30px;>
<border	margin-top: 30px;>
        <table border="0" width="100%" cellspacing="0" cellpadding="0" background="../image/topbkg.jpg">
  <tr>
     <td display: inline-block;
        width: 150px;
        label-align: right;>
      <td text-align: left>
    <td width="90%" valign="top">
     </div>
<i>                
<div class="form-group">
<label>username<br></label>
<input type="text" name="username" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($name_error)) echo $name_error; ?>
</span> </div>
<div class="form-group ">
<label>Email<br></label>
<input type="email" name="email" class="formcontrol" value=""
maxlength="30" required="">
<span class="textdanger"><?php if (isset($email_error)) echo $email_error; ?>
</span></div>
<div class="form-group">
<label> Mobile-No <br></label>
<input type="number" name="mobile" class="formcontrol" value=""
maxlength="12"required="">
<span class="textdanger"><?php if (isset($mobile_error)) echo
$mobile_error;?></span></div>
<div class="form-group">
<label >Password<br></label>
<input type="password" name="password" class="formcontrol" value=""
maxlength="8" required="">
<span class="textdanger"><?php if (isset($password_error)) echo
$password_error; ?></span></div>
<div class="form-group">
<label>Confirm Password<br></label>
<input type="password" name="cpassword" class="formcontrol" value=""
maxlength="8" required="">
<span class="textdanger"><?php if (isset($cpassword_error)) echo
$cpassword_error; ?></span></div>
<input type="submit" class="btn btn-primary" name="signup" value="submit"></i>
</body>
</html>

