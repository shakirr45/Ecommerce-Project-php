<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Custom Navigation Bar Styles */
        .navbar {
            background-color: skyblue;
            padding: 15px 0;
        }

        .navbar-brand {
            color: #ffffff;
            font-weight: bold;
            font-size: 24px;
        }

        .navbar-nav .nav-item {
            margin-right: 20px;
        }

        .navbar-nav .nav-link {
            color: #ffffff;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #007bff;
        }

        /* Additional Custom Styles */
        .container-fluid {
            padding: 0;
        }

        /* Centering the navigation items */
        .navbar-nav {
            justify-content: center;
        }

        /* Adjusting the container width */
        .container-fluid {
            max-width: 1200px;
        }
        .container-fluid {
            padding: 0;
        }

        /* Centering the navigation items (as in previous code) */

        /* Adjusting the container width (as in previous code) */

        /* Footer Styles */
        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }
    </style>

</head>
<body>
    <!-- Your HTML content here -->

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">Online Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="fst.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>



  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
