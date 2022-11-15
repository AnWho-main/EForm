<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>E-Form Page</title>
  </head>
  <body>
      <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">E-Form</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>    
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container"><h2> E-Form:- </h2></div></br>
<form action="{{url('/')}}" method="post">
  @csrf

<div class="container">
<div class="mb-3 row">
    <label for="inputemail" class="col-sm-2 col-form-label">Firstname:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="firstname" id="firstname" value="">
      <span class="text-danger">
        @error('firstname')
                {{$message}}
        @enderror
      </span>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputemail" class="col-sm-2 col-form-label">Lastname:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="lastname" id="lastname" value="">
      <span class="text-danger">
        @error('lastname')
                {{$message}}
        @enderror
      </span>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Email:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" id="email" value = "">
    </div> 
  </div>

  <div class="mb-3 row">
    <label for="inputemail" class="col-sm-2 col-form-label">Phone:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="phone" id="phone" value="">
    </div>
  </div>
    
  <label>Qualifications: </label>
  <select class="qualification mx-5" name="qualification" aria-label="Default select example">
  <option value="High School" selected>High School</option>
  <option value="Intermediate">Intermediate</option>
  <option value="Graduation">Graduation</option>
  <option value="Post Graduation">Post Graduation</option>
</select></p>

<label>Gender: </label>
  <select class="qualification mx-5" name="gender" aria-label="Default select example">
  <option value="Male" selected>Male</option>
  <option value="Female">Female</option>
  <option value="Others">Others</option>
</select></p>


<h5>Cover letter</h2>
<label>Why should you be hired for this role?</label>
<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="letter" name="letter" style="height: 100px" value=""></textarea>
  <!-- <label for="floatingTextarea2">Comments</label> -->
</div></p>

<h5>Availability</h5>
<label>Are you available for a remote job starting immediately? If not, what is the earliest date you can start this job?</label>
<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="availability" name="availability" style="height: 100px" value=""></textarea>
  <!-- <label for="floatingTextarea2">Comments</label> -->
</div></p>

<h5>Assessment</h5>
<label>Q1. Please create a PHP form containing 12 questions comprising of different features like multiple choice, add items to cart, select the add on features, add phone number, summary of information/purchase at the end of the form/final cart value calculation. [We are flexible with the form fields and features you will want to put. We are also ok if you can save this form on your local. Once, this assignment is completed, you can inform us. And we will schedule an interview and you can show it to us at that time.] Please note that our goal is through this assignment, we would like to see your knowledge in PHP.</label>
<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="assessment" name="assessment" style="height: 100px" value=""></textarea>
  <!-- <label for="floatingTextarea2">Comments</label> -->
</div></p>

  <button class="btn btn-primary d-grid gap-2 col-6 mx-auto">Submit</button>
</div></p>
</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>