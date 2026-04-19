<!-- index.php -->
 <?php 
 // Set the page title BEFORE including the header 
 $pageTitle = "Home | Jaxon's Jewelry";

 $showLogo = false;
 ?>

 <?php include 'Includes/header.php'; ?>
 <?php include 'Includes/nav.php'; ?>

 <!-- Start of main section of page -->
 <main>
     <div class="hero-wrapper">
    <img src="Images/home-cover.jpg" alt="Woman wearing Jaxon's Jewelry earrings" class="hero-img">
    <img src="Images/jaxon-jewelry-logo.png" alt="Jaxon's Jewelry black lettering logo" class="hero-logo-overlay">
 </div>
     <!-- SHOP OUR FAVORITES -->
      <section class="favorites">
        <h2>SHOP OUR FAVORITES</h2>
      </section>

      <!-- RINGS SECTION -->
       <section class="product-section">
        <div class="product-row">
            <!-- FIRST RING -->
<figure class="product-card">
    <img src="Images/ring-home-1.jpg" alt="Jaxon's Jewelry Diamond Ring">
</figure>
  <!-- FIRST RING -->
<figure class="product-card">
    <img src="Images/ring-home-2.jpg" alt="Jaxon's Jewelry Diamond Ring 2">
</figure>
  <!-- FIRST RING -->
<figure class="product-card">
    <img src="Images/ring-home-3.jpg" alt="Jaxon's Jewelry Diamond Ring 3">
</figure>
        </div>
        <div class="section-button-wrapper">
            <a href="#" class="btn">RINGS</a>
        </div>
       </section>

    <!-- NECKLACES SECTION -->
<section class="product-section">
        <div class="product-row">
            <!-- FIRST NECKLACE -->
<figure class="product-card">
    <img src="Images/necklace-home-1.jpg" alt=" Jaxon's Jewelry Gold Necklace">
</figure>
  <!-- SECOND NECKLACE -->
<figure class="product-card">
    <img src="Images/necklace-home-2.jpg" alt=" Jaxon's Jewelry Gold Necklace 2">
</figure>
  <!-- THIRD NECKLACE -->
<figure class="product-card">
    <img src="Images/necklace-home-3.jpg" alt="Jaxon's Jewelry Gold Necklace 3">
</figure>
        </div>
        <div class="section-button-wrapper">
            <a href="#" class="btn">NECKLACES</a>
        </div>
       </section>

    <!-- EARRINGS SECTION -->
     <section class="product-section">
        <div class="product-row">
            <!-- FIRST EARRING -->
<figure class="product-card">
    <img src="Images/earring-home-1.jpg" alt="Jaxon's Jewelry Gold Earring">
</figure>
  <!-- SECOND EARRING -->
<figure class="product-card">
    <img src="Images/earring-home-2.jpg" alt="Jaxon's Jewelry Gold Earring 2">
</figure>
  <!-- THIRD EARRING -->
<figure class="product-card">
    <img src="Images/earring-home-3.jpg" alt="Jaxon's Jewelry Gold Earring 3">
</figure>
        </div>
        <div class="section-button-wrapper">
            <a href="#" class="btn">EARRINGS</a>
        </div>
       </section>
</main>
<?php 
include 'Includes/footer.php';
?>