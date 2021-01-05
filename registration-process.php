<?php
/*	include($_SERVER['DOCUMENT_ROOT'].'/lib/bj-vars.php');*/

	$mysqlConn=mysqli_connect('database1.cikrt1wxrd3j.us-east-1.rds.amazonaws.com:3306','admin','^TFGHY6tfghy');
	/*$txtDataName=isset($_FILES['select']['name'])?$_FILES['select']['name']:'';*/
	$firstName=isset($_POST['fnm'])?$_POST['fnm']:'';	
	$lastName=isset($_POST['lnm'])?$_POST['lnm']:'';	
	$email=isset($_POST['emai'])?$_POST['emai']:'';	
	$mobile=isset($_POST['mobil'])?$_POST['mobil']:'';
	$agree=isset($_POST['agree'])?$_POST['agree']:'';	

	if(mysqli_select_db($mysqlConn, 'studentdb'))
	{
	/*$fileTempName=isset($_FILES['select']['tmp_name'])?$_FILES['select']['tmp_name']:'';	*/
		$errcnt=0;
		
		if(isset($_POST['submit']))
		{	
			if($firstName=='')
			{
				$firstNameError="Please Enter FirstName";
				$errcnt++;
			}
			if($lastName=='')
			{
				$lastNameError="Please Enter lastName";
				$errcnt++;
			}
			if($email=='')
			{
				$emailError="Please Enter email";
				$errcnt++;
			}
			if($mobile=='')
			{
				$mobileError="Please Enter MobileNumber";
				$errcnt++;
			}
			/*if($fileTempName=='')
			{
			
				$fileTempError="Please Select File";
				$errcnt++;
			}*/
			if($agree=='')
			{
			
				$agreeError="echo <h4>Please agree T and C</h4>";
				$errcnt++;
			}

			if($errcnt>0)
			{
			
				include('registration-form.php');
			}
		
		else 
		{
			
			/*$imgFolder=$nameDir."/images/";
			$fileTempName=$_FILES['select']['tmp_name'];
			$fileName=$_FILES['select']['name'];*/
			$insertDatabaseDetails="INSERT INTO student(firstName,lastName,email,mobile) VALUES ('$firstName','$lastName','$email','$mobile')";
				$resultAdminDetails=mysqli_query($mysqlConn,$insertDatabaseDetails);
				if(isset($_POST['terms'])&&$_POST['terms']=='agree')
				{

				}
				else
				{

				}
			echo "Successfully Updated!!";
			include("userdatalist.php");	    
		}
	}
else
{
	include("registration-form.php");
}
	}
                   mysqli_close($mysqlConn);

	?>
