<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/basic.css">
    <title>Library</title>
    <style>
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 90vh;">
        <div class="container bg-light dil " style="max-width: 965px;">
            <div class="d-flex container my-4">
                <div class="imgs mx-2 d-none d-md-block">
                    <div class="flex marg text-center flex-col justify-between">
                        <div>
                            <h2 class="text-center"> Local Admin</h2>
                            <img style="width: 261px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBhkIkn5gzYqIf-7Fl2q5GsMtxkN49tXYvSg&usqp=CAU">
                            <h3 class="text-center">Login to Continue</h3>
                            <p class="px-4">Login to your account with using your Username and password.</p>
                        </div>
                    </div>
                </div>
                <div class="contact mt-3 mx-2 col-12 col-md-6">
                    <form id="canvas" class="my-4" method="post">
                        <div class="mb-3">
                            <label for="Email" class="form-label fw-bold mx-2 text-secondary">UserName</label>
                            <input type="text" name="username" required class="form-control nero" placeholder="Enter your Username" id="usernameInput" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold text-secondary mx-2 ">Password</label>
                            <input type="password" class="form-control nero" name="password" placeholder="Enter your Password" id="password" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button id="submitbtn" class="btn btn-danger snero" type="submit">Login</button>
                        </div>
                    </form>
                    <hr>
                    <div class="signup text-center text-bold">
                        <a class="btn btn-success btn-lg" type="submit" href="registration.php">Create new User</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Get the button element by its id
        var button = document.getElementById("submitbtn");

        // Get the input element by its id
        var usernameInput = document.getElementById("usernameInput");

        // Add a click event listener to the button
        button.addEventListener("click", function(event) {
            // Prevent the form from submitting
            event.preventDefault();

            // Get the value of the input field
            var username = usernameInput.value;

            // Check different conditions based on the username
            if (username === "admin") {
                window.location.href = "admin.php";
            } else if (username === "lead") {
                window.location.href = "lead.php";
            } else if (username === "call") {
                window.location.href = "call.php";
            } else if (username === "call2") {
                window.location.href = "call2.php";
            } else {
                alert("Invalid username. Please try again.");
            }
        });
    </script>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPh
