<!-- Connecting -->
<?php
$databaseName = 'KHUGHES2_labs';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$username = 'khughes2_writer';
$password = 'qffcXxC8jOf5';

$pdo = new PDO($dsn, $username, $password);
?>
<!-- Connection complete -->