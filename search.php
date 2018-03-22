<?php
include('./connectvars.php');
?>     
<?php        
         $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
         $area = $_POST['area'];
            $foody  =$_POST['foody'];   
           
        if(isset($_POST['submit-form'])){
            $query = "SELECT * FROM info WHERE Area_Name= '$area' AND Food_Name= '$foody' ;";
            
                $data= mysqli_query($dbc, $query);
                if (mysqli_num_rows($data) > 0) {
                    // output data of each row
                    //while loop:fetch the data a row at a time
                    while($row = mysqli_fetch_array($data)) {
                    echo "Stall Name :{$row['Stall_Name']}  <br> ".
                         "Stall Location : {$row['Stall_LOcation']} <br> ".
                         "Area Name : {$row['Area_Name']} <br> ".
                         "Food Name : {$row['Food_Name']} <br> ".
                                // if(is_file($row['stall_pic']) && filesize($row['stall_pic'])>0 ){
                                //     echo '<img src="' . $row['stall_pic'] .'" alt=" image"/> ';
                                 //}
                         "--------------------------------<br>";
                 }
               } else {
                   echo "0 results";
               }
        }else{
            echo 'Form not submitted';
        } 
        ?>
        <?php
    require_once 'Footer.php';
    ?>
      
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        
            </body>
</html>
