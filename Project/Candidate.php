<?php require 'header.php'?>

<div class="content">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Qualification</th>
      <th scope="col">Year Passout</th>
      <th scope="col">Resume</th>
    </tr>
  </thead>
  <tbody>
    <?php  $sql="SELECT * FROM `candidate`";
    //$sql="Select name apply qual, year from candidate";
    $result=mysqli_query($conn,$sql);
    $i=0;
    if($result->num_rows>0){
      while($rows=$result->fetch_assoc()){
        echo '
        <tr>
           <th scope="row">'.++$i.'</th>
           <td>'.$rows['candidate_name'].'</td>
           <td>'.$rows['qual'].'</td>
           <td>'.$rows['year'].'</td>
           <td><i class="fa fa-download" style="color:blue"></i></td>
           </tr>';}}
           else{
            echo"";
           }
           ?>  
</tbody>
</table>
</div>




