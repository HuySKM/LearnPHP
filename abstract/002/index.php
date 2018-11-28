<?php
require "Cars.class.php";

$camry = new Camry();

echo "<br>" . $camry->engine();
echo "<br>" . $camry->body ( array('Red', 'Green', 'Orange', 'Black', 'White', 'Brow'));