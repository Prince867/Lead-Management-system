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
         Data Sheet  
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
    <!-- <div class="d-flex float-right m-5">

      <form class="form-inline">
        <div class="form-group mx-sm-3 mb-2">
          <label for="inputPassword2" class="sr-only">Password</label>
          <input type="date" class="form-control" id="inputPassword2" placeholder="Password">
        </div>
        <div class="form-group mx-sm-3 mb-2">
          <label for="inputPassword2" class="sr-only">Password</label>
          <input type="date" class="form-control" id="inputPassword2" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Search</button>
      </form>

    </div> -->


    <!-- data -->
    <div class="jumbotron jumbotron-fluid bg-light m-3 rounded">
      <h5 class="m-5 ">Profile Dashboard </h5>

      <div class="container">



      <form class="form-inline" action="post.php" method="Post">
        <div class="form-group mx-sm-3 mb-2">
          <label for="inputPassword2" class="sr-only">Brand Name</label>
          <input type="text" name="brand" class="form-control" id="inputPassword2" placeholder="Brand Name">
        </div>
        <div class="form-group mx-sm-3 mb-2">
          <label for="inputPassword2" class="sr-only">Phone no.</label>
          <input type="text" name="phone" class="form-control" id="inputPassword2" placeholder="Phone no.">
        </div>
        <div class="form-group mx-sm-3 mb-2">
          <label for="inputPassword2" class="sr-only"> Full Address</label>
          <input type="text" name="address" class="form-control " id="inputPassword2" placeholder=" Full Address">
        </div>
        <button type="submit" name ="submit" class="btn btn-primary mb-2">ADD</button>
      </form>

        <!-- member counting -->
        <?php
include "connection.php";

// Query to get count
// $sql = "SELECT COUNT(*) as count FROM user";
$currentDate = date('Y-m-d');
$query = "SELECT COUNT(*) as count FROM user WHERE registration_date = '$currentDate';";
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

          <p>Total :
            <?php echo $count; ?>
          </p>
        </body>

        </html>
<!-- end no counting -->
        <?php
include "connection.php";

// $query = "SELECT * FROM user";
$currentDate = date('Y-m-d');
$query = "SELECT * FROM user WHERE registration_date = '$currentDate';";
$result = mysqli_query($conn, $query);
// condition date 
// $endOfNextMonth = strtotime('next month');
// $today = strtotime(date('Y-m-d'));
?>

        <table class="table" border="1">
          <tr class="alert alert-info">

            <th>Brand Name</th>
            <th>Phone No.</th>
            <th>Address</th>
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
            // echo "<td>" . $row['join_date'] . "</td>";
            // $joinDate = strtotime($row['join_date']);
            // $remainingDays = max(0, intval(($endOfNextMonth - $joinDate) / (60 * 60 * 24)+1));
            
            // // echo "$remainingDays";
            // echo "<td>" . $row['join_date'] . "</td>";
            // echo "<td>";
    
            // if ($joinDate > $today) {
            //     if ($remainingDays < 1 ) {
            //         echo "<span style='color: red;'>Expired date</span>";
            //     } else {
            //         echo "$remainingDays days left";
            //     }
            // } else {
            //     echo "Expired";
            // }
            
            // echo "<td>" . $row['age'] . "</td>";
            // echo "<td><a href='edit.php?id={$row['id']}'<button  type='button' class='btn btn-outline-primary btn-sm'>Edit</button.</td>";
            // echo "<td><a href='delete.php?id={$row['id']}'><button type='button' class='btn btn-outline-danger btn-sm'>Delete</button></a></td>";
            // echo "</tr>";
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


  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
</body>

</html>