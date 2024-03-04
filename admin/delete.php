<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete</title>
</head>

<body>
  <?php
  include('config.php');
  $i = $_GET['i'];

  $query = "DELETE FROM info WHERE id='$i' ";
  $query_run = mysqli_query($conn, $query);

  if ($query_run) {
    echo "Your Record Has Been Deleted";
    echo"<script>window.location.href='view.php'</script>";
    ?>
    <!-- // <meta http-equiv="refresh" content="0; url=http://localhost/mini/table.php"> -->

    <?php
  } else {
    echo "not deleted";
  }

  ?>

</body>

</html>