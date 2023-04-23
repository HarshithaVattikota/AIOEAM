<?php

include ('./db_connect.php');
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $mobile=$_POST['mobile'];
    $position=$_POST['position'];
    $teamname=$_POST['teamname'];
    $country=$_POST['country'];
    $description=$_POST['description'];
    $feedback=$_POST['feedback'];
    $image=$_FILES['file'];
    // echo $username;
    // echo "<br>";
    // echo $mobile;
    // echo "<br>";
    // print_r($image);
    // echo "<br>";


    $imagefilename=$image['name'];
    // print_r($imagefilename);
    // echo "<br>";
    $imagefileerror=$image['error'];
    // print_r($imagefileerror);
    // echo "<br>";
    $imagefiletemp=$image['tmp_name'];
    // print_r($imagefiletemp);
    // echo "<br>";

    $filename_separate=explode('.',$imagefilename);
    // print_r($filename_separate);
    // echo "<br>";
    $file_extension=strtolower($filename_separate[1]);
    // print_r($file_extension);

    $extension=array('jpeg','jpg','png','pdf','mp4','docx');
    if(in_array($file_extension,$extension)){
        $upload_image='images/'.$imagefilename;
        move_uploaded_file($imagefiletemp,$upload_image);
        $sql="insert into `activity` (name,mobile,position,teamname,country,description,feedback,image) values ('$username','$mobile','$position','$teamname','$country','$description','$feedback','$upload_image')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo '<div class="alert alert-success" role="alert">
         <strong>Success</strong> Data Inserted Successfully
          </div>';
          
        }else{
            die(mysqli_error($conn));
        }

    }

}

if(isset($_POST["submit1"]))
{
  header('Location:project_list.php');
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <style>
      img{
        width:100px;
      }
      form{
        margin:50px 0px; padding:0px;
        text-align:center;
        padding-right: 20px;
        justify-content: center;
        display: flex;
      }
    </style>
  </head>
  <body>
    <h1 class="text-center my-4">User Data</h1>
    <div class="container mt-5 d-flex justify-content-center">
    <table class="table table-bordered w-75">
  <thead class="table-dark">
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Username</th>
      <th scope="col">mobile</th>
      <th scope="col">position</th>
      <th scope="col">Team Name</th>
      <th scope="col">Country</th>
      <th scope="col">Description</th>
      <th scope="col">Feedback</th>
      <th scope="col">Uploaded File</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="Select * from `activity`";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $mobile=$row['mobile'];
        $position=$row['position'];
        $teamname=$row['teamname'];
        $country=$row['country'];
        $description=$row['description'];
        $feedback=$row['feedback'];
        $image=$row['image'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$mobile.'</td>
        <td>'.$position.'</td>
        <td>'.$teamname.'</td>
        <td>'.$country.'</td>
        <td>'.$description.'</td>
        <td>'.$feedback.'</td>
        <td>'.$image.'</td>
      </tr>';
    }

    
    ?>
    
    
  </tbody>
  
</table>

    </div>
    <form name="form1" action="" method="post">
      
    

    <div class="card-tools">
				<button><a href="./index.php?page=project_list">Back</a></button>
			</div>
      </form>

  </body>
</html>