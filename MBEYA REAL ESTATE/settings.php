<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Real Estate System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
2<body class="bg-light">

<!-- Navigation -->     
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Real Estate System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="./manager/dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="settings.php">Settings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Log out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Main Content -->
<div class="container my-5">
    <h2 class="mb-4">Settings</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">System Name</h5>
            <div class="mb-3">
                <input type="text" class="form-control" id="systemName" placeholder="Enter System Name">
            </div>
            <h5 class="card-title">Short Name</h5>
            <div class="mb-3">
                <input type="text" class="form-control" id="shortName" placeholder="Enter Short Name">
            </div>
            <h5 class="card-title">About Us</h5>
            <div class="mb-3">
                <textarea class="form-control" id="aboutUs" rows="5" placeholder="Write About Us"></textarea>
            </div>
            <button type="submit" name="" class="btn btn-primary  ">Save Changes</button>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
