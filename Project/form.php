<?php require 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
 <title>Candidate</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <style>
       body{
        margin: 0px;
        padding: 0px;
        background-image:url('5.jpg');
        background-size: cover;
      }
      form{
        background-color: #fff;
        margin-top: 6em;
        margin-left: 30em;
        margin-right: 10em;
        padding: 40px;
        box-shadow: 10px 10px 8px 10px #888888;
      }
      </style>
</head>
<body>
<div class=" modal-body">

          <form method="POST">
            <input type="hidden" name="job_id" value="<?php echo @$_REQUEST['id']; ?>">
          <div class="mb-3">
          <p><h3><b><u>Job Application </u></b></h3></p>
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name"> 
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual"> 
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year passout</label>
            <input type="text" class="form-control" name="year"> 
          </div>
          <div class="modal-footer">
            <a href="<?php echo @$_SERVER['HTTP_REFERER']; ?>" class="btn btn-secondary">Back</a>
            <button type="submit" name="submit_job" class="btn btn-primary">Apply</button>
          </div>
          </form>
          </div>  
</body>
</html>
