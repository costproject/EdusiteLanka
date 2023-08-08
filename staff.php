<!--staff.php-->
<?php
    include 'config.php';
    session_start();
    $user_id = $_SESSION['user_id'];
    $type = $_SESSION['type'];
    if(!isset($user_id) && $type=='S'){
       header('location:login.php');
    }else if ((!isset($user_id) && $type=='T')){
        header('location:teach_login.php');
    };
    if(isset($_GET['logout'])){
       unset($user_id);
       session_destroy();
       header('location:index.php');
    }
?>

<!--HTML-->
<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="master.css">
    <head>
        <meta charset="UTF-8">
        <title>Staff Page</title>
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

      
<!--Staff Body-->
<div class="container" align="center">
    <table class="imagetable" border="0" align="center" width="70%">
        <thead>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM teach_user_form2";
                $r =mysqli_query($conn,$query);
                while($row=mysqli_fetch_assoc($r)){
            ?>
            <tr> 
                <td  width="10%" height="100" align="center">
                    <a href="profiles_lec/<?php echo $row['ProLink']?>">
                        <img src="uploaded_img/<?php echo $row['image']?>" class="imgdata">
                    </a>
                </td>
                <td width="10%" height="100" align="center" id="tablename"><?php echo $row['name'] ?></td>
                <td width="10%" height="100" align="center" id="tabledescrip"> <?php echo $row['subject'] ?></p></td>
                <td width="70%" height="100" align="left" id="tabledescrip"> <?php echo $row['info'] ?></p></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>

<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>


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