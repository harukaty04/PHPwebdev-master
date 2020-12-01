<?php

require('../app/functions.php');

define('FILENAME', '../app/messages.txt');

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  $message = trim( filter_input(INPUT_POST, 'message'));
$message = $message !== '' ? $message : '...';


$fp = fopen(FILENAME, 'a');
fwrite($fp,$message . "\n");
fclose($fp);

header('Location: http://localhost:8080/result.php');
exit;
}

// $colors = filter_input(INPUT_GET, 'color');
// // $color =isset($coloe ? $color : 'None selecter';
// $color =$color ?? 'None selected';

include('../app/_parts/_header.php');

$messages = file(FILENAME, FILE_IGNORE_NEW_LINES);
// $color = filter_input(INPUT_COOKIE, 'color') ?? 'transparent';

include('../app/_parts/_header.php');

?>

<ul>  
<?php foreach($messages as $message): ?> 
  <li><?= h($message); ?></li>
<?php endforeach; ?>
</ul>

<form action="" method="post">
  <input type="text" name="message">
  <button>Post</button>
</form>

<?php

include('../app/_parts/_footer.php');

