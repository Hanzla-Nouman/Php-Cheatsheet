<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "hanzla_db";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error() . "<br>");
  } else {
      echo "Connected successfully <br>";
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $email = $_POST['email'];
      $name = $_POST['name'];
      $desc = $_POST['desc'];
      $sqlForTable = "INSERT INTO `contact` (`sno`, `name`, `email`, `description`, `date`) VALUES (NULL, '$name', '$email', '$desc', current_timestamp());";
      if (mysqli_query($conn, $sqlForTable)) {
          echo "Data inserted successfully <br>";
      } else {
          echo "Error in inserting data: " . mysqli_error($conn) . "<br>";
      }
  }
  ?>

  <div class="container mt-4">
    <form action="/php-cheatsheet/form.php" method="post">
      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" name="name" class="form-control" id="name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="desc" class="form-label">Description</label>
        <textarea name="desc" class="form-control" id="desc"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
    $sqlForData = "SELECT * FROM `contact`";
    $res = mysqli_query($conn, $sqlForData);
    $num = mysqli_num_rows($res);
    if ($num > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            echo "Email: " . $row['email'] . "  Name: " . $row['name']."<br>";
        }
    } else {
        echo "No data found.<br>";
    }
    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
