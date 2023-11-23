<?php
require_once "../components/db_connection.php";
require_once "../components/navbar.php";
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../style/style.css">
  <title>Register</title>
</head>

<body>
  <?= $navbar ?>

  <div class="container my-5">
    <h1 class="text-center my-4">Register</h1>
    <form>
      <div class="mb-3">

        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Email address">
          <label for="first_name">First Name</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Email address">
          <label for="last_name">Last Name</label>
        </div>
        <div class="form-floating mb-3">
          <input type="date" class="form-control" id="date" name="date" placeholder="Date">
          <label for="date">Date</label>
        </div>

        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password confirm</label>
        </div>
        <div class="form-floating mb-3">
          <input type="file" class="form-control" id="picture" name="picture" placeholder="picture">
          <label for="picture">Picture</label>
        </div>
        <select class="form-select form-select-sm" aria-label="Default select example">
          <option selected value="user">User</option>
          <option value="adm">Admin</option>
        </select>
        <div class="my-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-light">Submit</button>
        <small class="text-secondary ms-4">Already have an account? <a class="link-light" href="login.php">Log in here</a></span>

    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>