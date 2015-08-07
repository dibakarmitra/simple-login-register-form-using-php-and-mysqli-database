
<?php include 'config.php'; ?>
<?php
//database connection
$db=new mysqli("$dbhost","$dbuser","$dbpass");
$db->select_db("$dbname");

?>
<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
</head>

<body lang=EN-US style='tab-interval:.5in'>

<div class=WordSection1>

<div align=center>
<!-- register form section start -->
<form action="" method="post" name="register">
<table class=MsoNormalTable border=0 cellpadding=0 style='mso-cellspacing:1.5pt;mso-yfti-tbllook:1184;mso-padding-alt:0in 0in 0in 0in'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td colspan=2 style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center'><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'><a href="login.php">Login</a></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td colspan=2 style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center'><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'>Registration</span></b></p>
  </td>
 </tr>
 <u1:p></u1:p>
 <tr style='mso-yfti-irow:1'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><b><span
  style='font-size:8.5pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'>User Name</span></b></p>
  </td>
  <u1:p></u1:p>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><INPUT TYPE="text" NAME="username"></span></p>
  </td>
 </tr>
 <u1:p></u1:p>
 <tr style='mso-yfti-irow:2'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><b><span
  style='font-size:8.5pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'>Email Adds</span></b><o:p></o:p></p>
  </td>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><INPUT TYPE="text" NAME="email"></span><o:p></o:p></p>
  </td>
 </tr>
 <u1:p></u1:p>
 <tr style='mso-yfti-irow:3'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><b><span
  style='font-size:8.5pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'>First Name</span></b><o:p></o:p></p>
  </td>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><INPUT TYPE="text" NAME="fname"></span><o:p></o:p></p>
  </td>
 </tr>
 <u1:p></u1:p>
 <tr style='mso-yfti-irow:4'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><b><span
  style='font-size:8.5pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'>Last Name</span></b><o:p></o:p></p>
  </td>
  <u1:p></u1:p>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><INPUT TYPE="text" NAME="lname"></span><o:p></o:p></p>
  </td>
 </tr>
 <u1:p></u1:p>
 <tr style='mso-yfti-irow:5'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><b><span
  style='font-size:8.5pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'>Country***</span></b><o:p></o:p></p>
  </td>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><INPUT TYPE="text" NAME="country"></span><o:p></o:p></p>
  </td>
 </tr>
 <u1:p></u1:p>
 <tr style='mso-yfti-irow:6'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><b><span
  style='font-size:8.5pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'>Password</span></b><o:p></o:p></p>
  </td>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><INPUT TYPE="password" NAME="password"></span><o:p></o:p></p>
  </td>
 </tr>
 <u1:p></u1:p>
 <u1:p></u1:p>
 <tr style='mso-yfti-irow:8;mso-yfti-lastrow:yes'>
  <td colspan=2 style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman"'><INPUT TYPE="submit" VALUE="Register" NAME="register" Onclick="return done(this.form);" /></span></p>
  </td>
 </tr>
 <u1:p></u1:p>
</table>
</form> <!-- register form section end -->
</div>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><u1:p>&nbsp;</u1:p></p>

</div>

</body>

</html>
<!-- php quary section -->
<?php
  if(isset($_POST['register']))
  {
   //geting the values from user input form index
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $email=$_POST['email'];
   $username=$_POST['username'];
   $password=$_POST['password'];
   $country=$_POST['country'];
    //quary
   if ($db->query("INSERT INTO prof
    (username,email,fname,lname,country,password)
    VALUES ('$username','$email','$fname','$lname','$country','$password')"))
    print "<script>document.write('Account created :)');</script>";
	
	else {
		echo 'Error :(';
	}
  }
 ?>