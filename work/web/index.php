<?php

require('../app/functions.php');

$color = 'transparent';

include('../app/_parts/_header.php');

?>

<form action="result.php" method="get">
  <label><input type="radio" name="colors[]"  value="orange">Orange </label>
  <label><input type="radio" name="colors[]"  value="pink">Pink </label>
  <label><input type="radio" name="colors[]"  value="gold">Gold</label>
  <button>Send</button>
</form>
<?php

include('../app/_parts/_footer.php');

