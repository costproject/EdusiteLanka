  
<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

    <!-- custom css file link  -->
    <style>

       .container .profile img{
            border: 2px solid black;
            height: 75px;
            width: 75px;
            border-radius: 50%;
        }
        .container .profile .namefromdb{
            


        }
        .container .profile table{
          
          width: 100%;

        }
        .spacer1{
         width: 10%;

        }
        .spacer2{
            width:70%;
        }
        .spacer3{
           width: 10%;
        }
        .spacer4{
            width: 10%;
        }

 .container .profile .btn{
   text-decoration: none;
   color: black;

 }
 .container .profile .delete-btn{
   text-decoration: none;
   color: black;

 }
 .container .profile .delete-btn:hover{
 background-color: red;



 }
    </style>

</head>
<body>
   

   
  
      
      
 
<div class="container">

   <div class="profile">
 <table border="0" >
    <tr>
        <td class="spacer1"><?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
        
        <p class="namefromdb"><?php echo $fetch['name']; ?></p>
        </td>
        <td class="spacer2"></td>
            <td class="spacer3"><a href="update_profile.php" class="btn">PROFILE</a></td>
                <td class="spacer4"><a href="home.php?logout=<?php echo $user_id; ?>" class="delete-btn">LOGOUT</a></td>




    </tr>

</table>

   </div>

</div>



















</body>
</html>