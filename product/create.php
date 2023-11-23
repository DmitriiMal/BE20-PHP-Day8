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
  <title>Create</title>
</head>

<body>
  <?= $navbar ?>

  <div class="container my-5">
    <h1 class="text-center my-4">Create</h1>
    <form>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="name" name="name" placeholder="Nane">
        <label for="name">Name</label>
      </div>
      <div class="form-floating mb-3">
        <input type="number" class="form-control" id="price" name="price" placeholder="Price">
        <label for="price">Price</label>
      </div>
      <div class="form-floating mb-3">
        <input type="date" class="form-control" id="date" name="date" placeholder="Date">
        <label for="date">Date</label>
      </div>

      <div class="form-floating mb-3">
        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
          <option selected value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        <label for="floatingSelect">Choose...</label>
      </div>

      <div class="form-floating mb-3">
        <input type="file" class="form-control" id="picture" name="picture" placeholder="picture">
        <label for="picture">Picture</label>
      </div>
      <button type="submit" class="btn btn-light">Submit</button>
    </form>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>