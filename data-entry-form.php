<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JobEntry - Job Portal Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <script type="text/javascript">
    function showhideform(showFormName,hideFormName1,hideFormName2)
    {
        //alert('helle');
        document.getElementById(showFormName).style.display="block";
        document.getElementById(hideFormName1).style.display="none";
        document.getElementById(hideFormName2).style.display="none";

    }
</script>
</head>

<body>
    <div class="body-container">

        <!-- Navbar Start -->
        <nav class="nav-menu">
            <a href="logout.php" class="nav-item">Logout</a>  |
            <a href="data-entry-form.html" class="nav-item-active">Data Entry Form</a> |
            <a href="job-list.php" class="nav-item">Job List</a>
        </nav>
        <!-- Navbar End -->

        <!-- Contact Start -->
        <div>
                <table class="table-center">
                    <th class="login-table-th" colspan="2">Data Entry Form</th>
                    <tr>
                        <td>
                            <form style="display: block;">
                                <!-- <input type ="radio" id="formtype" name="FormType" checked="true" onchange="showhideform('employeeform','trainingprogrammesform','jobpostingform')">
                                <label for="formtype">Employee</label> -->
                                <input type ="radio" id="formtype" name="FormType" checked="true" onchange="showhideform('trainingprogrammesform','jobpostingform')">
                                <label for="formtype">Training programmes</label>
                                <input type ="radio" id="formtype" name="FormType" onchange="showhideform('jobpostingform','trainingprogrammesform')">
                                <label for="formtype">Job posting</label>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <!-- <form id="employeeform">
                                    <table>
                                        <tr>
                                            <td><label for="name">First Name</label></td>
                                            <td><input type="text" id="name" placeholder="First Name"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="name">Last Name</label></td>
                                            <td><input type="text" id="name" placeholder="Last Name"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="email">Email</label></td>
                                            <td><input type="email" id="email" placeholder="Email"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="subject">Contact Number</label></td>
                                            <td><input type="number" id="subject" placeholder="Contact Number"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="department">Select a Department:</label></td>
                                            <td><select name="department" id="department">
                                                <option value="hr">HR</option>
                                                <option value="it">IT</option>
                                                <option value="finance">Finance</option>
                                                <option value="marketing">Marketing</option>
                                            </select></td>
                                        </tr>
                                    </table>
                            </form> -->
                            <form action="data-entry-formValidation.php" id="trainingprogrammesform" method="post">
                                    <table>
                                        <tr>
                                            <td><label for="program">Program Name</label></td>
                                            <td><input type="text" name="program" id="program" placeholder="Program"></td>
                                        </tr>                                   
                                        <tr>
                                            <td><label for="startdate">Start Date</label></td>
                                            <td><input type="date" name="startdate" id="startdate" placeholder="Start Date"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="enddate">End Date</label></td>
                                            <td><input type="date" name="enddate" id="enddate" placeholder="End Date"></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;" colspan="2">
                                                <button class="btn-primary" type="submit">Save Data</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <?php if(isset($_GET['message'])) { ?>
                                                        <p class="message" style='color:green; font-weight:bold; font-size:14px; text-align: center;'> <?php echo $_GET['message']; ?></p>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    </table>
                            </form>
                            <form action="data-entry-formValidation.php" id="jobpostingform" method="post" style="display: none;">
                                    <table>
                                        <tr>
                                            <td><label for="jobtitle">Job Title</label></td>
                                            <td><input type="text" name="jobtitle" id="jobtitle" placeholder="Job Title" required></td>
                                        </tr>                                                                      
                                        <tr>
                                            <td><label for="location">Location</label></td>
                                            <td><input type="text" name="location" id="location" placeholder="Location" required></td>
                                        </tr>                                   
                                        <tr>
                                            <td><label>Select Job type:</label></td>
                                            <td>
                                                <input type ="radio" id="fulltime" name="jobtype" value="Full time" required>
                                                <label for="jobtype">Full Time</label><br/>
                                                <input type ="radio" id="parttime" name="jobtype" value="Part time"  required>
                                                <label for="jobtype">Part Time</label><br/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="skillrequired">Skills Required</label></td>
                                            <td><input type="text" name="skillsrequired" id="skillrequired" placeholder="Skills Required" required></td>
                                        </tr>
                                        <tr>
                                            <td><label for="sdate">Posted Date</label></td>
                                            <td><input type="date" name="posteddate" id="sdate" placeholder="Start Date" required></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;" colspan="2">
                                                <button class="btn-primary" type="submit">Save Data</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <?php if(isset($_GET['message'])) { ?>
                                                        <p class="message" style='color:green; font-weight:bold; font-size:14px; text-align: center;'> <?php echo $_GET['message']; ?></p>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    </table>
                            </form>
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


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>