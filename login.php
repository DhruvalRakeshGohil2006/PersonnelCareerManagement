<!-- It contains content of login.html used for frontend development -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Personnel Career Managment</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <form action="loginValidation.php" method="post">
        <div class="body-container">
 
            <!-- About Start -->
                        <div>
                            <table class="table-center">
                                <th class="login-table-th">Login</th>
                                <tr>
                                    <td>
                                        <label for="username">Username:</label>
                                    </td>
                                    <td>
                                        <input type="text" id="username" placeholder="Username" name="Username">                      
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="password">Password:</label>
                                    </td>
                                    <td>
                                        <input type="password" id="password" placeholder="Password" name="Password">                
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right;">
                                        <button class="btn-primary">Login</button>
                                    </td>
                                    <td>
                                        <button class="btn-primary" formaction="register.php">Register Here</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <?php if(isset($_GET['error'])) { ?>
                                                <p class="error" style='color:red; font-weight:bold; font-size:14px; text-align: center;'> <?php echo $_GET['error']; ?></p>
                                        <?php } ?>
                                    </td>
                                </tr>
                            </table>
    
                        </div>
            <!-- About End -->
        </div>
    </form>

    <!-- Footer Start -->
    <div class="footer-copyright">
        &copy; <a href="#">Personnel Career Managment</a>, All Right Reserved. 
        
        Designed By <a href="#">Dhruval Rakesh Gohil</a>
    </div>
    <!-- Footer End -->

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>



