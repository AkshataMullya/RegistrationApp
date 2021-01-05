<html>
<head>
<title>Registration Poll</title>
</head>
<style>
	form {

		width:50%;
    border: 3px solid #f1f1f1;background-color: pink;
}
input[type=text]{
    width:auto;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type=email]{
    width:auto;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
button {
    background-color:gray;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}
button:hover {
    opacity: 0.8;
}

.container {
    padding: 16px;
}
 
</style>
<script>
    /*  document.getElementById('studentDetail').addEventListener('submit',function(event)
    {
        if(document.getElementById('terms').checked==false){
            event.preventDefault();
        
        alert("please accept terms and conditions");
        return false;
    }
    });*/
   /* function checkCheckBox(f)
    {
        if(f.agree.checked==false)
        {
            alert("please accept terms and conditions");
            return false;
        }
        else
        {
            return true;
        }
    }*/
    </script>
<center>
    <h1>Registration</h1>
<form action="" method="POST" enctype="multipart/form-data">
<div class="container">
    <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter Firstname" name="fnm">
    <span><?php echo isset($firstNameError)?($firstNameError):'' ?></span><br>

    <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Lastname" name="lnm">
    <span><?php echo isset($lastNameError)?($lastNameError):'' ?></span><br> 

    <label for="email"><b>Email ID</b></label>
    <input type="email" placeholder="Enter Email" name="emai">
    <span><?php echo isset($emailError)?($emailError):'' ?></span><br>

    <label for="mobile"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Mobile Number" name="mobil">
    <span><?php echo isset($mobileError)?($mobileError):'' ?></span><br>

    <input type="checkbox" name="agree" value="agree" id="terms"/>I Agreed Terms and Conditions
    <span><?php echo isset($agreeError) ? ($agreeError) : ''  ?></span><br>

    <button type="submit" name="submit">submit</button><br>
      
  </div>
  
</form>
</center>
</html>
