<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
    <tittle></tittle>
        <h2><b> CREATE ACCOUNT </b> </h2>
    </head>
    <body bgcolor="orange"> <i>
            <border margin-left: 30px;>
<border	margin-top: 30px;>
        <table border="0" width="100%" cellspacing="0" cellpadding="0" background="../image/topbkg.jpg">
  <tr>
     <td display: inline-block;
        width: 150px;
        label-align: right;>
      <td text-align: left>
    <td width="90%" valign="top">
  <div class="form-group">
<label> first name </label>
<body>
<style>
</style>
<table>
  <tr>
    <td width="90%" valign="top">
<input type="text" name="firstname" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($firstname_error)) echo
$firstname_error; ?></span></div>
<div class="form-group ">
<label> middle name <br></label>
<input type="text" name="middle" class="formcontrol" value=""
maxlength="30" required="">
<span class="textdanger"><?php if (isset($middle_error)) echo $middle_error;
?></span></div>
<div class="form-group">
<label> last name<br> </label>
<input type="text" name="lastname" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($lastname_error)) echo
$lastname_error; ?></span></div>
<div class="form-group">
<label>email<br></label>
<input type="email" name="email" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($email_error)) echo $email_error; ?>
</span></div>
<div class="form-group">
<label>age<br></label>
<input type="number" name="age" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($age_error)) echo $age_error; ?>
</span></div>
<div class="form-group">
<label>Dob <br></label>
<input type="date" name="Dob" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($Dob_error)) echo
$Dob_error; ?> </span> </div>
<div class="form-group">
<label>phone <br></label>
<input type="text" name="phone" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($phome_error)) echo
$phone_error; ?> </span> </div>
        <div class="form-group">
<label>first Name <br></label>
<input type="text" name="firstname" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($firstname_error)) echo
$firstname_error; ?> </span> </div>
        <div class="form-group">
<label>first Name <br></label>
<input type="text" name="firstname" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($firstname_error)) echo
$firstname_error; ?> </span> </div>
        <div class="form-group">
<label>address <br></label>
<input type="text" name="address" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($address_error)) echo
$address_error; ?> </span> </div>
        <div class="form-group">
<label>account <br></label>
<input type="text" name="account" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($account_error)) echo
$_error; ?> </span> </div>
<div class="form-group">
<label>address <br></label>
<input type="text" name="address" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($address_error)) echo $address_error;
?></span></div>
        <div class="form-group">
<label> conpass <br> </label>
<input type="text" name="conpass" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($conpass_error)) echo $conpass_error; ?>
 </span> </div></i>
        <div class="form-group ">
<label>Email<br></label>
<input type="email" name="email" class="formcontrol" value=""
maxlength="30" required="">
<span class="textdanger"><?php if (isset($email_error)) echo $email_error; ?>
</span></div>
        <input type="submit" class="btn btn-primary" name="signup" value="submit">
    </body>
</html>
