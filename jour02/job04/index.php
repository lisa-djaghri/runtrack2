<?php 

for ($nbr = 1; $nbr <= 100; $nbr++) {
    if ($nbr % 3 == 0 && $nbr % 5 == 0) {
        echo "FizzBuzz<br />";
    }
    elseif ($nbr % 3 == 0) {
        echo "Fizz<br />";
    }
    elseif ($nbr % 5 == 0) {
        echo "Buzz<br />";
    }
    else {
    echo $nbr . "<br />";
    }
}
?>