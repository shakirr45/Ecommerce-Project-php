<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  
<style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>




</head>
<body>
    <div class="container">
        <form id="registrationForm">
  <a href="fst.php"> <button type="button" class="btn btn-primary">Back</button></a>

            <!-- Your form fields here -->
            <!-- ... -->
             <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" name="fast_name">
            </div>
              <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" name="last_name">
            </div>
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="user_mail">
            </div>
              <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" class="form-control" name="user_phone">
            </div>
              <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" class="form-control" name="user_address">
            </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="user_pass">
            </div>
            <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="user_confirm_pass">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('registrationForm');

            form.addEventListener('submit', function (event) {
                event.preventDefault(); // Prevent the default form submission

                // Get form inputs
                const firstName = form.fast_name.value;
                const lastName = form.last_name.value;
                const email = form.user_mail.value;
                const phone = form.user_phone.value;
                const address = form.user_address.value;
                const password = form.user_pass.value;
                const confirmPassword = form.user_confirm_pass.value;

                // Front-end validation
                if (!firstName || !lastName || !email || !phone || !address || !password || !confirmPassword) {
                    alert('All fields are required.');
                    return;
                }

                if (password !== confirmPassword) {
                    alert('Passwords do not match.');
                    return;
                }

                // Create a data object to send to the server
                const data = {
                    fast_name: firstName,
                    last_name: lastName,
                    user_mail: email,
                    user_phone: phone,
                    user_address: address,
                    user_pass: password,
                    user_confirm_pass: confirmPassword
                };

                // Send data to the server using AJAX
                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'process_registration.php', true);
                xhr.setRequestHeader('Content-Type', 'application/json');
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {

                            alert('User registered successfully!');
                            window.location = 'login.php';
                            form.reset();
                        } else {
                            alert('Error registering user.');
                        }
                    }
                };
                xhr.send(JSON.stringify(data));
            });
        });
    </script>

<footer class="footer mt-auto py-3 bg-light">
<div class="container text-center">
<span class="text-muted">&copy; <p>Enjoy Shopping!!!</p> 2023 Online Shopping System. All rights reserved.</span>
</div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>