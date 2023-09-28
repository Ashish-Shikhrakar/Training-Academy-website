<?php 

include($_SERVER['DOCUMENT_ROOT'].'/ARMY-WEBSITE-PROJECT/dashboard/common/header.php');
include($_SERVER['DOCUMENT_ROOT'].'/ARMY-WEBSITE-PROJECT/dashboard/common/sidebar.php')?>

    
<section id ="interface" >
   <?php  include($_SERVER['DOCUMENT_ROOT'].'/ARMY-WEBSITE-PROJECT/dashboard/common/top-menu.php')?>
<div class="searchcourse">

<form action="" method="post">
                            <div class="row" style="margin-left: 60px;">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="search_txt" class="form-control" placeholder="search">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary" name="search_btn">Search</button>
                                </div>
                            </div>
                        </form>

   <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
            <a class="btn btn-info" href="../search/searchdata.php" role="button">Back</a>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Courses are:</h4>

                    </div>
                    <div class="cardbody">
                    

                        <table class="table table-border">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Course Name</th>
                                    <th>Teacher Name</th>
                                    <th>Course ID</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                               
                                if (isset($_POST['search_txt'])) {
                                    echo 
                                    '<script>
                                        let clearMe = document.getElementById("clearMe");
                                        clearMe.innerHTML = "";
                                    </script>';
                                
                                    if ($_POST["search_txt"] === '') {
                                        // do nothing
                                    } else {
                              
                                    $conn = mysqli_connect("localhost","root","","army_project");
                                    if(isset($_POST['search_btn'])){
                                        $search_txt = $_POST['search_txt'];

                                        $query = "SELECT * FROM course where (cname) = '$search_txt'";
                                        $query_run=mysqli_query($conn,$query);
                                        

                                        if(mysqli_num_rows($query_run)>0){
                                                echo '<div id="clearMe">';

                                                while($row = mysqli_fetch_array($query_run)){

                                                    
                                                    ?>
                            
                                                    <tr>
                                                        <td><?php echo $row['cr_id']; ?></td>
                                                        <td><?php echo $row['cname']; ?></td>
                                                        <td><?php echo $row['c_t_name']; ?></td>
                                                        <td><?php echo $row['cid']; ?></td>
                                                        
                                                    </tr>
                                                  <?php
                                                }
                                                echo '</div>';
                                        }
                                        else{
                                            ?>
                                            <tr>
                                                <td colspan="7">No Record Found</td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    mysqli_close($conn);
                                    
                                }
                            }

                                ?>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
