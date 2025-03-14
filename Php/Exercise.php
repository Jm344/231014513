<!DOCTYPE html>
<html>
<body>
    <?php
        $a = 15;
        $b = 7;
        echo "<p>Sum: " . ($a + $b) . "</p>";
        echo "<p>Difference" . ($a - $b) . "</p>";
        echo "<p>Product: " . ($a * $b) . "</p>";
        echo "<p>Quotient: " . ($a / $b) . "</p>";

        
        echo "<br> Exercise 2";
        $number = 10;
        
        if ($number == 0) {
            echo "Zero";
        } elseif ($number > 0) {
            echo "<br> Positive";
        } else {
            echo "Negative";
        }
        
        if ($number % 2 == 0) {
            echo " and Even";
        } else {
            echo " and Odd";
        }

        echo "<br> Exercise 3";
        echo "<br> FizzBuzz:";
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo " FizzBuzz";
            } elseif ($i % 3 == 0) {
                echo " Fizz";
            } elseif ($i % 5 == 0) {
                echo " Buzz";
            } else {
                echo " $i";
            }
        }

        echo "<br><br> Even Fibonacci Numbers:";
        $a = 0;
        $b = 1;
        for ($i = 0; $i < 10; $i++) {
            $next = $a + $b;
            if ($next % 2 == 0) {
                echo " $next";
            }
            $a = $b;
            $b = $next;
        }


        echo "<br> Exercise 4";
        function greet($name) {
            return "Hello, $name!";
        }
        
        function square($num) {
            return $num * $num;
        }
        
        echo greet("Ayisha") . "\n";
        echo square(4) . "\n";

        echo "<br> Exercise 5";
            


    ?>
        
</body>
</html>

    

