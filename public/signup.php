<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration</title>
	
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
  
</head>
<body>
<div class="container">
			     
                <a href="#">Home</a>
                <span class="right">
                 
			<header>
				<h1><span>Register Here</span></h1>
            </header>       
      <div  class="form">
    	<form id="contactform" action="update_details.php" method="post"> 
    		<p class="contact"><label for="name">Name</label></p> 
    		<input id="name" name="name" placeholder="First and last name"  tabindex="1" type="text" required> 
    			 
    		<p class="contact"><label for="email">Email</label></p> 
    		<input id="email" name="email" placeholder="example@domain.com" type="email" required> 
                
            <p class="contact"><label for="username">Create a username</label></p> 
    		<input id="username" name="username" placeholder="username"  tabindex="2" type="text" required> 
    			 
            <p class="contact"><label for="password">Create a password</label></p> 
    		<input type="password" id="password" name="password"  required> 
             <p class="contact"><label for="repassword">Confirm your password</label></p> 
    		<input type="password" id="repassword" name="repassword" required > 
        
               <fieldset>
                 <label>Birthday</label>
                  <label class="month"> 
                  <select class="select-style" name="BirthMonth" required>
                  <option value="">Month</option>
                  <option  value="01">January</option>
                  <option value="02">February</option>
                  <option value="03" >March</option>
                  <option value="04">April</option>
                  <option value="05">May</option>
                  <option value="06">June</option>
                  <option value="07">July</option>
                  <option value="08">August</option>
                  <option value="09">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12" >December</option>
                  </label>
                 </select>    
                <label>Day<input class="birthday" maxlength="2" name="BirthDay"  placeholder="Day" required></label>
                <label>Year <input class="birthyear" maxlength="4" name="BirthYear" placeholder="Year" required></label>
              </fieldset>
  
            <select class="select-style gender" name="gender" required>
            <option value="">Choose Option</option>
            <option value="m">Male</option>
            <option value="f">Female</option>
            <option value="others">Other</option>
            </select><br><br>
            
            <p class="contact"><label for="phone">Mobile phone</label></p> 
            <input id="phone" name="phone" placeholder="phone number" required type="text"> <br>
			  Reg NO: <input id="regno" name="regno" placeholder="reg number" required type="text"> <br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Sign me up!" type="submit"> 	 
   </form> 
</div>      
<script>
</script>

</body>
</html>
