<!--Session making-->
<?php
    include 'config.php';
    session_start();
    $user_id = $_SESSION['user_id'];
    $type = $_SESSION['type'];
    if(!isset($user_id) && $type=='S'){   //identify teacher or student was logged
       header('location:login.php');
    }else if ((!isset($user_id) && $type=='T')){
        header('location:teach_login.php');
    };
?>

<!--HTML-->
<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="master.css">
    <head>
        <meta charset="UTF-8">
        <title>Home Page</title>
    </head>
    <body>

        <!--Header-->
        <br>
        <div class="Header_Section" align="center">
            <div class="header">
                <table align="center" width="100%">
                    <tr>
                        <!--Profile Picture area-->
                        <td align="left" class="propicArea">
                            <?php
                                if($type=='S'){  //cheking student or teacher was logged & show correct profile
                                    echo '<a href="update_profile.php" class="btn uName">';
                                }else if ($type=='T'){
                                    echo '<a href="teach_update_profile.php" class="btn uName">';
                                };
                            ?>

                            <div class="propicArea">
                            <?php
                                if($type=='S'){
                                    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
                                    $link='update_profile.php';
                                }else if ($type=='T'){
                                    $select = mysqli_query($conn, "SELECT * FROM `teach_user_form2` WHERE id = '$user_id'") or die('query failed');
                                    $link='teach_update_profile.php';
                                };
                                if(mysqli_num_rows($select) > 0){
                                    $fetch = mysqli_fetch_assoc($select);
                                }
                                if($fetch['image'] == ''){
                                    echo '<img src="default-avatar.png" " class="profilePic">';
                                }else{
                                    echo '<img src="uploaded_img/'.$fetch['image'].'" class="profilePic">';
                                }
                            ?>
                            <div class="headName">
                                &nbsp;&nbsp;<?php echo $fetch['name']; ?> <br> &nbsp;&nbsp;<?php echo $fetch['email']; ?>
                            </div>
                            </div>
                            <?php echo '</a>'; ?>
                        </td>
                       <td id="btnofloginm"><a href="indexcopy.php" class="delete-btn aboutLink">Logout</a></td>  
                    </tr>
                </table>
            </div>
            <br>

            <!--Menu Section-->
            <div class="menu">
                <table align="center" width="100%">
                    <tr>
                        <td width="25%"><h2 class="Site">&nbsp;EDUSITE LANKA</h2></td>
                        <td width="10%" class="nav"><a href="index.php" class="nav"><i class="fa fa-home"></i>&nbsp Home</a></td>
                        <td width="10%" class="nav"><a href="index.php#aboutus_section" class="nav"><i class="fa-solid fa-address-card"></i>&nbsp About</a></td>
                        <td width="10%" class="nav"><a href="index.php#teacher_section" class="nav"><i class="fa-solid fa-user-graduate"></i>&nbsp Staff</a></td>
                        <td width="10%" class="nav"><a href="index.php#Course_section" class="nav"><i class="fa-solid fa-dungeon"></i>&nbsp Courses</a></td>
                        <td width="10%" class="nav"><a href="index.php#contact" class="nav"><i class="fa-solid fa-phone"></i>&nbsp Contact</a></td>
                        <td width="25%" class="Search" align="right"><input type="text" name="" class="Search" placeholder="Search">&nbsp;</td>
                    </tr>
                </table>
            </div>
        </div>

        <br>

        <!--Welcome-->
        <div class="welcome_section" align="center">
            <div class="welcome">
                <table align="center" width="100%">
                    <tr>
                    <td valign="middle" height="600px" width="40%">
                        <div class="welcomeText"> 
                            <h1 class="welcome">Education Needs <br> Complete Solution</h1>
                            <br><br>
                            <h3 class="welcome">Welcome to our platform <br> for finding and connecting with <br> qualified teachers <br> in a variety of subjects. <br> Whether you're a student looking <br> for extra support in your studies <br> or a teacher looking to expand <br> your reach, our website offers a simple <br>and secure way to connect with  <br>like-minded individuals who <br> share your passion <br> for learning. </h3>
                            <br><br>
                            <a href="#aboutus_section" class="aboutLink">About Us</a> 
                        </div>
                    </td>
                    <td width="60%"><img src="images/WELCOME.png" class="welcome"></td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="aboutus_section">
       
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
                        <td><h2 class="aboutus">User-friendly interface</h2></td>
                        <td><h2 class="aboutus">Feedback and support</h2></td>
                        <td><h2 class="aboutus">Detailed teacher profiles</h2></td>
                    </tr>
                    <tr>
                        <td width="30%" valign="top">
                            
                            <br>
                            <p class="aboutus">
                                Our website has been designed with a user-friendly interface to make it easy for students to find the right teachers and classes for their needs. With a clean and intuitive layout, users can quickly search for teachers by subject, level, and location, and view detailed profiles with qualifications, experience, and teaching style.
                            </p>
                        </td>
                        <td width="30%" valign="top">
                            
                            <br>
                            <p class="aboutus">
                                we are committed to providing the best possible experience for our users. That's why we offer a feedback and support system that allows students to rate and review their teachers and classes, helping others make informed decisions. We also offer support to students who have questions or issues with the website or their classes, ensuring that their experience is as smooth and enjoyable as possible.
                            </p>
                        </td>
                        <td width="30%" valign="top">
                            
                            <br>
                            <p class="aboutus">
                                we understand the importance of finding the right teacher for your learning needs. That's why we have created detailed teacher profiles that provide all the information you need to make an informed decision. From qualifications and experience to teaching style and student reviews, our profiles offer a comprehensive overview of each teacher's strengths and teaching approach.
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
                            <h2 class="count">Teachers <br><br> 4</h2>
                        </td>
                        <td class="count">
                            <h2 class="count">Students <br><br> 100</h2>
                        </td>
                        <td class="count">
                            <h2 class="count">Subjects <br><br> 4</h2>
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
                    <h1 class="teacher">Certified Tutors</h1>
                    <br>
                    <h3 class="teacher"> </h3>
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
                            <td><h2 class="teacher_name">Sandun Siwantha</h2></td>
                            <td><h2 class="teacher_name">P. Sadhushan</h2></td>
                            <td><h2 class="teacher_name">Senuri Kavindya</h2></td>
                            <td><h2 class="teacher_name">Muditha Udayangani</h2></td>
                        </tr>
                        <tr>
                            <td valign="top"><h3 class="teacher_name"><br>Sandun Siwantha is a dedicated and experienced Science teacher who is passionate about inspiring students to pursue their interests in the natural world. With a Bachelor's degree in Science and a teaching certification, Sandun has a strong foundation in the subject matter and pedagogical techniques required to effectively teach Science. He has several years of experience teaching students of various levels and backgrounds, and is skilled in creating engaging lesson plans and hands-on activities that promote student learning and curiosity.</h3></td>
                            <td valign="top"><h3 class="teacher_name"><br>P. Sadhushan is a highly skilled and experienced Mathematics teacher who is passionate about helping students develop their mathematical thinking and problem-solving skills. With a Bachelor's degree in Mathematics and a teaching certification, Sadhushan has a strong foundation in the subject matter and pedagogical techniques required to effectively teach Mathematics. He has several years of experience teaching students of various levels and backgrounds, and is skilled in creating engaging lesson plans and activities that promote student learning and curiosity. </h3></td>
                            <td valign="top"><h3 class="teacher_name"><br>Senuri Kavindya is a dynamic and enthusiastic English teacher who is dedicated to helping students develop their language skills and become effective communicators. With a Bachelor's degree in English and a teaching certification, Senuri has a strong foundation in the subject matter and pedagogical techniques required to effectively teach English. She has several years of experience teaching students of various levels and backgrounds, and is skilled in creating engaging lesson plans and activities that promote student learning and foster a love of language.</h3></td>
                            <td valign="top"><h3 class="teacher_name"><br>Muditha Udayangani is a knowledgeable and experienced ICT teacher who is passionate about helping students develop their technical skills and become effective problem-solvers. With a Bachelor's degree in Computer Science and a teaching certification, Muditha has a strong foundation in the subject matter and pedagogical techniques required to effectively teach ICT. She has several years of experience teaching students of various levels and backgrounds, and is skilled in creating engaging lesson plans and activities that promote student learning and creativity.</h3></td>
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






