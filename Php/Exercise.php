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
        
        ?>
        
</body>
</html>

    

