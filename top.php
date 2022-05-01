<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>
<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="utf-8">
        <title>Site Title</title>
        <meta name="author" content="Dakota Smith">
        <meta name="description" content="In the chaos of today's world, 
        spreading acts of kindness can make a positive impact, learn more here.">
        <!-- Description is 107 characters, tries to promote a call to action -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 800px)" href="css/custom-tablet.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 600px)" href="css/custom-phone.css?version=<?php print time(); ?>" type="text/css">
    </head>
    <?php
    print '<body class="index" id="' . $pathParts['filename'] . '">';
    print '<!-- ################    Start of Body Element   ############## -->';
    include 'connect-DB.php';
    print PHP_EOL;
    include 'header.php';
    print PHP_EOL;
    ?>
        