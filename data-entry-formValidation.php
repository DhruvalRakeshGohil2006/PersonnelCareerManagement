<?php
    // For training programmes form
    

    if (isset($_POST['program']) && isset($_POST['startdate']) && isset($_POST['enddate']))
    {
        $program = $_POST['program'];
        $startDate = $_POST['startdate'];
        $endDate = $_POST['enddate'];

        $conn = mysqli_connect("localhost","root","") or die("Couldn't connect to database");
        mysqli_select_db($conn,"PersonnelCareerManagement") or die("Database not connected");

        $query = "insert into trainingProgrammes(program, startDate, endDate) values ('{$program}','{$startDate}','{$endDate}')";
        $result = mysqli_query($conn,$query) or die("Incorrect query");

        // echo "<script type='text/javascript'>alert('Data entered successfully');</script>";
        header("Location: data-entry-form.php?message=New Training Program added successfully");
        mysqli_close($conn);
    }
    
    if (isset($_POST['jobtitle']) && isset($_POST['location']) && isset($_POST['jobtype']) && isset($_POST['skillsrequired']) 
        && isset($_POST['posteddate']))
    {
        $jobTitle = $_POST['jobtitle'];
        $jobLocation = $_POST['location'];
        $jobType = $_POST['jobtype'];
        $skillsRequired = $_POST['skillsrequired'];
        $postedDate = $_POST['posteddate'];

        $conn = mysqli_connect("localhost","root","") or die("Couldn't connect to database");
        mysqli_select_db($conn,"PersonnelCareerManagement") or die("Database not connected");

        $query = "insert into jobposts(jobTitle, jobLocation, jobType, skillsRequired, postedDate) values ('{$jobTitle}','{$jobLocation}'
                    ,'{$jobType}','{$skillsRequired}','{$postedDate}')";
        $result = mysqli_query($conn,$query) or die("Incorrect query");

        header("Location: data-entry-form.php?message=New Job Posted successfully");

        mysqli_close($conn);
    }

    // For job posting form
    // if ($_POST['jobtitle'] != null) {
    //     $jobtitle = $_POST['jobtitle'];
    // }
    // $location = $_POST['location'];
    // $jobtype = $_POST['jobtype'];
    // $skillsrequired = $_POST['skillsrequired'];
    // $posteddate = $_POST['posteddate'];


        // echo "Program Name: ".$program."<br>";
        // echo "Start Date: ".$startdate."<br>";
        // echo "End Date: ".$enddate."<br>";

        // echo "Job Title: ".$jobtitle."<br>";
        // echo "Location: ".$joblocation."<br>";
        // echo "Job Type: ".$jobtype."<br>";
        // echo "Skills Required: ".$skillsrequired."<br>";
        // echo "Posted Date: ".$posteddate."<br>";
    
        // if(isset($program)){
        //     echo "Program Name: ".$program."<br>";
        //     echo "Start Date: ".$startdate."<br>";
        //     echo "End Date: ".$enddate."<br>";
        // }

        // if(isset($jobtitle)){
        //     echo "Job Title: ".$jobtitle."<br>";
        //     echo "Location: ".$location."<br>";
        //     echo "Job Type: ".$jobtype."<br>";
        //     echo "Skills Required: ".$skillsrequired."<br>";
        //     echo "Posted Date: ".$posteddate."<br>";
        // }
?>