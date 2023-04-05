<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Style>
       .career{
        background-image: url("images.jpeg");
        background-size: cover;
        padding:80px;
        color:#fff;
       }
        .navbar {
    overflow: hidden;
    color: #fff;
    margin-left:fixed;
    padding:10px;
    margin-top: 1cm;
     margin-left: 1cm;
    margin-right: 27cm;
    margin-bottom: 1cm;
    
  }
h2{
    text-align: center;
}
h4{
    text-align: center;
}
.main-container .job {
    width: 30%;
    height: 355px;
    float: left;
    border: 2px solid;
    padding: 20px 20px;
    margin: 20px 20px;
    background: #037;
    color: #fff;
    text-align: center;
    border-radius: 10px;
    box-shadow:10px 10px 8px 10px #888888;
}
.main-container {
    width: 100%;
    margin: 0 auto;
    /* text-align: center; */
}
    </Style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Career</title>
</head>
<body>
<div class="career">
    <h1>Job Portal</h1>
    <p>Best Jobs available matching your skills</p>
</div>
<br>
<div class="main-container">
<?php
  $sql="SELECT id,Company_Name,position,Jdesc,CTC,skills from post_job";
  $result=mysqli_query($conn,$sql);
  if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
      $id = $rows["id"];
    echo '<div class="job1 job">
      <div class="mb-3">
      <h2><b> '.$rows['Company_Name'].'</b> </h2>
          <h4> '.$rows['position'].' </h4>
        <p> '.$rows['Jdesc'].'</p>
        <p><b> Skills Required</b> : '.$rows['skills'].'</p>
        <p><b> CTC:</b> '.$rows['CTC'].'</p>
        <a href="form.php?id='.$id.'" class="btn btn-primary">Apply </a>
        </div>
      </div>';
    }
  }
else{
  echo "";
}
?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>