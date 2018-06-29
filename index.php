<?php
printf("Welcome to the Matrix: %s...", $_SERVER['REMOTE_ADDR']);

printf("Or did you mean: %s...?", $_SERVER['HTTP_X_FORWARDED_FOR']);

printf("Perhaps %s...?", $_SERVER['HTTP_CLIENT_IP']);

print_r($_SERVER);

?>
