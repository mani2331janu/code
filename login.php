<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>login</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">
    
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
    
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 
    
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    
        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <style>

            .login-form {
              background-color: #f8f9fa;
              padding: 20px;
              border-radius: 10px;
              text-align: center;
              box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
              position: relative;
          }
              .login-form input[type="text"],
          .login-form input[type="password"] {
              margin: 10px 0;
              padding: 10px;
              width: 300px;
              border-radius: 5px;
              border: 1px solid #ccc;
          }
  
          .login-form input[type="submit"] {
              padding: 10px 20px;
              background-color: #4e54c8;
              color: white;
              border: none;
              border-radius: 5px;
              cursor: pointer;
          }
  
          .login-form input[type="submit"]:hover {
              background-color: #8f94fb;
          }
  
          /* CSS for close button */
          .close-button {
              position: absolute;
              top: 10px;
              right: 10px;
              font-size: 20px;
              cursor: pointer;
          }
          /* CSS for displaying fetched data */
  .fetched-data {
      background-color: #333; /* Dark background color */
      color: #fff; /* Light text color */
      border: 1px solid #fff; /* Light border color */
      border-radius: 5px;
      padding: 10px;
      margin-bottom: 10px;
  }
  
  /* /* .fetched-data table {
      width: 100%;
      border-collapse: collapse;
  }
  
  .fetched-data th, .fetched-data td {
    
      padding: 8px;
      text-align: left;
  }
  
  .fetched-data th {
      background-color: #555; /* Darker background color for table headers */
  
  
  .fetched-data tr:nth-child(even) {
      background-color: #666; 
  } 
  #mmk{
            height: 200px;
          }
          

         
          </style>
    </head>
    
    

<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-white position-relative">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="index.php" class="navbar-brand text-secondary">
                <h1 class="display-4 text-uppercase">MMK INSTITUTE</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0 pr-3 border-right">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="service.php" class="nav-item nav-link">Services</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <a href="login.php" class="nav-item nav-link">Login</a>
                </div>
                <div class="d-none d-lg-flex align-items-center pl-4">
                    <i class="fa fa-2x fa-mobile-alt text-primary mr-3"></i>
                    <div>
                        <h6 class="text-body text-uppercase mb-1"><small>Call Anytime</small></h6>
                        <!-- <h6 class="m-0">+9876543210</h6> -->
                        <h6 class="m-0"><a href="tel:+9876543210">+91 98765 43210</a></h6>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div id="mmk" class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">Welcome</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="index.php">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0 text-white">Here you get your details </h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0"><a class="text-white" href="e.php" id="certificateLink">E-certificate</a></h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <center>

        <div class="login-form-container" id="loginFormContainer">
            <div class="login-form">
                <span class="close-button" id="closeButton">&times;</span>
                <h2>Login</h2>
               
             <form method="post" action="login.php">
                      <input type="text" name="username" placeholder="Username" required><br>
                      <input type="password" name="password" placeholder="Password" required><br>
                       <input type="submit">
                </form>
    
            </div>
        </div>
    
        </center>

        <!-- php -->

         <?php
        // Database connection 
        $db_server = "localhost"; // Database server
        $db_username = "root"; // Database username
        $db_password = ""; // Database password
        $db_name = "mani"; // Database name
    
        // Attempt to establish connection
        $connection = mysqli_connect($db_server, $db_username, $db_password, $db_name);
    
        // Check connection
        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
    
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get username and password from form
            $user_id = $_POST['username'];
            $password = $_POST['password'];
    
            // SQL query
            $query = "SELECT * FROM myy WHERE user_id=? AND password=?";
            
            // Prepare statement
            $stmt = mysqli_prepare($connection, $query);
            
            if ($stmt) {
                // Bind parameters
                mysqli_stmt_bind_param($stmt, "ss", $user_id, $password);
                
                // Execute statement
                if (mysqli_stmt_execute($stmt)) {
                    // Get result
                    $result = mysqli_stmt_get_result($stmt);
                    
                    // Check if result has rows
                    if (mysqli_num_rows($result) == 1) {
                        // Fetch user data
                        $row = mysqli_fetch_assoc($result);
    
                        // Display user data
                        echo "<h2>Students data:</h2>";
                        echo "<table border='2'>";
                        echo "<tr border='2'><th>User ID</th><th>Name</th><th>Email</th><th>Date of Birth</th><th>Contact Number</th><th>Address</th><th>Aadhar Number</th><th>Course</th><th>Duration</th><th>Course Start Date</th><th>Course End Date</th><th>Certificate</th></tr>";
                        echo "<tr>";
                        echo "<td>".$row['user_id']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['date_of_birth']."</td>";
                        echo "<td>".$row['contact_no']."</td>";
                        echo "<td>".$row['address']."</td>";
                        echo "<td>".$row['aadhar_no']."</td>";
                        echo "<td>".$row['course']."</td>";
                        echo "<td>".$row['duration']."</td>";
                        echo "<td>".$row['course_start_date']."</td>";
                        echo "<td>".$row['course_end_date']."</td>";
                        echo "<td>".$row['certificate']."</td>";
                        echo "</tr>";
                        echo "</table>";
    
                        // Hide the login form after successful login
                        echo "<script>document.getElementById('loginFormContainer').style.display = 'none';</script>";
                    } else {
                        echo "<p>No matching user found.</p>";
                    }
                } else {
                    echo "Error executing statement: " . mysqli_stmt_error($stmt);
                }
    
                // Close statement
                mysqli_stmt_close($stmt);
            } else {
                echo "Error preparing statement: " . mysqli_error($connection);
            }
        }
    
        // Close connection
        mysqli_close($connection);
    ?> 
        <!-- php -->


        

        <!-- Footer Start -->
     
    
    
