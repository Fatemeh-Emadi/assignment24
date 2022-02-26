<?php
include "database.php";
$x = mysqli_query($connection, "SELECT * FROM messages");


?>


<html>

<head>

  <link type="text/css" rel="stylesheet" href="css/style.css">
  <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

  <div class="container bg-dark" style="height: 100%;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Happy Family</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Chat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Media</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Links</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Files</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Music</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Voice</a>
            </li>
            
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="col-12 mt-5">
      <?php foreach ($x as $payam) : ?>
        <ol class="list-group ">
          <li class="list-group-item d-flex justify-content-between align-items-start">

            <div class="ms-2 me-auto">

              <div class="fw-bold"><?php echo $payam["name"]; ?>

              </div>
              <?php echo $payam["text"]; ?>
            </div>
            <span class="badge bg-primary rounded-pill"><?php echo $payam["time"]; ?></span>
          </li>


        <?php endforeach; ?>
        </ol>
    </div>
    <!-- Button trigger modal -->
    <button type="button" id="btn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      +
    </button>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">new message</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="new_message.php" method="post">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
              </div>

              <button type="submit" class="btn btn-primary">send</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>


  </div>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="js\bootstrap.js"></script>
</body>

</html>