<?php
// contact.php
// Contact page with form + PHP sanitizing + validation + user defined function 

// Set page title BEFORE header include
$pageTitle = "Contact Us | Jaxon's Jewelry";

// User Defined Function
// Sanitizes input by:
// 1. trimming extra spaces
// 2. removing HTML/PHP tags
// 3. converting special characters to HTML entities 

function clean_input($value) {
    $value = trim($value);
    $value = strip_tags($value); // removes HTML and PHP tags
    $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); 
    return $value;
}

// Variables 

$name = "";
$email = "";
$topic = "";
$message = "";

// Arrays for errors and success
$errors = [];
$success = "";

// If the form was submitted, the method will be POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // GET the form data and clean it using our function
    $name = clean_input($_POST["name"] ?? "");
    $email = clean_input($_POST["email"] ?? "");
    $topic = clean_input($_POST["topic"] ?? "");
    $message = clean_input($_POST["message"] ?? "");

    // VALIDATION (check required fields)
    if ($name == "") {
        $errors[] = "Name is required.";
    }

    if ($email == "") {
        $errors[] = "Email is required.";
    } else {
        // REGEX validation for email 
        $pattern = "/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/";

        if (!preg_match($pattern, $email)) {
            $errors[] = "Email must be in a valid format (example: name@gmail.com).";
        }
    }

    // Validate extra fields too 
    if ($topic == "") {
        $errors[] = "Please choose a topic.";
    }

    if ($message == "") {
        $errors[] = "Message is required.";
    }

    // If no errors, show success message
    if (empty($errors)) {
        $success = "Thank you, $name! We received your message and will reply soon.";

    }
}

?>

<!--Normal includes like the other pages-->
<?php include 'Includes/header.php'; ?>
 <?php include 'Includes/nav.php'; ?>

  <!-- Start of main section of page -->
  <main>
    <!--Header-->
    <section class="favorites">
        <h2>CONTACT US</h2>
        <p>We would love to hear from you! Let us know how we can meet your needs.</p>
      </section>

    <!--Show errors-->
    <?php if (!empty($errors)) : ?>
        <div style="text-align: center;" class="form-errors">
            <p><strong>Please fix the following!</strong></p>
            <ul>
                <?php foreach ($errors as $err) : ?>
                    <li><?= $err; ?></li>
                    <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>

    <!--Show success message-->
    <?php if ($success != "") : ?>
        <div style="text-align: center;" class="form-success">
            <p><strong><?= $success; ?></strong></p>
        </div>
        <?php endif; ?>

<!--Contact Form-->
<section class="form-section" style="width: 500px; margin: 0 auto;">
    <form method="post" action="contact.php">

        <!--Name-->
        <p>
            <label for="name">Full Name</label><br/>
            <input style="width: 500px; padding: 10px; font-size: 16px;" type="text" id="name" name="name" value="<?= $name; ?>">
        </p>

        <!--Email-->
        <p>
            <label for="email">Email Address</label><br/>
            <input style="width: 500px; padding: 10px; font-size: 16px;" type="text" id="email" name="email" value="<?= $email; ?>">
        </p>

        <!--Topic-->
        <p>

        <label for="topic">Topic</label><br/>
        <input style="width: 500px; padding: 10px; font-size: 16px;" type="text" id="topic" name="topic" value="<?= $topic; ?>">

        </p>

        <!--Message-->
        <p>
            <label for="message">Write a Message Here</label><br/>
            <textarea style="width: 500px; padding: 10px; font-size: 16px; font-family:'Arial', serif;"id="message" name="message" rows="6"><?= $message; ?></textarea>
        </p>

        <p>
            <button class="btn" type="submit">SEND MESSAGE</button>
        </p>
    </form>
    </section>

</main>

<?php include 'Includes/footer.php'; ?>

