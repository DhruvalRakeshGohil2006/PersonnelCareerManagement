<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JobEntry - Job Portal Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Template Stylesheet -->
    <link type="text/css" href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="body-container">
        <!-- Navbar Start -->
        <nav class="nav-menu">
            <a href="logout.php" class="nav-item">Logout</a>  |
            <a href="data-entry-form.php" class="nav-item">Data Entry Form</a> |
            <a href="job-list.html" class="nav-item-active">Job List</a>
        </nav>
        <!-- Navbar End -->

        <!-- Jobs Start -->
        <table class="job-listing-table">
            <th class="job-list-table-th" colspan="2">Job Listing</th>
        </table>
        
        <?php
        // Create connection
        $conn = mysqli_connect("localhost","root","") or die("Couldn't connect to database");
        mysqli_select_db($conn,"PersonnelCareerManagement") or die("Database not connected");

        $sql = "SELECT id, jobTitle, jobLocation, jobType, skillsRequired, postedDate FROM jobposts";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            {
                echo "<tr><td>";
                echo "<table class='job-listing-table'>";
                
                echo "<tr><td>";
                
                echo "<table class='job-item-table'>";
                echo "<tr><td width='40%'><label class='job-title-label'>" . $row["jobTitle"] . "</label></td>";
                echo "<td width='60%'><label class='job-posted-date-label'>Posted Date: " . $row["postedDate"] . "</label></td></tr>";
                echo "<tr><td width='40%' colspan='2'>";
                echo "<label class='job-skills-label'>Skills: " . $row["skillsRequired"] . "</label>";
                echo "</td>";
                echo "</tr><tr><td width='40%'>";
                echo "<label class='job-location-label'>Location: " . $row["jobLocation"] . " </label>";
                echo "<label class='job-type-label'>Type: " . $row["jobType"] . "</label>";
                echo "</td><td width='60%'>";
                echo "<button class='apply-button' onclick='applyJob()'>Apply Now</button>";
                echo "</td></tr></table></td></tr></table></td></tr>";
            }
        } 
        else
        {
            echo "0 results";
        }
            mysqli_close($conn);        
            
        ?>
        <!-- Jobs End -->
        <script>
        function applyJob() {
            alert("Job applied successfully");
        }
        </script>

    </div>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>