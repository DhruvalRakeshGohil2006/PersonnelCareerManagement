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
    <form action="registerValidation.php" method="post">
        <div class="body-container">
            <!-- Contact Start -->
            <div>
                <table class="table-center">
                    <th class="login-table-th" colspan="2">Enter Below details to register.</th>
                    <!-- Firstname and Lastname in register form changing it to Name and Password -->
                        <tr>
                        <td><label for="fname">Firstname</label></td>
                        <td><input type="text" class="form-control" name = "fname" id="fname" placeholder="Firstname" required></td>
                    </tr>
                    <tr>
                        <td><label for="lname">Lastname</label></td>
                        <td><input type="text" class="form-control" name = "lname" id="lname" placeholder="Lastname" required></td>
                    </tr> 
                    <tr>
                        <td><label for="username">Username</label></td>
                        <td><input type="text" class="form-control" name = "username" id="username" placeholder="Username" required></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password</label></td>
                        <td><input type="password" class="form-control" name = "password" id="password" placeholder="Password" required></td>
    
                    </tr>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td><input type="email" class="form-control" name = "email" id="email" placeholder="Email" required></td>
                    </tr>
                    <tr>
                        <td><label for="contact">Contact Number</label></td>
                        <td><input type="number" class="form-control" name = "contact" id="contact" placeholder="Contact Number" required></td>
                    </tr>
                    <tr>
                        <td><label for="department">Select a Department:</label></td>
                        <td><select name="department" id="department" required>
                            <option value="hr">HR</option>
                            <option value="it">IT</option>
                            <option value="finance">Finance</option>
                            <option value="marketing">Marketing</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="register-center">
                            <button class="btn-primary" type="submit">Register</button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="login.php" style='font-size:14px; text-align: center;'>Already have an account? Login here</a>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- Contact End -->
    
    
            <!-- Footer Start -->
            <div class="footer-copyright">
                &copy; <a href="#">Personnel Career Managment</a>, All Right Reserved. 
                
                Designed By <a href="#">Dhruval Rakesh Gohil</a>
            </div>
            <!-- Footer End -->
        </div>
    </form>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>