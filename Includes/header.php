<!-- Includes/header.php -->
 <?php
 // This file is included at the top of every page
 // It expects a variable called $pageTitle to already exist
 ?>

 <!DOCTYPE html>
 <html lang="en">
<head>
    <!--character encoding-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--php variable that displays the site title-->
    <title><?= $pageTitle; ?></title>
    <!-- link to CSS -->
    <link rel="stylesheet" href="CSS/styles.css">
    <!-- link to Google fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>
<body>

<?php if (!isset($showLogo) || $showLogo == true) { ?>
<a href="index.php" class="site-logo">
    <img style="display: block; margin: 20px 0 0 20px;" src="./Images/jaxon-jewelry-logo-small.png" alt="Jaxon's Jewelry black lettering logo">
</a>
<?php } ?>

    <div class="site-wrapper">