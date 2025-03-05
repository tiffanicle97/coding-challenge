function getRandomCode() {
  // Generate a random number between 1 and 999
  $randomNumber = mt_rand(1, 999);

  // Return the random number as a string
  return (string) $randomNumber;
}
