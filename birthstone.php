<!-- birthstone.php -->
 <?php 
 // Set the page title BEFORE including the header 
 $pageTitle = "Birthstone Challenge | Jaxon's Jewelry";
 ?>

 <?php include 'Includes/header.php'; ?>
 <?php include 'Includes/nav.php'; ?>
 
 <!-- Start of main section of page -->
  <main>
    <section class="favorites">
        <h2>BIRTHSTONE CHALLENGE</h2>
        <p>Enter for our open house celebration!</p>
        </section>
        <section class="birthstone-container">

        <form action="process-birthstone.php" method="post">

        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name" required>

        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name" required>

        <label for="phone">Phone Number</label>
        <input type="tel" name="phone" id="phone" placeholder="999-999-9999" required>

        <label for="birthdate">Birthdate</label>
        <input type="date" name="birthdate" id="birthdate" required>

        <input type="submit" value="Submit">
        </form>

        <p class="participants-link">
            <a href="show-participants.php">Show Participants</a>
        </p>
      </section>
</main>
<?php include 'Includes/footer.php'; ?>