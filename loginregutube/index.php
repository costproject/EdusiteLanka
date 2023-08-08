<?php 
include'config.php';
?>

<!DOCTYPE html>
<!-- -->
<html>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <head>
        <meta charset="UTF-8">
       
<style>

h1,h2,h3,h4,h5,h6,div,p,table,body{
    padding: 0px;
    margin: 0px;
    border: 0px;
}



body {
    font-family: 'Poppins', sans-serif;
    color: black;
    background-image: url(../images/body-bg.jpg);
}

.Header_Section,.welcome_section, .aboutus_section, .count_section, .teacher_section{
    margin-left: 100px;
    margin-right: 100px;
}

.profilePic{
    float: left;
    width: 35px;
    height: 35px;
    border-radius: 35px;
}

.propicArea{
    vertical-align: middle;
}

td.nav{
    text-align: center;
    padding-top: 10px;
    padding-bottom: 10px;
}

td.search{
    text-align: right;
}

a.login{
    text-decoration: none;
    color: white;
    background-color: black;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 20px;
    padding-right: 20px;;
    text-align: center;
}

a.login:hover{
    background-color: orangered;
    color: white;
}

a.nav{
    text-decoration: none;
    color: white;
}

a.nav:hover {
    color:orangered;
}

.menu{
    background-color: black;
    color: white;
    padding-top: 5px;
    padding-bottom: 5px;
}

input.Search{
    border-radius: 10px;
    border-color: white;
    border-style: solid;
    color: white;
    background-color: black;
    padding-top: 5px;
    padding-bottom: 5px;
    text-align: center;
}








div.welcome{
    background-image: url(images/welcome.jpg);
    width: 100%;
    height: 600px;
    background-repeat: no-repeat;
    background-position: center;
    object-fit: cover;
}

a.aboutLink,a.teacher{
    text-decoration: none;
    color: white;
    background-color: black;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 20px;
    padding-right: 20px;;
    text-align: center;
    border-radius: 20px;
}

a.aboutLink:hover, a.teacher:hover{
    background-color: orangered;
    color: white;
}

div.welcomeText{
    text-align: center;
    padding-right: 240px;
}

h1.welcome,h3.welcome{
    color: white;
}









div.aboutus_section{
    background-color: black;
}

h2.aboutus, p.aboutus{
    color: white;
    padding-top: 10px;
    padding-left: 5px;
    padding-right: 5px;
    padding-bottom: 10px;
    text-align: center;
    vertical-align: middle;
}

h2.aboutus{
    color: orangered;
}


table.aboutus{
    padding-top: 10px;
    padding-bottom: 10px;
}







h2.count{
    color: black;
    text-align: center;
}

div.count{
    padding-top: 20px;
    padding-bottom: 20px;
}





img.img{
    width: 200px;
    height:300px;
    background-repeat: no-repeat;
    background-position: top;
    object-fit: cover;
}

td.img{
    text-align: center;
}

h1.teacher{
    text-align: center;
}

h3.teacher{
    text-align: center;
    color: grey;
}

h2.teacher_name{
    text-align: center;
}

h3.teacher_name{
    text-align: center;
    color: grey;
}

a.teacher{

}
/*opens js and provide with 2 option*/
#btnofloginm{

    text-align: right;
    display: block;
  

}
#myBtnlr{
    font-size: 16px;
    background-color: white;

  color: black;
     width: 150px;
    height: 50px;
   border-radius: 5px;
    border: none;
    font-family:Lucida Console ;


  

}

#myBtnlr:hover{

background-color: #699E3C;



}







.roundbutton{
    background-color:gray ;
    border:none ;
    height: 150px;
    width: 150px;
    border-radius: 50%;


}
.roundbutton:hover{
       background-color:whitesmoke ;
    border:none ; 

}










        .modal2{
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;

 
background: linear-gradient(45deg, rgba(48,39,24,1) 0%, rgba(199,171,89,1) 49%, rgba(222,210,168,1) 100%);
}

.modal-content2 {
 
  margin: 15% auto;
  padding: 20px;
  
  width: 70%;
  height: 400px;

}




.circle {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 150px;
  height: 150px;
  border-radius: 50%;
  background-color: gray;
  overflow: hidden;
  transition: all 0.3s ease;
}

.circle i {
  max-width: 100%;
  max-height: 100%;
  transition: all 0.3s ease;
}

.circle:hover {
  transform: scale(1.3);
  background-color: whitesmoke;
}

.circle:hover i {
  transform: scale(1.1);

}

/*----------------------------------------------------------------*/
.imgdata
{
      width: 200px;
    height:300px;
    
    object-fit: cover;
    margin: 0px auto;

}


#tablename{
   font-weight: bold;
   font-size: 25px;



}
#tabledescrip{
    
      


}

</style>


        <title>HomePage</title>
    </head>
    <body>
        <!--Header-->
        <br>
        <div class="Header_Section" align="center">
            <div class="header">
                <table align="center" width="100%">
                    <tr>
                        <td align="left" class="propicArea">
                            <div class="propicArea">
                                <img src="images\dp.jpg" class="profilePic">
                                <div>&nbsp;&nbsp;kndfjsajf@gmail.com <br> &nbsp;&nbsp;#12345</div>
                            </div>
                        </td>
                       <td  id="btnofloginm"><button id="myBtnlr">Login/Register</button>
                        

