<?php include 'header.php'?>

<div class="content">
<p>
  <!--- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a> -->
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action=""method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id=""name="cname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="pos">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Description</label>
    <textarea name="" id="" cols="30" rows="10" class="form-control"name="jdesc"></textarea>
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Skills Required</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="Text" class="form-control" id="CTC" name="CTC">
</div>
  <button type="submit" class="btn btn-primary"name="Post_job">Submit</button>
</form>
  </div>
</div>
<table class="table">
  <thread>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">Skills</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
  <?php $sql="SELECT * FROM `post_job`";
  $Result =mysqli_query($conn,$sql);
  $i=0;
  if($Result->num_rows>0){
    while($row =$Result->fetch_assoc()){
      echo "
      <tr>
      <td>" . ++$i . "</td>
      <td>" . $row['Company_Name'] . "</td>
      <td>" . $row['Position'] . "</td>
      <td>" . $row['Skills'] . "</td>
      <td>" . $row['CTC'] . "</td>
      </tr>";
    }
  }else{
echo "";
  }
  ?>
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>