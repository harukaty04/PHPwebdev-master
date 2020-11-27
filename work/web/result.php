<?php

require('../app/functions.php');

$colors = filter_input(INPUT_GET, 'color');
// $color =isset($coloe ? $color : 'None selecter';
$color =$color ?? 'None selected';
$colors = filter_input()

include('../app/_parts/_header.php');

?>

<p><?= h($colors); ?></p>
<p><a href="index.php">Go back</a></p>



<?php

include('../app/_parts/_footer.php');

