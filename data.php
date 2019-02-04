<?php 
    //intialize variable to hold student information
    $student_details = array();

    // check to see if data exists, if so create an array to hold all of the student's information
    if(isset($_POST)) {
        foreach($_GET as $name => $value) $student_details[$name] = $value;
    }

    //all the made data created from the values from form
    $made_data = array();
    $years_left = 12 - $student_details["school_year"];
    $hw_left = (195 * $student_details["hw_time"]) * $years_left;
    $percent_use = number_format(24 / (($student_details["electronics_use"] + $student_details["entertainment_use"]) / 10), 2);
    $enter_left = (($student_details["electronics_use"] + $student_details["entertainment_use"]) * 195) * $years_left; 
    array_push($made_data, $years_left, $hw_left, $enter_left, $percent_use);

    //all data array
    $all_data = array_merge($student_details, $made_data);

    //Create CSV File for later
    $file = fopen("student_details.csv", "a");
    foreach($all_data as $data) {
        fputcsv($file, explode(",", $data));
    }
    fclose($file);
?>
    <!-- Display -->
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>TV Tracker Form Confirmation</title>
            <link href="./dist/site.css" rel="stylesheet" type="text/css">
        </head>
        <body>
            <div class="confirmation">
                <div class="confirmation__title titles">
                    <!-- Introduction -->
                    <h2>TV Tracker Form</h2>
                </div>
                <!-- Student Details -->
                <div class="confirmation__student">
                    <h2 class="confirmation__student--message">Great! Thanks <?php echo $student_details["first_name"]; ?> for responding to our survey</h2>
                    <div class="confirmation__student--details">
                        <h3>Student Details</h3>
                        <p>Student Name: <?php echo $student_details["first_name"] . " " . $student_details["last_name"]; ?></p>
                        <p>Birth Year: <?php echo $student_details["birth_year"]; ?></p>
                        <p>Current School Year: <?php echo "Grade " . $student_details["school_year"]; ?></p>
                    </div>

                    <!-- Student Stats -->
                    <div class="confirmation__percentages">
                        <h3>Statistics</h3>
                        <p><?php echo $student_details["first_name"]; ?> has <?php echo $years_left; ?> years left of school</p>
                        <!-- TO-DO: Figure out this logic -->
                        <p><?php echo $student_details["first_name"]; ?> will have to do <?php echo $hw_left; ?> more hours of homework</p>
                        <p><?php echo $student_details["first_name"]; ?> will spend <?php echo $enter_left; ?> hours on a screen</p>
                        <p><?php echo $student_details["first_name"]; ?> spends <?php echo $percent_use; ?>% of their day looking at a screen</p>
                    </div>
                    
                    <!-- View All Data as Table Link Form -->
                    <div class="confirmation__data">
                        <form action="data_table.php">
                            <input type="submit" value="View All Data as Table">
                        </form>
                    </div>
                </div>
            </div>
        </body>
    </html>
    