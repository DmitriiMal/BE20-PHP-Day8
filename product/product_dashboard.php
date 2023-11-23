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
  <title>Dashboard Product</title>
</head>

<body>
  <?= $navbar ?>

  <div class="container my-5">
    <h1 class="text-center my-4">Product Dashboard</h1>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>
            <div class='btn-group btn-group-sm me-4' role='group' aria-label='Basic mixed styles example'>
              <a href='../product/details.php' class='btn btn-light'>Details</a>
              <a href='../product/update.php' class='btn btn-outline-light'>Edit</a>
            </div>
            <a href='../product/delete.php' class='btn btn-sm btn-outline-danger'>Delete</a>
          </td>
        </tr>
      </tbody>
    </table>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>