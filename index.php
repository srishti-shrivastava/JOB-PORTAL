<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Dashboard</title>

</head>

<body>

  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        </div>
      </div>
    </nav>

    <div class="sidebar">
      <a class="active" href="#home">Jobs</a>
      <a href="#jobs.php">Candidates Applied</a>
      <a href="#contact">Contact</a>
      <a href="#about">About</a>
    </div>

    <div class="content">
      <p>
        <!-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a> -->
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Post Job
        </button>
      </p>
      <div class="collapse" id="collapseExample">
        <div class="card card-body">
          <form action="" method="POST">
            <div class="mb-3">
              <label for="Company Name" class="form-label">Comapny Name</label>
              <input type="text" class="form-control" id="" name="cname" >
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPosition" class="form-label">Position</label>
              <input type="text" class="form-control" id="exampleInputPosition" name="pos">
            </div>
            <div class="mb-3">
              <label for="JobDesc" class="form-label">Job Description</label>
              <textarea type="text" class="form-control" id="JobDesc" rows="10" name="Jdesc"></textarea>
            </div>
            <div class="mb-3">
                            <label for="Skill required" class="form-label">Skill required</label>
                            <input type="text" class="form-control" id="Skill required" name="skills">
                        </div>
            <div class="mb-3">
              <label for="CTC" class="form-label">CTC</label>
              <input type="text" class="form-control" id="CTC" name="CTC">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
        </div>
      </div>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Comapny Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>TCS</td>
      <td>Software Development</td>
      <td>8LPA</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Amazon</td>
      <td>Web Developer</td>
      <td>15LPA</td>
    </tr>
   
  </tbody>
</table>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>