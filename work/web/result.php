<?php

require('../app/functions.php');
$message = trim( filter_input(INPUT_POST, 'message'));
$message = $message !== '' ? $message : '...';

$filename = '../app/messages.txt';
$fp = fopen($filename, 'a');

fwrite($fp,$message . "\n");
fclose($fp);

// $colors = filter_input(INPUT_GET, 'color');
// // $color =isset($coloe ? $color : 'None selecter';
// $color =$color ?? 'None selected';

include('../app/_parts/_header.php');

?>

<p>Message added!</p>
<p><a href="index.php">Go back</a></p>

<?php

include('../app/_parts/_footer.php');

