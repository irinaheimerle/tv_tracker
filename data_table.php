<?php 
    //intialize variables needed
    $data = array();
    $lineArray = array();

    //Read from the CSV file
    $data = file("student_details.csv");
    //create each data line as it's own array
?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link href="./dist/site.css" rel="stylesheet" type="text/css">
            <title>TV Tracker Table</title>
        </head>
        <body>
            <div class="data">
                <div class="data__title titles">
                    <!-- Introduction -->
                    <h2>TV Tracker Form</h2>
                </div>
                <div class="data__table">
                    <table border='1'>
                        <!-- Table Head Information -->
                        <thead class="data__table--head">
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Year of Birth</th>
                            <th>Grade</th>
                            <th>Bedtime</th>
                            <th>Wake time</th>
                            <th>HW Time</th>
                            <th>Entertainment Time</th>
                            <th>Electronics Time</th>
                            <th>Family Time</th>
                            <th>Outside Time</th>
                            <th>Years left of School</th>
                            <th>HW Time Left</th>
                            <th>Entertainment Time left</th>
                            <th>% of Day involving Electronics</th>
                        </thead>
                        <!-- Table Row Information -->
                        <?php
                            //to count to go to next line
                            $counter = 0;
                            //for putting and taking away <tr></tr>
                            $flag = true;
                            echo '<tr>';
                            foreach($data as $elem) {
                                $lineArray = explode(",", $elem);
                                
                                foreach($lineArray as $line) {
                                    if($counter === 15 && $flag == true) {
                                        if($flag === true) {
                                            echo "<tr>";
                                            $flag = false;
                                        }
                                        echo "<td>" . $line . "</td>";
                                        if($flag === true) {
                                            echo "</tr>";
                                            $flag = false;
                                        }
                                        
                                    } else {
                                        echo "<td>" . $line . "</td>";
                                        $counter++;
                                    } 
                                }
                            }
                            echo '</tr>';
                        ?>
                    </table>
                </div>
            </div>
        </body>
    </html>
    
    <?php 
        //close the file
        fclose($file_handle); 
    ?>
    
    
    
    
    

    

    