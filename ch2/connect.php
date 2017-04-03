<?php

mysqli_connect('localhost', 'simtech', '') OR die('<p>Error DB connection:' .mysqli_error().'</p>');
echo '<p>You connected to MySQL</p>';
?>