<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">

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

  <title>Dashboard Sidebar Menu</title>

</head>

<body>

  <div class="home">
    <nav class=" ml-3 navbar navbar-light bg-light">
      <a class="navbar-brand text-capitalize" href="#">
        <!-- <img src="logo.png" width="30" height="30" alt=""> Dashboard -->
        <h4>
         Admin Dashboard
        </h4>
      </a>
      <div class="font-weight-bold ">
        <a href="logout.php">
          <i class='bx bx-log-out icon'></i>
          <span class="text nav-text">Logout</span>
        </a>
      </div>
    </nav>

    <!-- large button -->

    <!-- <button type="button" data-toggle="modal" data-target="#exampleModal" class=" btn btn-outline-primary btn-lg float-right m-5">Add Member</button> -->
    <div class="d-flex float-right m-5">

      <form class="form-inline" method="POST">
        <div class="form-group mx-sm-3 mb-2">
          <label for="inputPassword2" class="sr-only">Password</label>
          <input type="date" class="form-control" id="startDate" name="startDate" required><br><br>
        </div>
        <div class="form-group mx-sm-3 mb-2">
          <label for="inputPassword2" class="sr-only">Password</label>
          <input type="date" class="form-control" id="endDate" name="endDate" required><br><br>
        </div>
        <button type="submit" name="submit" class="btn btn-primary mb-2">Search</button>
      </form>

    </div>


    <!-- data -->
    <div class="jumbotron jumbotron-fluid bg-light m-3 rounded">
      <h5 class="m-5 ">Profile Dashboard </h5>

      <div class="container">

        <!-- member counting -->
        <?php
include "connection.php";
error_reporting(E_ERROR | E_PARSE);

// Query to get count
$startDate = mysqli_real_escape_string($conn, $_POST['startDate']);
$endDate = mysqli_real_escape_string($conn, $_POST['endDate']);

// Convert input date formats to match the database format
$startDate = date('Y-m-d', strtotime($startDate));
$endDate = date('Y-m-d', strtotime($endDate));
if (isset($_POST['submit'])){
  $query = "SELECT COUNT(*) as count FROM user WHERE registration_date BETWEEN '$startDate' AND '$endDate';";
  }else{
    $currentDate = date('Y-m-d');
    $query = "SELECT COUNT(*) as count FROM user WHERE registration_date = '$currentDate';";
  }
// $sql = "SELECT COUNT(*) as count FROM user  WHERE registration_date BETWEEN '$startDate' AND '$endDate';";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$count = $row["count"];


// Close connection
$conn->close();
?>

        <!DOCTYPE html>
        <html>

        <head>
          <title>Data Count Example</title>
        </head>

        <body>
        <p class="d-inline">Total Members:
    <?php echo $count; ?>
    <?php
    if (isset($_POST['submit'])) {
        echo " ( <span class='font-weight-bold'>" . $startDate . "</span> to <span class='font-weight-bold'>" . $endDate . "</span> )";
    } else {
        echo " ( <span class='font-weight-bold'>" . $currentDate . "</span> )";
    }
    ?>
</p>




        </body>

        </html>
<!-- data showing -->
        <?php
include "connection.php";
$startDate = mysqli_real_escape_string($conn, $_POST['startDate']);
$endDate = mysqli_real_escape_string($conn, $_POST['endDate']);

// Convert input date formats to match the database format
$startDate = date('Y-m-d', strtotime($startDate));
$endDate = date('Y-m-d', strtotime($endDate));
if (isset($_POST['submit'])){
$query = "SELECT * FROM user WHERE registration_date BETWEEN '$startDate' AND '$endDate';";
}else{
  $currentDate = date('Y-m-d');
  $query = "SELECT * FROM user WHERE registration_date = '$currentDate';";
}

$result = mysqli_query($conn, $query);

?>

        <table class="table" border="1">
          <tr class="alert alert-info">

            <th>Brand Name</th>
            <th>Phone No.</th>
            <th>Address</th>
            <th>status</th>
            <!-- <th>Join Date</th>
            <th>Notice Date</th>
            <th>Father name</th>
            <th>Edit</th>
            <th>Delete</th> -->
          </tr>

          <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
           
            echo "<td>" . $row['full_name'] . "</td>";
            echo "<td>" . $row['phone_no'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            // echo "<td>" . $row['join_date'] . "</td>";
           
        }
        ?>
          <?php
mysqli_close($conn);
?>
        </table>

      </div>
    </div>

  </div>
  <!-- mondal -->

  <!-- $full_name = $_POST['full_name'];
    $phone_no = $_POST['phone_no'];
    $address = $_POST['address'];
    $join_date = $_POST['join_date'];
    $age = $_POST['age']; -->


  <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add  Member</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
          
           
              <form method="POST" action="register.php">
                <div class="form-group">
                  <label for="exampleInputEmail1">Full Name</label>
                  <input required type="text"   name="full_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone no.</label>
                  <input required type="number"  name="phone_no" name="address" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input required type="text" class="form-control"  name="address"  id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">join Date</label>
                    <input required type="date" name="join_date" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Father Name</label>
                    <input required type="text" class="form-control" name="age" id="exampleInputPassword1">
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </form>

            </div>
            
          </div>
        </div>
      </div> -->

  <!-- edit -->
  <!-- <form action="" method="POST">
        <label for="startDate">Start Date:</label>
        <input type="date" id="startDate" name="startDate" required><br><br>
        
        <label for="endDate">End Date:</label>
        <input type="date" id="endDate" name="endDate" required><br><br>
        
        <input type="submit" value="Search">
    </form> -->

  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
</body>

</html>

