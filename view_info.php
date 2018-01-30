<html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>SQL Injection Example</title>
      <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div class="login-page">
  <div class="form">

<table style="width:100%">
  <?php echo "Welcome "; echo $_GET["username"]; ?>
  <h3>Your details: </h3>
  
  <tr>
    <th>Name:</th>
    <td><?php echo $_GET["username"]; ?></td>
  </tr>
  <tr>
    <th>Email:</th>
    <td><?php echo $_GET["email"]; ?></td>
  </tr>
  <tr>
    <th>Hometown:</th>
    <td><?php echo $_GET["hometown"]; ?></td>
  </tr>
  <tr>
    <th>Phone:</th>
    <td><?php echo $_GET["phoneno"]; ?></td>
  </tr>
</table>

  </div>
</div>
</body>

</html>
?>
