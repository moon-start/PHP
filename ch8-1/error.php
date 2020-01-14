<?php
function my_error_handler($error_no, $error_msg) {
  echo "Opps, something went wrong:";
  echo "Error number: [$error_no]";
  echo "Error Description: [$error_msg]";
}

## Opps, something went wrong:Error number: [2]Error Description: [Division by zero]INF
set_error_handler("my_error_handler");
echo (5 / 0);
?>