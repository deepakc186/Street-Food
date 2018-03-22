<?php
include('./connectvars.php');
?>
<?php

    if(isset($_POST['submit'])){
        //grab the data
        $stall_name = $_POST['stallname'];
        $stall_location = $_POST['stalllocation'];
        $area_name = $_POST['areaname'];
        $food_name = $_POST['foodname'];
        $stall_pic = $_FILES['stallpic']['name'];
        $stall_pic_type = $_FILES['stallpic']['type'];
        $stall_pic_size = $_FILES['stallpic']['size']; 
        
        if(!empty($stall_name) && !empty($stall_location) && !empty($area_name) && !empty($food_name) && !empty($stall_pic)){
            
             if ((($stall_pic_type == 'img/gif') || ($stall_pic_type == 'img/jpeg') || ($stall_pic_type == 'img/pjpeg') || ($stall_pic_type == 'img/png')) && ($stall_pic_size > 0) && ($stall_pic_size <= GW_MAXFILESIZE)) {
                 if ($_FILES['stallpic']['error'] == 0) {          // Move the file to the target upload folder
                     $target = GW_UPLOADPATH . $stall_pic;
                     if (move_uploaded_file($_FILES['stallpic']['tmp_name'], $target)) {
                          // Connect to the database
                           $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                            // Write the data to the database
                           $query = "INSERT INTO info(Stall_Name,Stall_LOcation,Area_Name,Food_Name,stall_pic) VALUES ('$stall_name', '$stall_location', '$area_name' , '$food_name' , '$stall_pic')";
                            mysqli_query($dbc, $query);
                            
                              // Confirm success
                        echo '<p>you have added the following information!</p>';
                        echo '<p><strong>Stall Name:</strong> ' . $stall_name . '<br />';
                        echo '<strong>Stall Location:</strong> ' . $stall_location . '</p>';
                        echo '<strong>Area Name:</strong> ' . $area_name . '</p>';
                        echo '<strong>Food Name:</strong> ' . $food_name . '</p>';
                        echo '<img src="' . GW_UPLOADPATH . $stall_pic . '" alt="Score image" /></p>';
                        echo '<p><a href="index.php">&lt;&lt; bvl</a></p>';
                        // Clear the score data to clear the form
                        
                        $stall_name = "";
                        $stall_location = "";
                        $area_name = "";
                        $food_name = "";
                        $stall_pic="";
           
                        mysqli_close($dbc);
                     } else {
                                '<p class="error">Sorry, there was a problem uploading your image.</p>';
                     }
                 }
              else {        echo '<p class="error">The screen shot must be a GIF, JPEG, or PNG image file no greater than ' . (GW_MAXFILESIZE / 1024) . ' KB in size.</p>';    
                }
      // Try to delete the temporary screen shot image file
        @unlink($_FILES['stallpic']['tmp_name']);}
    }
    
    else {
      echo '<p class="error">Please enter all of the information to add .</p>';
    }
    }
    else
        {
        echo 'eooor';
        }
    
     ?>
      
     
