<!-- jewelry-care.php -->
 <?php 
 // Set the page title BEFORE including the header 
 $pageTitle = "Jewelry Care | Jaxon's Jewelry";
 ?>

 <?php include 'Includes/header.php'; ?>
 <?php include 'Includes/nav.php'; ?>

  <!-- Start of main section of page -->
  <main>
    <section class="favorites">
        <h2>JEWELRY CARE</h2>
        <p>Answer a few questions about how you wear your jewelry to see our care recommendation.</p>
      </section>

<!--FORM-->
<section class="product-section">
    <form method="post" action="" style="background-color: #68A6BD; padding: 30px 30px 30px 30px;">
        <p>
            <label for="jewelry-type" style="color: white;">Jewelry Type:</label><br>
            <select name="jewelry-type" id="jewelry-type" required>
                <option value="">--CHOOSE JEWELRY TYPE--</option>
                <option value="Ring">Ring</option>
                <option value="Necklace">Necklace</option>
                <option value="Earrings">Earrings</option>
                <option value="Bracelet">Bracelet</option>
            </select>
        </p>

        <p>
            <label for="frequency" style="color: white;">How Often Do You Wear It?</label><br>
               <select name="frequency" id="frequency" required>
                <option value="">--CHOOSE FREQUENCY--</option>
                <option value="Daily">Daily</option>
                <option value="Weekly">Several times a week</option>
                <option value="Rarely">Rarely</option>
            </select>
        </p>

        <p>
            <button type="submit" class="btn">VIEW CARE PLAN</button>
        </p>
    </form>
</section>

<?php
// Array 
// Basic care tips for each jewelry type

$careTips = [
    "ring" => "Have prongs and settings checked regularly to keep stones from falling out.",
    "necklace" => "Store necklace flat or handing to prevent knots and tangles in the chain.",
    "earrings" => "Clean earring posts regularly to keep them hygienic and shiny.",
    "bracelet" => "Avoid wearing bracelets during heavy activity to prevent scratches and/or dents."
];

// Loop
// Loop through array and print all general care tips
echo '<section class="product-section">';
echo '<h3>GENERAL CARE GUIDELINES</h3>';
echo '<ul>';
foreach ($careTips as $type => $tip) {
    echo "<li><strong>" . ucfirst($type) . ":</strong> $tip</li>";
}
echo '</ul>';
echo '</section>';

// Conditional Statement 
// Prints a custom message
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$selectedType = $_POST['jewelry-type'];
$frequency = $_POST['frequency'];

    echo "<h3>Your Care Recommendations</h3>";

    // This checks is the user selected both values
    if ($selectedType != "" && $frequency != "") {
        
    echo "You selected: " . $selectedType . "<br/>";
    echo "You wear this: " . $frequency . "<br/><br/>";


    // Daily Use
    if ($frequency == "daily") {
        echo "Because you wear this every day, we suggest cleaning it every 6 months.<br/>";
    }

    // Weekly Use
    elseif ($frequency == "weekly") {
        echo "Because you wear this several times a week, we suggest cleaning it every 12 months.<br/>";
    }

    // Rare Use
    else {
        echo "Because you wear this only on special occasions, cleaning every 18-24 months is fine.<br/>";
    }

    } else {
        echo "Please fill out both options in the form.";
    }
}


?>
<?php 
include 'Includes/footer.php';
?>