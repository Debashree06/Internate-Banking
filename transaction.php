<html>
<head>
<tittle> </tittle>
    <h1><b> TRANJACTION </b></h1>
</head>
<body bgcolor="lightblue">
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
<i><label>id <br></label>
<input type="text" name="id" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($id_error)) echo
$id_error; ?> </span> </div>
<div class="form-group">
<label>first Name <br></label>
<input type="text" name="firstname" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($firstname_error)) echo
$firstname_error; ?> </span> </div>
<div class="form-group">
<label> middle Name <br></label>
<input type="text" name="middlename" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($middlename_error)) echo
$middlename_error; ?> </span> </div>
<div class="form-group ">
<label> last name <br> </label>
<input type="text" name="lastname" class="formcontrol" value=""
maxlength="30" required="">
<span class="textdanger"><?php if (isset($lastname_error)) echo
$lastname_error; ?></span></div>
<div class="form-group ">
<label>dob <br></label>
<input type="date" name="dob" class="formcontrol" value="" maxlength="30"
required="">
<span class="textdanger"><?php if (isset($dob_error)) echo $dob_error; ?>
</span></div>
<div class="form-group ">
<label>gender<br></label>
<input type="radio" name="gender" class="form-control" value="male">male
<span class="textdanger"><?php if (isset($meal_error)) echo $male_error; ?>
</span>
<input type="radio" name="gender" class="form-control"
value="femail">female
<span class="textdanger"><?php if (isset($female_error)) echo $female_error;
?></span>
<input type="radio" name="gender" class="form-control" value="other">Other
<span class="textdanger"><?php if (isset($other_error)) echo $other_error; ?>
</span></div>
<div class="form-group ">
<label>email<br></label>
<input type="email" name="email" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($email_error)) echo $email_error; ?>
</span></div>
<div class="form-group ">
<label>address<br></label>
<input type="text" name="address" class="formcontrol" value=""
maxlength="30" required=""><span class="textdanger"><?php if
(isset($address_error)) echo $address_error; ?></span></div>
<div class="form-group">
<label> pin <br></label>
<input type="text" name="pincode" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($pin_error)) echo
$pin_error; ?> </span> </div>
<div class="form-group">
<label> bank <br></label>
<input type="text" name="bank" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($bank_error)) echo
$bank_error; ?> </span> </div>
<div class="form-group">
<label> amount <br></label>
<input type="text" name="amount" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($amount_error)) echo
$amount_error; ?> </span> </div>
<div class="form-group">
<label> account <br></label>
<input type="text" name="account" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($account_error)) echo
$account_error; ?> </span> </div>
<div class="form-group">
<label> addhar <br></label>
<input type="text" name="addhar" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($addhar_error)) echo
$addhar_error; ?> </span> </div>
<div class="form-group">
<label>user Name <br></label>
<input type="text" name="username" class="formcontrol" value=""
maxlength="50" required="">
<span class="textdanger"><?php if (isset($username_error)) echo
$username_error; ?> </span> </div>
        <input type="submit" class="btn btn-primary" name="signup" value="submit">
<div class="form-group"> </i>  
<div class="form-group ">
</span></div>
</body>
</html>
