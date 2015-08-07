<?php   
 session_start();
 include("config.php"); //include the config
?>
<?php
//create database connection
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

<!-- Login form start -->
<form action="" method="post" name="login">
<table class=MsoNormalTable border=0 cellpadding=0 style='mso-cellspacing:1.5pt;mso-yfti-tbllook:1184'>
<tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td colspan=2 style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.5pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'><a href="register.php">Register</a></span></b><span style='font-size:
  9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td colspan=2 style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.5pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'>Login</span></b><span style='font-size:
  9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'>User Name</span></b><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman"'><INPUT TYPE="text" NAME="username"><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'>Password</span></b><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman"'><INPUT TYPE="password" NAME="password"><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
  <td colspan=2 style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><INPUT TYPE="submit" VALUE="Login" NAME="login"/><o:p></o:p></span></p>
  </td>
 </tr>
</table>
</form> <!-- Login form end-->
</div>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

</div>

</body>

</html>

<!-- php quary section -->
 <?php
 if(isset($_POST['login']))
 {
   $username =$_POST['username'];
   $password=$_POST['password'];
   $query="SELECT * FROM prof WHERE username = '$username' AND password = '$password'"; //quary
   $result=$db->query($query);
   $num_rows=$result->num_rows;
   for($i=0;$i<$num_rows;$i++)
   {   $row=$result->fetch_row();
	}
   if(($username==$row[1])&&($password==$row[6])) //checking the username and password if right
   {
     $_SESSION['username']=$username;
	 Header("location:index.php");
   }
   else
   {
     echo 'Username and Password not Right :P';
   }
}
@mysql_close($con);
?>