<?php
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    $conn = mysqli_connect("localhost","root","") or die("Couldn't connect to database");
    mysqli_select_db($conn,"PersonnelCareerManagement") or die("Database not connected");

    try 
    {
        $query = "select password from emplogin where username = '".$username."'";
        $result = mysqli_query($conn,$query) or die("Incorrect query");
        // $query = "SELECT password FROM emplogin WHERE name = ?";
        // $stmt = $conn->prepare($query);
        // $stmt->bind_param("s", $username);
        // $stmt->execute();
        // $result = $stmt->get_result();

        if ($result->num_rows > 0) 
        {
            $row = $result->fetch_assoc();
            $hashed_password = password_hash($row['password'], PASSWORD_DEFAULT);
            
            if (password_verify($password, $hashed_password)) 
            {                
                session_start();

                $_SESSION = array();

                if (ini_get("session.use_cookies")) {
                    $params = session_get_cookie_params();
                    setcookie(session_name(), '', time() - 42000,
                        $params["path"], $params["domain"],
                        $params["secure"], $params["httponly"]
                    );
                }
                header("Location: data-entry-form.php");
            } 
            else 
            {
                header("Location: login.php?error=Invalid password");
            }
        } 
        else 
        {
            header("Location: login.php?error=Username does not exist");

        }
    } 
    catch (Throwable $th) 
    {
        echo "Error: " . $th->getMessage();
    }

    mysqli_close($conn);
?>