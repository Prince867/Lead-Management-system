
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>Edit User</title>
</head>
<body>

<?php
include "connection.php";

    $id = $_GET['id'];
    if (isset($_GET['startDate'])) {
      $startDate = mysqli_real_escape_string($conn, $_GET['startDate']);
  } else {
      // Set a default start date or leave it empty
      $startDate = '';
  }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $full_name = $_POST['status'];
        
        $query = "UPDATE user SET status='$full_name' WHERE id=$id";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header("Location: call.php");
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }

    $query = "SELECT * FROM user WHERE id=$id";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

      
    

?>


<div class="container mt-5">
<h1 class="mt-5"> Status</h1>
  <form style="    padding: 23px;
    background-color: #c0c6ed;
    border-radius: 5px;   " method="POST" >
    <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" name="status" id="exampleFormControlSelect1">
      <option>Not Approve</option>
      <option style="color:green;">Approve</option>
    </select>
  </div>

                <!-- <div class="form-group">
                  <label for="exampleInputEmail1">Full Name</label>
                  <input required type="text"  class="form-control" name="status" value="<?php echo $user['status']; ?>">                
                </div> -->
                
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <!-- <a href="index.php"> <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button></a> -->

              </form>
</div>
 



<!-- <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input required type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input required type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->
          
</body>
</html>
