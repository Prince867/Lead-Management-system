<?php
include "connection.php";

$startDate = mysqli_real_escape_string($conn, $_POST['selectedDate']);
$startDate = date('Y-m-d', strtotime($startDate));

$query = "SELECT * FROM user WHERE registration_date = '$startDate';";

$result = mysqli_query($conn, $query);

?>

        <table class="table" border="1">
          <tr class="alert alert-info">

            <th>Brand Name</th>
            <th>Phone No.</th>
            <th>Address</th>
             <th>Call</th>
             <th>Status</th>

            <!-- <th>Join Date</th>
            <th>Notice Date</th>
            <th>Father name</th>
            <th>Edit</th>
            <th>Delete</th> -->
          </tr>

          <?php
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>{$row['full_name']}</td>";
    echo "<td><a href='tel:+91-{$row['id']}' class='btn btn-outline-primary btn-sm'>Call</a></td>";
    // echo "<td>{$row['address']}</td>";
    echo "<td><a href='edit.php?id={$row['id']}'<button  type='button' class='btn btn-outline-primary btn-sm'>Status</button.</td>";
    echo "<td>{$row['status']}</td>";    echo "</tr>";
}
?>

          <?php
mysqli_close($conn);
?>
<form class="form-inline" method="POST">
  <div class="form-group mx-sm-3 mb-2">
SELECT DATE:
</div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Password</label>
    <input type="date" class="form-control" id="static-date" name="selectedDate"  required><br><br>
  </div>
  <button type="submit" name="submit" class="btn btn-primary mb-2">Search</button>
</form>
<script>
        const dateInput = document.getElementById('static-date');
        
        // Check if there's a stored date in localStorage
        const storedDate = localStorage.getItem('selectedDate');
        if (storedDate) {
            dateInput.value = storedDate;
        }

        // Add an event listener to update localStorage when the date changes
        dateInput.addEventListener('change', function() {
            localStorage.setItem('selectedDate', dateInput.value);
        });
    </script>
    