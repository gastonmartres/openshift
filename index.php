<?php
printf("Welcome to the Matrix: %s...", $_SERVER['REMOTE_ADDR']);

printf("Or did you mean: %s...?", $_SERVER['HTTP_X_FORWARDED_FOR']);

printf("Hello, I'm %s...",$_SERVER['UNIQUE_ID']);
?>
