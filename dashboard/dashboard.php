<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>

    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    <section id="menu">
        <div class="logo">
            <img src="images/logo.png" alt="">
            <h2>Admin Panel</h2>
        </div>
        <div class="items">
            <li><i class="fas fa-chart-pie"></i><a href="dashboard.php">Dashboard</a></li>
            <li><i class="fas fa-users"></i><a href="../dashboard/student/studentdata.php">Student</a></li>
            <li><i class="fas fa-user"></i></i> <a href="../dashboard/teacher/teacherdata.php">Teacher</a></li>
            <li><i class="fas fa-book"></i><a href="../dashboard/course/coursedata.php">Course</a></li>
            <li><i class="fas fa-sms"></i><a href="../dashboard/user feedback/userfeedback.php">Feedback</a></li>
            <li><i class="fas fa-table"></i><a href="#">Schedule</a></li>
        </div>

        <!-- onclick="showteacher()"></i><a href="#"> -->
    </section>

    <section id="interface">
        <div class="nav">
            <!-- <div class="n1"> -->
                <!-- <div class="search">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="serach">
            </div> -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="search_btn" class="form-control" placeholder="What you want ?">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary" name="search_btn" value="search">search</button>
                    </div>
                </div>
            <!-- </div> -->
            <div class="head">
                <h3>Army Training Academy</h3>
            </div>
            <div class="profile">

                <i class="bi bi-bell"></i>
                <a href="logout.php"><i class="bi bi-box-arrow-right"></i></a>
                <a href="register_form.php"><img src="images/bhishma.jpg"></a>
            </div>
        </div>
        <div class="values">
            <div class="val-box">
                <i class="fas fa-users"></i>
                <div>
                    <h3>425</h3>
                    <span>Students</span>
                </div>
            </div>

            <div class="val-box">
                <i class="fas fa-user"></i>
                <div>
                    <h3>13</h3>
                    <span>Teacher</span>
                </div>
            </div>
            <div class="val-box">
                <i class="fas fa-book"></i>
                <div>
                    <h3>13</h3>
                    <span>Course</span>
                </div>
            </div>
            <div class="val-box">
                <i class="fas fa-table"></i>
                <div>
                    <h3>15</h3>
                    <span>Schedule</span>
                </div>

            </div>
            <div id="teacher" style="visibility:hidden;">
                <?php
                include('teacher/teacherdata.php')
                    ?>
            </div>
        </div>
    </section>
    <section>

    
    </section>

    <script>
        let x = document.getElementById('teacher');
        function showteacher() {
            x.style.visibility('visible')
        }
    </script>
</body>

</html>