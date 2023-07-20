<?php

include($_SERVER['DOCUMENT_ROOT'] . '/ARMY-WEBSITE-PROJECT/dashboard/common/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/ARMY-WEBSITE-PROJECT/dashboard/common/sidebar.php') ?>


<section id="interface">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/ARMY-WEBSITE-PROJECT/dashboard/common/top-menu.php') ?>



    <div class="values">

        <div class="val-box">
        <a href="searchstudent.php" >
            <i class="fas fa-users" ></i>
            <div> <span>Students</span></a> </div>
        </div>


        <div class="val-box">
            <a href="searchteacher.php"> 
            <i class="fas fa-user"></i>
            <div> <span>Teacher</span> </a> </div>
        </div>


        <div class="val-box">
        <a href="searchcourse.php">
            <i class="fas fa-book"></i>
            <div> <span>Course</span></a> </div>
        </div>

        <div class="val-box">
        <a href="searchfeedback.php">
            <i class="fas fa-sms"></i>
            <div> <span>Feedback</span></a> </div>

        </div>
</div>
</section>







<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>