<!--Course section-->
    <div id="Course_section">
        <br>
        <br>
         <!--teachers-->
        <div class="teacher_section">
            <div class="teacher">
                <div class="teacher_head">
                    <h1 class="teacher">Our Subjects</h1>
                    <br>
                    <h3 class="teacher"></h3>
                    <br><br>
                </div>
                <div class="teacher_img" align="center">
                    <table width="100%" align="center">
                        <tr>
                            <td class="img"><a href="ict.php"><img src="images/ict.jpg" class="img"></td>
                            <td class="img"><a href="maths.php"><img src="images/maths.jpg" class="img"></a></td>
                            <td class="img"><a href="science.php"><img src="images/science.jpg" class="img"></a></td>
                            <td class="img"><a href="english.php"><img src="images/english.jpg" class="img"></a></td>
                        </tr>
                        <tr>
                            <td valign="top">
                                <h2 class="teacher_name">ICT</h2><h3 class="teacher_name"><br>ICT (Information and Communication Technology) is a subject that involves the study of technology and its applications. It covers a wide range of topics, including computer programming, networking, databases, and web design. A good ICT teacher can help students develop their technical skills, problem-solving abilities, and digital literacy, which are essential for success in the modern world.</h3>
                            </td>
                            <td valign="top">
                                <h2 class="teacher_name">Mathematics</h2><h3 class="teacher_name"><br>Maths is a subject that involves the study of numbers, quantities, and shapes. It covers a wide range of topics, including arithmetic, algebra, geometry, trigonometry, and calculus. A good Maths teacher can help students develop their problem-solving skills, logical reasoning, and mathematical thinking, which are essential for success in many fields, including science, engineering, and finance.</h3>
                            </td>
                            <td valign="top">
                                <h2 class="teacher_name">Science</h2><h3 class="teacher_name"><br>Science is a subject that involves the study of the natural world and its phenomena. It covers a wide range of topics, including biology, chemistry, physics, and earth science. A good Science teacher can help students develop their curiosity, critical thinking, and scientific inquiry skills, which are essential for understanding the world around us and solving complex problems.</h3>
                            </td>
                            <td valign="top">
                                <h2 class="teacher_name">English</h2><h3 class="teacher_name"><br>English is a subject that involves the study of language, literature, and communication. It covers a wide range of topics, including grammar, composition, reading comprehension, and critical analysis of texts. A good English teacher can help students develop their language skills, improve their writing, and enhance their ability to express themselves clearly and persuasively.</h3>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>


<!--when login/registerd is clicked 2 option popups-->
<div id="myModal2" class="modal2">
    <div class="modal-content2">
        <table border="0" width="100%" height="100%">
            <tr>
                <td align="center">
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
            <!--</div> if want remove this comment--> 
        <!--</div> --> 
    <!--</div> --> 
<!--</div> -->   


<!--script-->

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
</script>

        <?php
        // put your code here
        ?>

<br><br><br><br>


        <!--Footer-->
        <div id="contact">
            <div class="contact">
                <div class="footer_section">
                    <div class="teacher"> 
                        <div class="menu">
                            <table align="center" width="100%">
                                <tr>
                                    <td width="25%"><h2 class="Site">&nbsp;</h2></td>
                                    <td width="25%" class="nav"><i class="fa-solid fa-address-card"></i>&nbsp info@mecalatutors.com</td>
                                    <td width="25%" class="nav"><i class="fa-solid fa-phone"></i>&nbsp +94158486759</td>
                                    <td width="25%" class="Search" align="right">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="4" align="center"><br>Copyright &copy;2023 All rights reserved</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>