</td>
                        
                    </tr>
                </table>
            </div>
            <br>
            <div class="menu">
                <table align="center" width="100%">
                    <tr>
                        <td width="25%"><h2 class="Site">&nbsp;MECALA TUTORS</h2></td>
                        <td width="10%" class="nav"><a href="index.php" class="nav"><i class="fa fa-home"></i>&nbsp Home</a></td>
                        <td width="10%" class="nav"><a href="About.php" class="nav"><i class="fa-solid fa-address-card"></i>&nbspAbout</a></td>
                        <td width="10%" class="nav"><a href="Courses.php" class="nav"><i class="fa-solid fa-dungeon"></i>&nbspCourses</a></td>
                        <td width="10%" class="nav"><a href="Staff.php" class="nav"><i class="fa-solid fa-user-graduate"></i>&nbspStaff</a></td>
                        <td width="10%" class="nav"><a href="Contact.php" class="nav"><i class="fa-solid fa-phone"></i>&nbspContact</a></td>
                        <td width="25%" class="Search" align="right"><input type="text" name="" class="Search" placeholder="Search">&nbsp;</td>
                    </tr>
                </table>
            </div>
        </div>

        <br>
        <br>

        <!--Welcome-->
        <div class="welcome_section" align="center">
            <div class="welcome">
                <table align="center" width="100%">
                    <td valign="middle" height="600px">
                        <div class="welcomeText"> 
                            <h1 class="welcome">Education Needs <br> Complete Solution</h1>
                            <h3 class="welcome">Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit, sed do eiusmod tempor incididunt</h3>
                            <br><br>
                            <a href="About.php" class="aboutLink">About Us</a> 
                        </div>
                    </td>
                </table>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <!--About us-->
        <div class="aboutus_section">
            <div class="aboutus" align="center">
                <table align="center" width="90%" class="aboutus" cellpadding="5">
                    <tr>
                        <td width="30%">
                            <h2 class="aboutus">Certified Teachers</h2>
                            <br>
                            <p class="aboutus">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                            </p>
                        </td>
                        <td width="30%">
                            <h2 class="aboutus">#1 Tutor website In LK</h2>
                            <br>
                            <p class="aboutus">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                            </p>
                        </td>
                        <td width="30%">
                            <h2 class="aboutus">Special Education</h2>
                            <br>
                            <p class="aboutus">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <br><br>

        <!--count-->
        <div class="count_section">
            <div class="count" align="center">
                <table class="count" width="60%" align="center">
                    <tr>
                        <td class="count">
                            <h2 class="count">Teachers <br><br> 20</h2>
                        </td>
                        <td class="count">
                            <h2 class="count">Students <br><br> 100</h2>
                        </td>
                        <td class="count">
                            <h2 class="count">Subjects <br><br> 10</h2>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!--teachers-->
        <div class="teacher_section">
            <div class="teacher">
                <div class="teacher_head">
                    <h1 class="teacher">Certified Teachers</h1>
                    <br>
                    <h3 class="teacher"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                    tempor incididunt ut labore et dolore magna aliqua. </h3>
                    <br><br>
                </div>
                <div class="teacher_img" align="center">
                    <table width="100%" align="center">
                        <tr>
                            <td class="img"><img src="images/img1.jpg" class="img"></td>
                            <td class="img"><img src="images/img2.jpg" class="img"></td>
                            <td class="img"><img src="images/img3.jpg" class="img"></td>
                            <td class="img"><img src="images/img4.jpg" class="img"></td>
                        </tr>
                        <tr>
                            <td><h2 class="teacher_name">Sandun Siwantha</h2><h3 class="teacher_name"><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3></td>
                            <td><h2 class="teacher_name">P. Sadhushan</h2><h3 class="teacher_name"><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3></td>
                            <td><h2 class="teacher_name">Senuri Kavindya</h2><h3 class="teacher_name"><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3></td>
                            <td><h2 class="teacher_name">Muditha Udayangani</h2><h3 class="teacher_name"><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3></td>
                        </tr>
                        <tr>
                            <td colspan="4" align="center"><br><br><a href="teacher.html" class="teacher">See More</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>

        <!--subject-->
        <div class="subject_section">
            <div class="subject">
                <div class="subject_head">
                    <h1 class="subject" align="center">Certified Teachers</h1>
                </div>
            </div>
        </div>
















<div class="container">
             <table class="imagetable" border="1" align="center" width="100%">
           <thead>
                    
           </thead>
                    <tbody>
<tr>
  <?php
    $query = "SELECT * FROM teach_user_form";
    $r =mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($r)){

        
  ?>



                <td width="200" height="300" align="center"><img src="uploaded_img/<?php echo $row['image'] ?>" class="imgdata" >
             <p id="tablename"><?php echo $row['name'] ?></p>
            <br/>
         <p id="tabledescrip"> <?php echo $row['info'] ?></p></td>
           

   <?php
         }

     ?>
 </tr>

                    </tbody>
</table>
</div>




<!--when login/registerd is clicked 2 option popups-->
<div id="myModal2" class="modal2">
  <div class="modal-content2">
           <table border="0" width="100%" height="100%">
            
       <tr><td align="center">
            <p class="circle">
                <abbr title="student login" ><a href="login.php"><button id="studentbutton" class="roundbutton" ><i class="fa-solid fa-user fa-6x" ></i></button></a></abbr>
            </p>
         </td>
        <td align="center">
            <p class="circle">
               <abbr title="teacher login" > <a href="teach_login.php"><button id="lecbutton" class="roundbutton" ><i class="fa-solid fa-user-graduate fa-6x"></i></button></a></abbr>
            </p>
        </td>
      

        </tr>


           </table>
     </div>
</div>

<div>
    <div>











    </div>
</div>    



<script>
		
    //circle
var btn2 = document.getElementById("myBtnlr");
var modal2 = document.getElementById("myModal2");
        btn2.onclick = function() {
  modal2.style.display = "block";
                               }


        window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}






//---------------------------------------------


	</script>








        <?php
        // put your code here
        ?>
    </body>
</html>
