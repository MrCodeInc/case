<title>Case Opener</title>
Case Opener
<p> </p>
<?php
$messages = array(
    'You got a noodle!',
    'You got some ice cream!',
    'You got mail!',
    'You got a php code!',
    'You got two number 9s, a number 9 large, a number 6 with extra dip, a number 7, two number 45s, one with cheese, and a large soda!',
    'You got a MrCodeInc!',
    'You got a meme!',
    'You got nothing.'
);
echo $messages[rand(0, count($messages) - 1)];
?>

<form action="index.php" method="get">
  <input type="submit" value="Go back">
</form>
