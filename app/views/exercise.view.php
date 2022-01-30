<?php
require('app/views/partials/exercise-navbar.php');


function new_cookie($cookie_name, $cookie_value, $exp)
{
    setcookie($cookie_name, $cookie_value, strtotime($exp), '/');
}
function show_cookie($cookie_name)
{
    if (isset($_COOKIE[$cookie_name])) {
        echo 'Esiste un cookie di nome: ' . $_COOKIE[$cookie_name];
    } else {
        echo 'Il cookie richiesto non è presente';
    }
}
function delete_cookie($cookie_name)
{
    setcookie($cookie_name, '', strtotime('yesterday'));
}
new_cookie('user', 'Diocane', 'now + 1 month');
delete_cookie('user');
session_start();
$_SESSION['user_id'] = 5;
session_unset();
session_destroy();
function show_user_id()
{
    if (count($_SESSION) > 0) {
        echo 'La sessione è avviata! <br>';
        if (isset($_SESSION['user_id'])) {
            echo "L'utente ha id= " . $_SESSION['user_id'];
        }
    } else {
        echo 'Non è presente nessuna sessione <br>';
    }
}

?>


<?php
$w1 = "Uno";
$w2 = "vaffanculo";
$x = 15;
$y = 10;
?>

<div class="main">
    <div class="wrap" style="padding: 10px 70px">

        <h1>Esercizi PHP</h1>
        <hr>

        <h2 id="ex1">Starter and Math Operators</h2>
        <h3>Exercise 1: echo</h3>
        <p><?php echo 'Hello World' ?></p>
        <p><?php echo "$w1 due tre $w2 a te!!" ?></p>

        <hr>

        <h3 id="ex2">Exercise 2: Math Operators</h3>
        <?php echo $sum = $x + $y; ?>
        <br>
        <?php echo $sub = $x - $y; ?>
        <br>
        <?php echo $prod = $x * $y; ?>
        <br>
        <?php echo $div = $x / $y; ?>
        <br>
        <?php echo $rest = $x % $y; ?>
        <br>

        <hr>

        <h3 id="ex3">Exercise 3: Math operator in the same variable</h3>
        <?php
        $value = 8;
        echo "Value is now " . $value .
            "<br> Add 2. Value is now " . ($value += 2) .
            "<br> Subtract 4. Value is now " . ($value -= 4) .
            "<br> Multiply by 5. Value is now " . ($value *= 5) .
            "<br> Divide by 3. Value is now " . ($value /= 3) .
            "<br> Increment by one. Value is now " . (++$value) .
            "<br> Decrement by one. Value is now " . (--$value);
        ?>

        <hr>

        <h3 id="ex4">Exercise 4: var_dump e print_r</h3>
        <?php
        $name = 'Harry';
        $age = 28;
        var_dump($name);
        echo "<br>";
        print_r($name);    //Print Readable -> permette di stampare a schermo il testo interno ad una variabile.
        echo "<br>";
        var_dump($age);
        echo "<br>";
        var_dump(null);
        ?>

        <hr>
        <h2 id="ex5">Loops</h2>
        <h3>Exercise 5: gettype & foreach</h3>
        <?php
        $v = "Value is ";
        $type_array = [
            "string", 23.65, true, 23, null
        ];
        foreach ($type_array as $type) {
            echo $v . gettype($type) . "<br>";
        }
        ?>

        <hr>

        <h3 id="ex6">Exercise 6: if..else and time stamp</h3>
        <?php
        // $current_month= date('F', time());
        // if($current_month=='August'){
        //     echo "It's August.. It's hot!";
        // }else{
        //     echo "It's $current_month, so at least not in the peak of the heat.";
        // }
        $date = getdate();
        if ($date['month'] == 'August') {
            echo "It's August.. It's hot!";
        } else {
            echo "It's " . $date['month'] . ", so at least not in the peak of the heat.";
        }
        ?>

        <hr>

        <h3 id="ex7">Exercise 7: Loop For, While, Do While, Tables</h3>
        <?php
        for ($i = 1; $i < 10; $i++) {
            echo $i . ' ';
        };
        echo "<ol>";
        for ($i = 'A'; $i < 'G'; $i++) {
            echo '<li> Item ' . $i . '</li>';
        };
        echo "</ol>";
        $i = 0;
        while ($i < 9) {
            echo "abc ";
            $i++;
        };
        echo "<br>";
        $j = 0;
        do {
            echo "123 ";
            $j++;
        } while ($j < 9);
        echo "<br>";
        echo "<hr>";
        for ($i = 1; $i < 13; $i++) {
            $result = $i * $i;
            echo "<br>";
            echo  $i . '^2'  . "=" . $result;
        }
        ?>

        <br>
        <hr>

        <table>
            <?php
            for ($i = 1; $i <= 7; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 7; $j++) {
                    $cell_value = $j * $i;
                    echo "<td> $cell_value </td>";
                }
                echo "</tr>";
            }
            ?>
        </table>

        <br>
        <hr>
        <h2 id="ex8">Forms</h2>
        <h3>Exercise 8: Forms and POST superglobal variable</h3>

        <form method="POST" action="exercise#ex8">
            <label for="name">Your name:</label>
            <input name="name" type="text" placeholder="Name">
            <label for="fav-city">Your favourite city:</label>
            <input name="fav-city" type="text" placeholder="City">
            <input name="submit-city" value="Submit" type="submit">
        </form>
        <?php
        if (isset($_POST['submit-city'])) {
            $name = $_POST['name'];
            $city = $_POST['fav-city'];
            echo "<br>Ciao $name, la tua città preferita è $city <br>";
        }
        ?>
        <br>
        <form method="POST" action="exercise#ex8">
            <label for="day">Enter a day of the week:</label>
            <input type="text" name="day">
            <input type="submit" name="submit-day" value="Submit">
        </form>
        <?php
        if (isset($_POST['submit-day'])) {
            $day = strtolower($_POST['day']);
            switch ($day) {
                case "monday":
                    echo "Laugh on Monday, laugh for danger.";
                    break;
                case "tuesday":
                    echo "Laugh on Tuesday, kiss a stranger.";
                    break;
                case "wednesday":
                    echo "Laugh on Wednesday, laugh for a letter.";
                    break;
                case "thursday":
                    echo "Laugh on Thursday, something better.";
                    break;
                case "friday":
                    echo "Laugh on Friday, laugh for sorrow.";
                    break;
                case "saturday":
                    echo "Laugh on Saturday, joy tomorrow.";
                    break;
                default:
                    echo "You didn't type a correct day... Retry.";
            }
        }
        ?>
        <br>
        <br>
        <form action="exercise#ex8" method="POST">
            <label for="day">Select a day:</label>
            <select name="day" id="day">
                <option value="monday">Monday</option>
                <option value="tuesday">Tuesday</option>
                <option value="wednesday">Wednesday</option>
                <option value="thursday">Thursday</option>
                <option value="friday">Friday</option>
                <option value="saturday">Saturday</option>
            </select>
            <input type="submit" name="submit-day2" value="Submit">
        </form>
        <?php
        if (isset($_POST['submit-day2'])) {
            $day2 = $_POST['day'];
            switch ($day2) {
                case "monday":
                    echo "Laugh on Monday, laugh for danger.";
                    break;
                case "tuesday":
                    echo "Laugh on Tuesday, kiss a stranger.";
                    break;
                case "wednesday":
                    echo "Laugh on Wednesday, laugh for a letter.";
                    break;
                case "thursday":
                    echo "Laugh on Thursday, something better.";
                    break;
                case "friday":
                    echo "Laugh on Friday, laugh for sorrow.";
                    break;
                case "saturday":
                    echo "Laugh on Saturday, joy tomorrow.";
                    break;
            }
        }
        ?>

        <hr>

        <h2 id="ex9">Array</h2>
        <h3>Exercise 9: Array</h3>
        <?php
        $weather = [
            'rain',
            'sunshine',
            'clouds',
            'hail',
            'sleet',
            'snow',
            'wind'
        ];
        ?>
        <p>We've seen all kinds of weather this month.
            At the beginning of the month, we had <?php echo $weather[5] ?> and <?php echo $weather[6] ?>.
            Then came <?php echo $weather[1] ?> with a few <?php echo $weather[2] ?> and some
            <?php echo $weather[0] ?>.
            At least we didn't get any <?php echo $weather[3] ?> or <?php echo $weather[4] ?>.</p>
        <br>
        <ul>
            <?php
            $cities = ['Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London'];
            foreach ($cities as $city) {
                echo "<li>$city,</li>";
            }
            echo "</ul>";
            array_push($cities, "Los Angeles", "Calcutta");
            sort($cities);
            echo "<ul>";
            foreach ($cities as $city) {
                echo "<li>$city</li>";
            }
            echo "</ul>";
            ?>
            <hr>
            <br>
            <form action="exercise#ex9" method="POST">
                <?php
                function checkbox()
                {
                    $arg = func_get_args();
                    foreach ($arg as $check) {
                        $check = ucfirst($check);
                        echo "<br><input type=\"checkbox\" value=\"$check\" name=\"weather\"/>$check\n";
                    }
                }
                function list_it($str)
                {
                    $list_array = explode(',', $str);
                    foreach ($list_array as $elem) {
                        $list_item = ucfirst(trim($elem));
                        echo "<li>$list_item</li>\n";
                    }
                }
                ?>
                <h3>Tell me the weather in that day:</h3>
                <?php if (!isset($_POST['submit-form']) && !isset($_POST['submit-new-element'])) : ?>
                    <label for="month">Month:</label>
                    <input type="text" name="month">
                    <label for="year">Year:</label>
                    <input type="text" name="year">
                    <label for="city">City:</label>
                    <input type="text" name="city">
                    <br>
                    <label for="weather">Choose the weather:</label> <br>
                    <?php
                    echo checkbox('snow', 'hot', 'cold', 'sunshine', 'wind', 'hail', 'clouds', 'sleet', 'fog', 'umidity') . "<br>";
                    ?>
                    <br>
                    <input type="submit" name="submit-form" value="Submit">
            </form>
        <?php endif ?>
        <?php
        if (isset($_POST['submit-form'])) {
            $array = [
                'weather' => $_POST['weather'],
                'month' => $_POST['month'],
                'year' => $_POST['year'],
                'city' => $_POST['city'],
            ];
            $city = $array['city'];
            $month = $array['month'];
            $year = $array['year'];
            $weather = $array['weather'];
            echo "In $city in the month of $month $year, you observed the following weather: $weather";
            if (isset($_POST['submit-form'])) : ?>
                <p>Anything else? Please list the additional weather conditions in box below, separated by commas:</p>
                <form action="exercise#ex10" method="POST">
                    <textarea name="new_elements" size="60"></textarea>
                    <br>
                    <input type="submit" name="submit-new-element" value="Send new values!">
                </form>
        <?php endif;
        } ?>
        <?php if (isset($_POST['submit-new-element'])) : ?>
            <?php
            $new_elem = $_POST['new_elements'];
            echo "<p>This is a list for the new element you just added:</p><ul>";
            list_it($new_elem);
            echo "</ul>";
            ?>
            <p>Anything else? Please list the additional weather conditions in box below, separated by commas:</p>
            <form action="exercise#ex10" method="POST">
                <textarea name="new_elements" size="60"></textarea>
                <br>
                <input type="submit" name="submit-new-element" value="Send new values!">
            </form>
        <?php endif ?>

        <br>
        <hr>

        <h3>Travels..</h3>

        <?php
        if (!isset($_POST['send_travel'])) {
            $travel = [
                'Automobile', 'Jet', 'Ferry', 'Subway',
            ];

        ?>

            <p>Travel takes many forms, whether across town, across the country, or around the world. Here is a list
                of some common modes of transportation:</p>

            <ul>
                <?php
                foreach ($travel as $t) {
                    echo "<li>$t</li>\n";
                }
                ?>
            </ul>

            <form action="exercise#form-travel" method="POST">
                <p>Aggiungi elementi alla lista:</p>
                <input type="text" name="new_t">

                <?php
                foreach ($travel as $t) {
                    echo "<input type=\"hidden\" name=\"travel[]\" value=\"$t\">\n";
                };
                ?>
                <input type="submit" value="GO!" name="send_travel">
            </form>

        <?php
        } else {
            $travel = $_POST['travel'];
            $new_t = explode(',', $_POST['new_t']);
            $travel = array_merge($travel, $new_t);
            echo "Here is the new list: <ul>";
            foreach ($travel as $t) {
                echo "<li>" . trim($t) . "</li>";
            }
            echo "</ul>";


        ?>

            <p>Add more?</p>
            <form id="form-travel" action="exercise#form-travel" method="post">
                <input type="text" name="new_t">
                <?php
                foreach ($travel as $t) {
                    echo "<input type=\"hidden\" name=\"travel[]\" value=\"$t\">\n";
                }
                ?>
                <input type="submit" name="send_travel">
            </form>

        <?php } ?>
        <br>
        <hr>

        <h3>Countries</h3>
        <?php
        $countries = [
            "Japan" => "Tokyo",
            "Mexico" => "Mexico City",
            "USA" => "New York City",
            "India" => "Mumbai",
            "Korea" => "Seoul",
            "China" => "Shanghai",
            "Nigeria" => "Lagos",
            "Argentina" => "Buenos Aires",
            "Egypt" => "Cairo",
            "UK" => "London"
        ];

        ?>
        <p>Choose a city from the list: </p>
        <form id="form" action="exercise#form" method="POST">
            <select name="city">
                <?php
                foreach ($countries as $c) {
                    echo "<option value=\"$c\">" . $c . "</option>";
                }
                ?>
            </select>
            <input type="submit" name="submit_countries" value="Go">
        </form>
        <?php
        if (isset($_POST['submit_countries'])) {
            $city = $_POST['city'];
            echo "\n $city is in " . array_search($city, $countries);
        }
        ?>
        <br>
        <hr>
        <h3>Minimum and maximum random values</h3>

        <form id="generate" action="exercise#generate" method="post">
            <input type="submit" name="generate" value="Click to Generate Random Values">
            <br>
            <br>
        </form>
        <?php
        if (isset($_POST['generate'])) {

            $values = [];
            for ($n = 0; $n < 15; $n++) {
                $values[] = rand(0, 100);
            }
            $total = 0;
            echo "These are the values: ";
            foreach ($values as $value) {
                $total += $value;
                echo $value . ", ";
            }
            echo "<br>";
            $count = count($values);
            $average = round($total / $count);

            echo "The average number is $average";
            sort($values);
            echo "<br>The values sorted are:  ";
            foreach ($values as $num) {
                echo $num . ", ";
            }
            echo "<br>The 5 maximum values are: ";
            $max = array_splice($values, -5, 5);
            foreach ($max as $num) {
                echo $num . ", ";
            }
            echo "<br>The 5 minimum values are: ";
            $min = array_splice($values, 0, 5);
            sort($min);
            foreach ($min as $num) {
                echo $num . ", ";
            }
        }
        ?>
        <hr>
        <br>

        <h3>Countries in a table (multidimensional array)</h3>
        <?php
        $multiCity = [
            ['City', 'Country', 'Continent'], ['Tokyo', 'Japan', 'Asia'], ['Mexico City', 'Mexico', 'North America'], ['New York City', 'USA', 'North America'], ['Mumbai', 'India', 'Asia'], ['Seoul', 'Korea', 'Asia'], ['Lagos', 'Nigeria', 'Africa'], ['Buenos Aires', 'Argentina', 'South America'], ['Cairo', 'Egypt', 'Africa'], ['London', 'UK', 'Europe']
        ];
        $row_count = count($multiCity) - 1;
        $elements_count = count($multiCity[0]);
        ?>

        <table>
            <tr>
                <th><?php echo $multiCity[0][0] ?></th>
                <th><?php echo $multiCity[0][1] ?></th>
                <th><?php echo $multiCity[0][2] ?></th>
            </tr>

            <?php
            for ($i = 1; $i <= $row_count; $i++) {
                echo "<tr>";
                for ($j = 0; $j < count($multiCity[$i]); $j++) {
                    echo "<td>" . $multiCity[$i][$j] . "</td>";
                };
                echo "</tr>";
            }
            ?>
        </table>
        <br> <hr>
        <h3>Array_map and Callbacks</h3>
        <?php
            function callback_strlen($str){
                return strlen($str);
            }
            $array= ['Uno', 'Due', 'Tre', 'Quattro'];
            $lenghts = array_map("callback_strlen", $array);
            foreach($array as $key=>$value){
                echo "La parola <strong>" . $value . "</strong> è lunga ";
                echo $lenghts[$key] . " caratteri.<br>";     
            }
        ?>
        <br> <hr>
        <h2 id="ex10">Functions</h2>
        <h3>Exercise 10: Functions</h3>
        <h5>Rectangle Area</h5>
        <?php

        function rectArea($width, $height)
        {
            return $area = $width * $height;
        }
        ?>
        <form action="exercise#ex10" method="POST">
            <p>Digita i valori di base e altezza..</p>
            <label for="base">Base: </label>
            <input type="text" name="base" id="base">
            <label for="altezza">Altezza: </label>
            <input type="text" name="altezza" id="altezza">
            <input type="submit" name="submit-area" value="Go">
            <br>
        </form>
        <?php
        if (isset($_POST['submit-area'])) {
            $base = $_POST['base'];
            $altezza = $_POST['altezza'];
            echo "Base: $base <br>";
            echo "Altezza: $altezza <br>";
            echo "L'area di questo rettangolo è: " . rectArea($base, $altezza);
        }
        ?>
        <h5>Days of the month</h5>
        <?php
        $months = [
            'Genuary' => 31,
            'February' => "28 days, if leap year 29",
            'March' => 31,
            'April' => 30,
            'May' => 31,
            'June' => 30,
            'July' => 31,
            'August' => 31,
            'September' => 30,
            'October' => 31,
            'November' => 30,
            'December' => 31,
        ];

        function makeOptions($options)
        {
            foreach ($options as $option => $days) {
                echo "<option>" . ucfirst($option) . "</option>";
            }
        };
        function makeSelect($name, $options = [])
        {
            if (!is_array($options)) {
                die("Error: these values are not an array.");
            }
            echo "<select name=\"$name\">" . makeOptions($options) . "</select>";
        };

        ?>
        <form action="exercise#ex10" method="post">
            <label for="month">Select a month from the list:</label>
            <select name="month">
                <?php
                makeSelect('month', $months);
                ?>
                <input type="submit" name="send-month" value="Go">
        </form>
        <?php
        if (isset($_POST['send-month'])) {
            $given_month = $_POST['month'];
            foreach ($months as $month => $days) {
                if (strtolower($given_month) == strtolower($month)) {
                    $daysOfMonth = $days;
                }
            }
            echo "<br>For $given_month there are $daysOfMonth days";
        }
        ?>

        <br>
        <hr>
        <h3>Custom function with callback</h3>
        <?php
        function printFormatted($str, $format){
            return $format($str);
        }
        function ask($str){
            echo $str . "? ";
        }
        function exclaim($str){
            echo $str . "! ";
        }
        printFormatted("Vuoi da bere", "ask");
        echo "<br>";
        printFormatted("Prendi da bere", "exclaim");
        ?>
        <br><hr>
        <h2 id="ex11">Classes</h2>
        <h3>Exercise 11: Classes</h3>
        <?php
        class Select
        {
            private $name;
            private $value;

            public function setName($name)
            {
                $this->name = $name;
            }
            public function getName()
            {
                return $this->name;
            }
            public function setValue($value)
            {
                if (!is_array($value)) {
                    die("Error: the value is not an array.");
                }
                $this->value = $value;
            }
            public function getValue()
            {
                return $this->value;
            }
            private function makeOptions($value)
            {
                foreach ($value as $option) {
                    echo "<option value=\"$option\">" . ucfirst($option) . "</option>";
                }
            }

            public function makeSelect()
            {
                echo "<select name=\"" . $this->getName() . "\">";
                echo "<option value=\"No response\"> --Select one-- </option>";
                $this->makeOptions($this->getValue());
                echo "</select>";
            }
        }

        $browsers = [
            'Firefox', 'Chrome', 'Internet Explorer', 'Safari', 'Opera', 'Other'
        ];

        $speeds = [
            'Unknown', 'DSL', 'T1', 'Cable', 'Dialup', 'Other'
        ];

        $os = [
            'Windows', 'Linux', 'Macintosh', 'Other'
        ];

        ?>

        <?php if (!isset($_POST['register']) || isset($_POST['reform'])) : ?>
            <form method="POST" action="exercise#ex11">
                <h5>Registration Form</h5>
                <p><em>* Indicates required field</em></p>
                <h5>Work Access</h5>
                <label for="name">* Name:</label>
                <input type="text" name="name" required>
                <br>
                <label for="username">* Username:</label>
                <input type="text" name="username" required>
                <br>
                <label for="email">* Email:</label>
                <input type="email" name="email" required>
                <br>
                <label for="browsers">Primary Browser:</label>

                <?php
                $browser_select = new Select();
                $browser_select->setName('browsers');
                $browser_select->setValue($browsers);
                $browser_select->makeSelect();
                ?>
                <br>
                <label for="speed">Connection Speed: </label>
                <?php
                $speed_select = new Select();
                $speed_select->setName('speed');
                $speed_select->setValue($speeds);
                $speed_select->makeSelect();
                ?>
                <br>
                <label for="os">Operating System: </label>
                <?php
                $os_select = new Select();
                $os_select->setName('os');
                $os_select->setValue($os);
                $os_select->makeSelect();
                ?>
                <br>
                <h5>Home Access</h5>
                <label for="browsers">Primary Browser:</label>

                <?php
                $browser_select = new Select();
                $browser_select->setName('browsers_home');
                $browser_select->setValue($browsers);
                $browser_select->makeSelect();
                ?>
                <br>
                <label for="speed">Connection Speed: </label>
                <?php
                $speed_select = new Select();
                $speed_select->setName('speed_home');
                $speed_select->setValue($speeds);
                $speed_select->makeSelect();
                ?>
                <br>
                <label for="os">Operating System: </label>
                <?php
                $os_select = new Select();
                $os_select->setName('os_home');
                $os_select->setValue($os);
                $os_select->makeSelect();
                ?>
                <br>
                <br>

                <input type="submit" name="register" value="Register">

            </form>
        <?php else : ?>
            <?php
            $requested = [
                'name' => $_POST['name'],
                'username' => $_POST['username'],
                'email' => $_POST['email']
            ];
            function invalid_fields($requested)
            {
                $invalid = [];
                foreach ($requested as $elem => $response) {
                    if ($response == '') {
                        $invalid[] = $elem;
                        if ($elem == 'email') {
                            if (!strpos($response, '@')) {
                                echo "<strong style=\"color:red\">Error: Your email is incorrect!</strong>";
                            }
                        }
                    }
                }
                $count = count($invalid);
                return $invalid = implode(', ', $invalid);
                // if ($count==1){
                //     echo "<strong style=\"color:red\">Error: The $invalid field is empty!</strong>";                    
                // }; if ($count>1){
                //     echo "<strong style=\"color:red\">Error: The fields $invalid are empty!</strong>";    
                // }

            }
            ?>


            <?php if (invalid_fields($requested)) : ?>
                <p>Please enter your <?php echo  invalid_fields($requested) ?></p>
                <form action="exercise#ex11" method="post">
                    <input type="submit" value="Compila di nuovo il modulo" name="reform">
                </form>
            <?php else : ?>
                <p>These are the values for <?php echo $requested['name'] ?>:</p>

                <ol>
                    <li>
                        <?php echo $requested['name'] ?>
                    </li>
                    <li>
                        <?php echo $requested['username'] ?>
                    </li>
                    <li>
                        <?php echo $requested['email'] ?>
                    </li>
                    <h5>Work Access</h5>
                    <li>
                        <?php echo $_POST['browsers'] ?>
                    </li>
                    <li>
                        <?php echo $_POST['speed'] ?>
                    </li>
                    <li>
                        <?php echo $_POST['os'] ?>
                    </li>
                    <h5>Home Access</h5>
                    <li>
                        <?php echo $_POST['browsers_home'] ?>
                    </li>
                    <li>
                        <?php echo $_POST['speed_home'] ?>
                    </li>
                    <li>
                        <?php echo $_POST['os_home'] ?>
                    </li>
                </ol>
                <form action="exercise#ex11" method="post">
                    <input type="submit" value="Compila di nuovo il modulo" name="reform">
                </form>
        <?php endif;
        endif; ?>
        <br>

        <hr><br>
        <h2 id="ex12">Cookies</h2>

        <?php
        //da fare prima dell'html
        //new_cookie('user', 'Diocane', 'now + 1 month');
        show_cookie('user');

        echo "<br><hr> <h2 id=\"ex13\">Sessions</h2>";
        show_user_id();
        echo "<br>";
        var_dump($_SESSION);

        ?>
        <?php
        trait message
        {
            public function hello()
            {
                echo "<br>Hello World <br>";
            }
        }
        trait error_txt
        {
            public function errormsg()
            {
                echo "<br>There is an error<br>";
            }
        }
        class Test
        {
            use message, error_txt;
        }
        $test1 = new Test;
        $test1->hello();
        $test1->errormsg();

        class Test2
        {
            public static $name = "Ester!";
            public function __construct()
            {
                echo self::$name;
            }
        }
        new Test2;
        class Test3 extends Test2
        {
            public function __construct()
            {
                echo parent::$name;
            }
        }
        new Test3;

        class MyIterator implements Iterator
        {
            private $pointer = 0;
            private $items = [];
            public function __construct($items)
            {
                //array_values assicura di prendere i valori dell'array
                $this->items = array_values($items);
            }
            public function current()
            {
                return $this->items[$this->pointer];
            }
            public function key()
            {
                return $this->pointer;
            }
            public function next()
            {
                return $this->pointer++;
            }
            public function rewind()
            {
                $this->pointer = 0;
            }
            public function valid()
            {
                return $this->pointer < count($this->items);
            }
        }

        function printIterable(iterable $myIterable)
        {
            foreach ($myIterable as $iterable) {
                echo "value: $iterable <br>";
            }
        }

        echo "<br> <hr>";

        $iterator = new MyIterator(["a", "b", "c"]);
        printIterable($iterator);

        echo "<br><hr>";

        function division($dividendo, $divisore)
        {
            if ($divisore == 0) {
                throw new Exception("Stai dividendo per zero.", 1);
            }
            $result = $dividendo / $divisore;
            return $result;
        };

        ?>
        <h2 id="ex14">Exceptions</h2>
        <form action=<?php echo $_SERVER["REQUEST_URI"] . "#ex11.2" ?> method="POST">
            <h5>Inserisci gli operatori della divisione..</h5> <br>
            <label for="dividendo">Dividendo:</label>
            <input type="text" name="dividendo">
            <label for="divisore">Divisore:</label>
            <input type="text" name="divisore">
            <br>
            <input type="submit" value="Go" name="go">
            <br>
            <?php
            if (isset($_POST['go'])) {
                $dividendo = $_POST['dividendo'];
                $divisore = $_POST['divisore'];
                try {
                    echo "$dividendo diviso $divisore fa " . division($dividendo, $divisore);
                } catch (Exception $ex) {
                    $message = $ex->getMessage();
                    $line = $ex->getLine();
                    $file = $ex->getFile();
                    $code = $ex->getCode();
                    echo "E' stata trovata un'eccezione di tipo $code alla riga $line del file $file.
                    <br><br>Errore: $message<br>";
                } finally {
                    echo "<br>Alla prossima divisione!";
                }
            }
            echo "<br><hr><h2 id=\"ex15\">Filters</h2><table><tr><th>Id</th><th>Filter</th><th>Filter Id</th></tr>";

            foreach (filter_list() as $id => $filter) {
                echo "<tr><td>$id</td><td>$filter</td><td>" . filter_id($filter) . "</td></tr>";
            }
            ?>
            </table>
            <?php
            if (isset($_POST['filter'])) {
                $str = filter_var($_POST['string'], FILTER_SANITIZE_STRING);
                $int = $_POST['int'];
                $ip = $_POST['ip'];
                $email = $_POST['email'];
                function validate_int($int)
                {
                    if (!filter_var($int, FILTER_VALIDATE_INT) === false || filter_var($int, FILTER_VALIDATE_INT) === 0) {
                        echo "$int è un valore valido.";
                    } else {
                        echo "$int non è un numero intero.";
                    }
                }

                function validate_ip($ip)
                {
                    if (filter_var($ip, FILTER_VALIDATE_IP)) {
                        echo "$ip è un indirizzo IP valido.";
                    } else {
                        echo "$ip non è un indirizzo IP valido.";
                    }
                }

                function validate_email($email)
                {
                    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo "$email è un indirizzo email valido.";
                    } else {
                        echo "$email non è un indirizzo email valido.";
                    }
                }
            }
            ?>
            <form action=<?php echo $_SERVER["REQUEST_URI"] . "#ex15-2" ?> method="POST">
                <label id="ex15-2" for="string">Inserisci una stringa (i tag html verranno eliminati dal filtro):</label>
                <input type="text" name="string">
                <br>
                <p><strong>Result: </strong><?php if (isset($_POST['filter'])) {
                                                echo $str;
                                            } ?></p>

                <label for="int">Inserisci un numero intero:</label>
                <input type="text" name="int" id="int">
                <br>
                <p><strong>Result: </strong><?php if (isset($_POST['filter'])) {
                                                validate_int($int);
                                            } ?></p>

                <label for="ip">Inserisci indirizzo IP:</label>
                <input type="text" name="ip" id="ip">
                <br>
                <p><strong>Result: </strong><?php if (isset($_POST['filter'])) {
                                                validate_ip($ip);
                                            } ?></p>

                <label for="email">Inserisci indirizzo email:</label>
                <input type="text" name="email" id="email">
                <br>
                <p><strong>Result: </strong><?php if (isset($_POST['filter'])) {
                                                validate_email($email);
                                            } ?></p>

                <input type="submit" name="filter" value="Filter This!">
            </form>


    </div>
    </body>

    </html>
</div>

<?php
require('app/views/partials/footer.php');
?>