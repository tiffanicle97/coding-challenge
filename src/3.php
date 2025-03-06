 <?php
// Return a random number between 1 and 10
function getRandomNumber() {
    return rand(1, 10);
}

// Return a random word from an array of words
function getRandomWord($words) {
    return $words[array_rand($words)];
}

// Return a random string of a certain length
function getRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $string = '';

    for ($i = 0; $i < $length; $i++) {
        $string .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $string;
}
?>