<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>TV Tracker Form</title>
        <link href="./dist/site.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="tv">
            <div class="tv__title titles">
                <!-- Introduction -->
                <h2>TV Tracker Form</h2>
                <p>How much time does your kid spend watching TV, playing video games, etc.?</p>
            </div>
            <div class="tv__form">
                <form action="data.php">
                    <!-- First Name -->
                    <label for="first_name">First Name</label>
                    <input type="text" class="tv__form--input" name="first_name"><br>
                    <!-- Last Name -->
                    <label for="last_name">Last Name</label>
                    <input type="text" class="tv__form--input" name="last_name"><br>

                    <!-- Year of Birth -->
                    <label for="birth_year">Year of Birth</label>
                    <select name="birth_year" class="tv__form--input">
                        <!-- Loop to go through possible birth years -->
                        <?php 
                            for($x=2000; $x<=2006; $x++) {
                                echo "<option value='$x'>" . $x . "</option>";
                            }
                        ?>
                    </select>

                    <br>
                    
                    <!-- Current year at school -->
                    <label for="school_year">Current Year at School:</label>
                    <select name="school_year" class="tv__form--input">
                        <!-- Loop to go through bedtime options (specified options were from 7 - 12 grades) -->
                        <?php 
                            for($x=7; $x<=12; $x++) {
                                echo "<option value='$x'>Grade " . $x . "</option>";
                            }
                        ?>
                    </select>
                    
                    <br>

                    <!-- Approximate Bedtime / Wake time -->
                    <label for="bed_time">Approximate Bedtime</label>
                    <select name="bed_time" class="tv__form--input">
                        <!-- Loop to go through amount of hours spent watching entertainment -->
                        <?php 
                            for($x=6; $x<=12; $x++) {
                                if($x == 12) echo "<option value='$x'>" . $x . " A.M.</option>";
                                else echo "<option value='$x'>" . $x . " P.M.</option>";
                            }
                        ?>
                    </select>
                    <br>
                    <label for="wake_time">Approximate Wake time</label>
                    <select name="wake_time" class="tv__form--input">
                        <!-- Loop to go through amount of hours spent watching entertainment -->
                        <?php 
                            for($x=6; $x<=12; $x++) {
                                if($x == 12) echo "<option value='$x'>" . $x . " P.M.</option>";
                                else echo "<option value='$x'>" . $x . " A.M.</option>";
                                
                            }
                        ?>
                    </select>
                    
                    <br>

                    <!-- Approxmiate time spent working on HW -->
                    <label for="hw_time">Approximate time spent on Homework per day</label><br>
                    <select name="hw_time" class="tv__form--input">
                        <!-- Loop to go through amount of hours working on homework -->
                        <?php 
                            for($x=0; $x<=24; $x++) {
                                echo "<option value='$x'>" . $x . " Hours</option>";
                            }
                        ?>
                    </select>

                    <br>

                    <!-- Approxmiate time spent watching entertainment -->
                    <label for="entertainment_use">Approximate Entertainment watching per day</label><br>
                    <span class="tv__form--note">In hours, This can include from TV / YouTube / Netflix</span>
                    <select name="entertainment_use" class="tv__form--input">
                        <!-- Loop to go through amount of hours spent watching entertainment -->
                        <?php 
                            for($x=0; $x<=24; $x++) {
                                echo "<option value='$x'>" . $x . " Hours</option>";
                            }
                        ?>
                    </select>
                    
                    <br>
                    
                    <!-- Approxmiate time spent using electronics -->
                    <label for="electronics_use">Approximate Electronics use per day</label><br>
                    <span class="tv__form--note">In hours, This can include gaming consoles, computer, etc.</span>
                    <select name="electronics_use" class="tv__form--input">
                        <!-- Loop to go through amount of hours spent using electronics -->
                        <?php 
                            for($x=0; $x<=24; $x++) {
                                echo "<option value='$x'>" . $x . " Hours</option>";
                            }
                        ?>
                    </select>
                    
                    <br>

                    <!-- Approxmiate time spent with friends and family -->
                    <label for="friend_time">Approximate Friend / Family time per day</label>
                    <select name="friend_time" class="tv__form--input">
                        <!-- Loop to go through amount of hours spent with friends and family -->
                        <?php 
                            for($x=0; $x<=24; $x++) {
                                echo "<option value='$x'>" . $x . " Hours </option>";
                            }
                        ?>
                    </select>
                    
                    <br>

                    <!-- Approxmiate time spent outside -->
                    <label for="outside_time">Approximate Outside time per day</label>
                    <select name="outside_time" class="tv__form--input">
                        <!-- Loop to go through amount of hours spent outside -->
                        <?php 
                            for($x=0; $x<=24; $x++) {
                                echo "<option value='$x'>" . $x . " Hours</option>";
                            }
                        ?>
                    </select>
                    
                    <br>

                    <!-- Submit Button -->
                    <input type="submit" value="Submit Form">
                </form>
            </div>
        </div>  
    </body>
</html>