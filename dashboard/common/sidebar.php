<section id="menu" >
        <div class="logo">
           <a href="<?php echo $rootUrl.'/dashboard/dashboard.php'?>"> <img src="<?php echo $rootUrl.'/images/logo.png'?>" alt="">
            <h2 style="display:inline;">adminPanel</h2></a>
        </div>
        <div class="items">
            <li><i class="fas fa-chart-pie"></i><a href="<?php echo $rootUrl.'/dashboard/dashboard.php'?>">Dashboard</a></li>
            <li><i class="fas fa-users"></i><a href="<?php echo $rootUrl.'/dashboard/student/test.php'?>">Student</a></li>
            <li><i class="fas fa-user"></i></i><a href="<?php echo $rootUrl.'/dashboard/teacher/teacherdata.php' ?>">Teacher</a></li>
            <li><i class="fas fa-book"></i><a href="<?php echo $rootUrl.'/dashboard/course/coursedata.php' ?>">Course</a></li>
            <li><i class="fas fa-sms"></i><a href="<?php echo $rootUrl.'/dashboard/user feedback/userfeedback.php' ?>">Feedback</a></li>
            <!-- <li><i class="fas fa-table"></i><a href="<?php echo $rootUrl.'' ?>">Schedule</a></li> -->
            <li><i class="fas fa-search"></i><a href="<?php echo $rootUrl.'/dashboard/search/searchdata.php' ?>">Search</a></li>
            
        </div>
</section>
