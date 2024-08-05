<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Real Estate System Issue Reporting</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    .container {
      max-width: 500px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
    }
    .container h2 {
      text-align: center;
      margin-bottom: 30px;
    }
    .form-group label {
      font-weight: bold;
    }
    .form-group textarea {
      resize: none;
    }
    .btn-submit {
      width: 100%;
      margin-top: 20px;
    }
    .btn-close {
      width: 100%;
      margin-top: 10px;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Report System Issue</h2>
  <form action="reporting.php" method="POST">
    <div class="form-group">
      <label for="issueType">Issue Type:</label>
      <select class="form-control" id="issueType" required>
        <option value="" selected disabled>Select Issue Type</option>
        <option>Log-in Problem</option>
        <option>Page Not Loading</option>
        <option>Data Inaccuracy</option>
        <option>Feature Not Working</option>
        <option>Other</option>
      </select>
    </div>
    <div class="form-group">
      <label for="description">Issue Description:</label>
      <textarea class="form-control" id="description" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-submit">Submit</button>
    <button type="button" name="" class="btn btn-secondary btn-close" onclick="closeForm()">Close</button>
  </form>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  function closeForm() {
    // You can add additional logic here if needed
    window.close();
  }
</script>

</body>
</html>
