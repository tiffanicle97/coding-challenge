 <?php

// This is just an example, you can adjust it to your needs

$numbers = range(1, 10);
shuffle($numbers);

echo "Random numbers between 1 and 10: ";
foreach ($numbers as $number) {
    echo "$number, ";
}

?>