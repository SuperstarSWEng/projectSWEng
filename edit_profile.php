<?php
	session_start();
	if($_SESSION['Student_ID'] == "")
	{
		echo "Please Login!";
		exit();
	}
	
	mysql_connect("localhost","root","1234");
	mysql_select_db("cpe_db");
	$strSQL = "SELECT * FROM member_student WHERE Student_ID = '".$_SESSION['Student_ID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>
<html>
<head>
<title>ThaiCreate.Com Tutorials</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<form name="form1" method="post" action="save_profile.php">
  Edit Profile! <br>
  <table width="400" border="1" style="width: 400px">
    <tbody>
      <tr>
        <td width="125"> &nbsp;Student_ID</td>
        <td width="180">
          <?php echo $objResult["Student_ID"];?>
        </td>
      </tr>
      <tr>
        <td> &nbsp;Student_ID</td>
        <td>
          <?php echo $objResult["Student_ID"];?>
        </td>
      </tr>
      <tr>
        <td> &nbsp;Password_Student</td>
        <td><input name="txtPassword_Student" type="Password_Student" id="txtPassword_Student" value="<?php echo $objResult["Password_Student"];?>">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Confirm Password_Student</td>
        <td><input name="txtConPassword_Student" type="Password_Student" id="txtConPassword_Student" value="<?php echo $objResult["Password_Student"];?>">
        </td>
      </tr>
      <tr>
        <td>&nbsp;Name</td>
        <td><input name="txtName" type="text" id="txtName" value="<?php echo $objResult["Name"];?>"></td>
      </tr>
      <tr>
        <td> &nbsp;Status</td>
        <td>
          <?php echo $objResult["Status"];?>
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="Save">
</form>
</body>
</html>