<div class="container-fluid bg-dark text-white-50 py-3 px-sm-3 px-md-5" style="margin-top: 90px;">
    <div class="row pt-5">
        <div class="col-lg-4 col-md-6 mb-5">
            <a href="index.php" class="navbar-brand">
                <h1 class="m-0 mt-n2 text-white display-4">MMK</h1>
            </a>
            <p>Unlock your IT potential with MMK Institute's comprehensive IT courses tailored for success.</p>
            <h6 class="text-uppercase text-white py-2">Follow Us</h6>
            <div class="d-flex justify-content-start">
                <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="https://www.linkedin.com/home"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5">
            <h4 class="text-uppercase text-white mb-4">Get In Touch</h4>
            <p>"Get in touch and embark on your journey to success with MMK Institute's expertly crafted IT courses."</p>
            <p><i class="fa fa-map-marker-alt text-white mr-2"></i>  MMK Institute123 Street,KK Nagar,Chennai <br> <a href="https://www.google.com/maps/@?api=1&map_action=pano&viewpoint=13.0381946,80.2042815&heading=184.41&pitch=5.09">Location</a></p>
            <p><i class="fa fa-phone-alt text-white mr-2"></i><a href="+91987654321">+91 98765 43210</a></p>
            <p><i class="fa fa-envelope text-white mr-2"></i><a href="mailto:mmkkknagar@gmail.com">mmkkknagar@gmail.com</a></p>
            <p><i class="fab fa-whatsapp text-white   mr-2 "></i><a href="https://web.whatsapp.com/">For Enquiry</a></p>
        </div>
        <div class="col-lg-4 col-md-6 mb-5">
            <h4 class="text-uppercase text-white mb-4">Quick Links</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white-50 mb-2" href="index.php"><i class="fa fa-angle-right text-white mr-2"></i>Home</a>
                <a class="text-white-50 mb-2" href="about.php"><i class="fa fa-angle-right text-white mr-2"></i>About Us</a>
                <a class="text-white-50 mb-2" href="service.php"><i class="fa fa-angle-right text-white mr-2"></i>Services</a>
                
                <a class="text-white-50 mb-2" href="contact.php"><i class="fa fa-angle-right text-white mr-2"></i>Contact Us</a>
                <a class="text-white-50 " href="login.php"><i class="fa fa-angle-right text-white mr-2 "></i>Login</a>
            </div>
        </div>
       
    </div>
</div> 


<!-- Footer End-->

    
    <script>

        // Get references to the login form container and the close button
           const loginFormContainer = document.getElementById("loginFormContainer");
           const closeButton = document.getElementById("closeButton");

          // Function to hide the login form when the close button is clicked
          function hideLoginForm() {
                       loginFormContainer.style.display = "none";
                                   }
           //Event listener for the close button
           closeButton.addEventListener("click", hideLoginForm);

           // Function to handle form submission
          function handleFormSubmit(event) {
             event.preventDefault(); // Prevent the form from submitting

           // Check if the password is correct (for demonstration purposes, assuming correct password is "password")
             if (passwordInput.value !== "password") {
                     // If the password is incorrect, display an alert
                     alert("Wrong password! Please try again.");
                      passwordInput.value = ""; // Clear the password field
                      } 
                      else
                       {
                      // If the password is correct, proceed with form submission
                        this.submit();
                         }
              }

              // Add event listener for form submission
              loginForm.addEventListener('submit', handleFormSubmit);


              //cer

              // Get the link element
const certificateLink = document.getElementById('certificateLink');

// Add a click event listener to the link
certificateLink.addEventListener('click', function(event) {
    // Prevent the default link behavior
    event.preventDefault();
    
    // Show the alert box
    alert('E-Certificate link clicked!');
});


</script>

   

   


    
 
        
</body>
</html>