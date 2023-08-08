<?php
    include 'config.php';
    session_start();
    $user_id = $_SESSION['user_id'];
    $type = $_SESSION['type'];
    if(isset($_GET['logout'])){
       unset($user_id);
       session_destroy();
       header('location:index.php');
    }
?>

<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="master.css">
    <head>
        <meta charset="UTF-8">
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
                                <div>&nbsp;&nbsp;sample@gmail.com <br> &nbsp;&nbsp;#UserId</div>
                            </div>
                        </td>
                       <td  id="btnofloginm"><button id="myBtnlr">Login</button>
                        

</td>
                        
                    </tr>
                </table>
            </div>
            <br>
            <div class="menu">
                <table align="center" width="100%">
                    <tr>
                        <td width="25%"><h2 class="Site">&nbsp;MECALA TUTORS</h2></td>
                        <td width="10%" class="nav"><a href="index2.php" class="nav"><i class="fa fa-home"></i>&nbsp Home</a></td>
                        <td width="10%" class="nav"><a href="index2.php#aboutus_section" class="nav"><i class="fa-solid fa-address-card"></i>&nbsp About</a></td>
                        <td width="10%" class="nav"><a href="index2.php#teacher_section" class="nav"><i class="fa-solid fa-user-graduate"></i>&nbsp Staff</a></td>
                        <td width="10%" class="nav"><a href="index2.php#Course_section" class="nav"><i class="fa-solid fa-dungeon"></i>&nbsp Courses</a></td>
                        <td width="10%" class="nav"><a href="index2.php#contact" class="nav"><i class="fa-solid fa-phone"></i>&nbsp Contact</a></td>
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
                            <a href="#aboutus_section" class="aboutLink">About Us</a> 
                        </div>
                    </td>
                </table>
            </div>
        </div>
        <div id="aboutus_section">
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
        <div id="teacher_section">
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
                            <td colspan="4" align="center"><br><br><a href="staff.php" class="teacher">See More</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        </div>

        <br>
        <br>
        <br>
        <br>








        <div id="Course_section">
        <br>
        <br>
        <!--teachers-->
        <div class="teacher_section">
            <div class="teacher">
                <div class="teacher_head">
                    <h1 class="teacher">Our Subjects</h1>
                    <br>
                    <h3 class="teacher"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                    tempor incididunt ut labore et dolore magna aliqua. </h3>
                    <br><br>
                </div>
                <div class="teacher_img" align="center">
                    <table width="100%" align="center">
                        <tr>
                            <td class="img"><a href="ict.php"><img src="images/ict.jpg" class="img"></a></td>
                            <td class="img"><a href="maths.php"><img src="images/maths.jpg" class="img"></a></td>
                            <td class="img"><a href="science.php"><img src="images/science.jpg" class="img"></a></td>
                            <td class="img"><a href="english.php"><img src="images/english.jpg" class="img"></a></td>
                        </tr>
                        <tr>
                            <td><h2 class="teacher_name">ICT</h2></td>
                            <td><h2 class="teacher_name">Mathematics</h2></td>
                            <td><h2 class="teacher_name">Science</h2></td>
                            <td><h2 class="teacher_name">English</h2></td>
                        </tr>
                        <tr>
                            <td valign="top"><h3 class="teacher_name"><br>ICT (Information and Communication Technology) is a subject that involves the study of technology and its applications. It covers a wide range of topics, including computer programming, networking, databases, and web design. A good ICT teacher can help students develop their technical skills, problem-solving abilities, and digital literacy, which are essential for success in the modern world.
</h3></td>
                            <td valign="top"><h3 class="teacher_name"><br>Maths is a subject that involves the study of numbers, quantities, and shapes. It covers a wide range of topics, including arithmetic, algebra, geometry, trigonometry, and calculus. A good Maths teacher can help students develop their problem-solving skills, logical reasoning, and mathematical thinking, which are essential for success in many fields, including science, engineering, and finance.
</h3></td>
                            <td valign="top"><h3 class="teacher_name"><br>Science is a subject that involves the study of the natural world and its phenomena. It covers a wide range of topics, including biology, chemistry, physics, and earth science. A good Science teacher can help students develop their curiosity, critical thinking, and scientific inquiry skills, which are essential for understanding the world around us and solving complex problems.</h3></td>

                            <td valign="top"><h3 class="teacher_name"><br>English is a subject that involves the study of language, literature, and communication. It covers a wide range of topics, including grammar, composition, reading comprehension, and critical analysis of texts. A good English teacher can help students develop their language skills, improve their writing, and enhance their ability to express themselves clearly and persuasively.
</h3></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        </div>



















  <!--subject
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
-->









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



<br><br><br><br>


<!--Footer-->
<div id="contact">
    <div class="contact">
        
        <div class="teacher_section">
            <div class="teacher">
                
                <div class="menu">
                <table align="center" width="100%">
                    <tr>
                        <td width="25%"><h2 class="Site">&nbsp;</h2></td>
                        <td width="25%" class="nav"><i class="fa-solid fa-address-card"></i>&nbsp info@mecalatutors.com</td>
                        <td width="25%" class="nav"><i class="fa-solid fa-phone"></i>&nbsp +94158486759</td>
                        <td width="25%" class="Search" align="right">&nbsp;</td>
                    </tr>

                    <tr><td colspan="4" align="center"><br>Copyright &copy;2023 All rights reserved</td></tr>
                </table>
            </div>
        </div>
            </div>
        </div>

    </div>
    <div class="footer">
        
    </div>
</div>












    </body>
</html>
