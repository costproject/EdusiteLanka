<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
	font-family: Calibri, Helvetica, sans-serif;  
	background-color:#eabfff ;
	
   <!-- background-image: linear-gradient(180deg, #699E3C, #302718);
	-->
	}  

h1{
	color:#383a59   ;
	  text-shadow: 1.5px 1.5px gray;
    letter-spacing:2px;
	}
	

.container { 
    margin:auto;
    width:40%;
    color:#3c005a;
	box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
	padding-bottom: 120px;
	padding-left: 120px;
	padding-right: 120px;
	padding-top: 20px;  
	background-color:#ffffff   ;  
	<!--background-image:url("6.jpg");-->

	}  
  
input[type=text], input[type=password], textarea {  
	width: 100%; 
	color:#3c005a;
	padding: 15px;  
	margin: 6px 0 22px 0;  
	display: inline-block;  
	border:none;
	background: #eabfff; 
	border-left-style: solid;
	border-left-color: #383a59   ;  
	border-left-width:5px;
	} 
	
input[type=text]:focus, input[type=password]:focus {  
	background-color: #C7AB59;  
	outline: none;  
	}
	
.div1{
	width:100%;
	height:50%;
	}
	
hr {  
	border: 1px solid #50fa7b ;  
	margin-bottom: 25px;  
	} 
	
.registerbtn {  
	background-color: #50fa7b ;  
	color: white;  
	padding: 16px 20px;  
	margin: 8px 0;  
	border: none;  
	cursor: pointer;  
	width: 106%;  
	opacity: 1; 
	box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
	letter-spacing:2px;
	}  
	
.registerbtn:hover {  
	opacity: 1; 
	}  
	
</style> 
<title>Tutor Registration form</title>
</head> 
 
<body >   
	<form action="mailto:sadhushan1234@gmail.com?subject=New%20user%20details" method="POST"> 
	  <div class="div1"> 
		<div class="container"> 
  
		<center>  <h1> Tutor Registeration Form</h1> </center>  
		   <hr><br>
		<label> <b>Firstname :</b> </label>   
		<input type="text" name="firstname" placeholder= "Firstname" size="15" required />  
		
		<label> <b>Lastname : </b></label>    
		<input type="text" name="lastname" placeholder="Lastname" size="15"required />    
		
		<label>  <b>Career :  </b></label>   <br>
		<select name="Career">  
			<option value="Course">None</option>  
			<option value="BCA">Web Developer</option>  
			<option value="BBA">BBA</option>  
			<option value="B.Tech">B.Tech</option>  
			<option value="MBA">MBA</option>  
			<option value="MCA">MCA</option>  
			<option value="M.Tech">M.Tech</option>  
		</select>  
		<br><br>
		
		<label>   <b>Gender : </b> </label><br>  
		<input type="radio" value="Male" name="gender" checked > Male   
		<input type="radio" value="Female" name="gender"> Female   
		<br><br>
       
		 
		 <b>Skills : </b>
		<input type="text" name="skill" placeholder="Your Skills" size="15"required />
	
		<br><br><br>
		 <b>Work Experience : </b> 
		<textarea cols="80" rows="3" placeholder="experience 1" value="experience 1" required>  </textarea>  
 
		 <br><br><br>
		 <b>Education : </b> 
		<textarea cols="80" rows="3" placeholder="Edu1"  required>  </textarea>  
	 
		 <br><br><br>
		<label>   <b>Phone Number: </b> </label>    
		<input type="text" name="phone" placeholder="phone no." size="10"/ required>   
		
        <b>Address : </b> 
		<textarea cols="80" rows="5" name="address" placeholder="Current Address" value="address" required>  </textarea>  
		
		<br><br><br>
		<label for="email"><b>Email :</b></label>  
		<input type="text" placeholder="Enter Email" name="email" required>  
  
		<label for="psw"><b>NIC No :</b></label>  
		<input type="text" placeholder="Enter NIC No." name="nic" required>  
  

		<br><br><br>
		
		<button type="submit" class="registerbtn" >SEND </button>
		<a href="teach_update_profile.php" class="goback" >go back </a>

		</div> 
	  </div>  
	</form>  









</body>  
</html> 