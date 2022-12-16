<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- Font Awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Data Tables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css" />

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php $_SERVER['PHP_SELF']; ?>">CRUD</a>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 fs-4 fw-bolder text-primary mt-3">
        All Users In Database
      </div>
      <div class="col-lg-6">
        <button class="btn btn-primary mt-3 ms-2 float-end" data-bs-toggle="modal" data-bs-target="#add-modal">
          <i class="fa fa-user-plus fa-lg m-1"></i>Add New User
        </button>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-lg-12">
        <div class="table-responsive" id="show-user">
        </div>
      </div>
    </div>
  </div>

  <!-- Add New User Modal -->
  <div class="modal" id="add-modal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title fw-bolder">Add New User</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form action="" method="post" id="form-data">
            <div class="form-group m-3">
              <label for="fname" class="form-label">First Name:</label>
              <input type="text" class="form-control" name="fname" placeholder="First Name" required>
            </div>
            <div class="form-group m-3">
              <label for="lname" class="form-label">Last Name:</label>
              <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
            </div>
            <div class="form-group m-3">
              <label for="email" class="form-label">Email address:</label>
              <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="form-group m-3">
              <label for="phone" class="form-label">Mobile Phone:</label>
              <input type="tel" class="form-control" maxlength="10" name="phone" placeholder="Phone" required>
            </div>
            <div class="form-group m-3 d-grid">
              <input type="submit" class="btn btn-primary btn-block" name="insert" id="insert" value="Submit"></input>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <!-- Edit User Modal -->
  <div class="modal" id="edit-modal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title fw-bolder">Add New User</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form action="" method="post" id="edit-form-data">
            <input type="hidden" name="edit-id" id="edit-id">
            <div class="form-group m-3">
              <label for="fname" class="form-label">First Name:</label>
              <input type="text" class="form-control" name="fname" id="fname" required>
            </div>
            <div class="form-group m-3">
              <label for="lname" class="form-label">Last Name:</label>
              <input type="text" class="form-control" name="lname" id="lname" required>
            </div>
            <div class="form-group m-3">
              <label for="email" class="form-label">Email address:</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group m-3">
              <label for="phone" class="form-label">Mobile Phone:</label>
              <input type="tel" class="form-control" maxlength="10" name="phone" id="phone" required>
            </div>
            <div class="form-group m-3 d-grid">
              <input type="submit" class="btn btn-success btn-block" name="edit" id="edit" value="Edit User"></input>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <!-- Bootsrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
  <!-- Data Tables -->
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.js"></script>
  <!-- Sweet Alert -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- AJAX script -->
  <script src="main.js"></script>
</body>

</html>