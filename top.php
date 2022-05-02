<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>
<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="utf-8">
        <title>Project Miata</title>
        <link rel="icon" type="image/x-icon" href="../final/images/favicon.ico">
        <meta name="author" content="Dakota Smith and Kat Hughes">
        <meta name="description" content="Learn all about the Mazda Miata,
        and give suggestions for Kat's new project.">
        <!-- Description is 107 characters, tries to promote a call to action -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 800px)" href="css/custom-tablet.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 600px)" href="css/custom-phone.css?version=<?php print time(); ?>" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    </head>
    <?php
    print '<body class="index" id="' . $pathParts['filename'] . '">';
    print '<!-- ################    Start of Body Element   ############## -->';
    include 'connect-DB.php';
    print PHP_EOL;
    include 'header.php';
    print PHP_EOL;
    ?>
        