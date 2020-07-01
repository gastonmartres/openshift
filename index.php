<?php
printf("Welcome to the Matrix: %s...", $_SERVER['REMOTE_ADDR']);
printf("\n");
printf("Or did you mean: %s...?", $_SERVER['HTTP_X_FORWARDED_FOR']);
printf("\n");
printf("Hello, I'm %s...",$_SERVER['UNIQUE_ID']);
printf("\n");
?>
