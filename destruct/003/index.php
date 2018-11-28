<?php
require_once 'Database.class.php';
$db = new Database();
$result = $db->fetchAll('user_group');

while ($row = mysqli_fetch_assoc($result)) {
    echo '<br>' . $row['id'] . ' ' . $row['group_name'];
}