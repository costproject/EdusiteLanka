
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

<!DOCTYPE html>
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

a.uName{
    text-decoration: none;
    color: black;
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

    color: white;
    background-color: black;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 20px;
    padding-right: 20px;;
    text-align: center;
    border-radius: 20px;

    font-size: 16px;


     width: 150px;
    height: 50px;
   border-radius: 5px;
    border: none;
    font-family:Lucida Console ;

}

#myBtnlr:hover{
    background-color: orangered;
    color: white;
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
    width: 100px;
    height:100px;
    
    object-fit: fit;
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
                            <?php
                                            if($type=='S'){
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
                                <div>&nbsp;&nbsp;<?php echo $fetch['name']; ?> <br> &nbsp;&nbsp;<?php echo $fetch['email']; ?></div>

                            </div>
                            <?php echo '</a>'; ?>

                        </td>
                       <td  id="btnofloginm">  <a href="index2.php" class="delete-btn">logout</a>
                        

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
        <br>
































































<div class="container">
             <table class="imagetable" border="0" align="center" width="100%">
           <thead>
                    
           </thead>
                    <tbody>

   <?php
    $query = "SELECT * FROM  `teach_user_form2` WHERE subject='SCIENCE' ";
    $r =mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($r)){     
  ?>
  <tr><td colspan="3"><h1 class="teacher_name" align="center"><u>Science</u></h1></td></tr>
<tr>
        <td  width="33%" height="100" align="center"><a href="profiles_lec/<?php echo $row['ProLink']?>"><img src="uploaded_img/<?php echo $row['image'] ?>" class="imgdata" ></a></td>
        <td width="33%" height="100" align="center" id="tablename"><?php echo $row['name'] ?></td>
        <td width="33%" height="100" align="center" id="tabledescrip"> <?php echo $row['info'] ?></p></td>
</tr>

<?php
    }
?>
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
