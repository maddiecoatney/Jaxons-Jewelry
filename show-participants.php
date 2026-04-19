<?php
// SHOW ERRORS
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// DATABASE LOGIN INFO
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "JaxonJewelry";

// CONNECT TO DB
$conn = new mysqli($servername, $username, $password, $dbname);

// 2 DIMENSIONAL ARRAY
$birthstones = array(
    array("January", "Garnet"),
    array("February", "Amethyst"),
    array("March", "Aquamarine"),
    array("April", "Diamond"),
    array("May", "Emerald"),
    array("June", "Pearl"),
    array("July", "Ruby"),
    array("August", "Peridot"),
    array("September", "Sapphire"),
    array("October", "Opal"),
    array("November", "Topaz"),
    array("December", "Tanzanite"),
);

// GET ALL RECORDS FROM THE TABLE 
$sql = "SELECT first_name, last_name, phone, birthdate FROM participants";
$result = $conn->query($sql);

// GET TOTDAY'S DATE
$todays_date = date("n/j/Y");
?>

 <?php 
 // Set the page title BEFORE including the header 
 $pageTitle = "Registered Participants | Jaxon's Jewelry";
 ?>

 <?php include 'Includes/header.php'; ?>
 <?php include 'Includes/nav.php'; ?>
 
 <!-- Start of main section of page -->
  <main class="birthstone-page">
    <div class="favorites">
    <section class="participants-section">
        <h1 class="registered">REGISTERED PARTICIPANTS</h1>
</div>
    </section>
    <p class="registered-text">
        As of today, <?php echo $todays_date; ?>, the following participants are registered:
    </p>

    <table>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>DOB</th>
            <th>Area Code</th>
            <th>Eligible</th>
            <th>Birth Month</th>
            <th>Birthstone</th>
        </tr>

        <?php
        // CHECK IF THERE ARE RECORDS
        if ($result->num_rows > 0) {

            // LOOP THROUGH EACH ROW
            while ($row = $result->fetch_assoc()) {
                
                // PUT FIRST AND LAST NAME TOGETHER
                $full_name = $row["first_name"] . " " . $row["last_name"];

                // GET PHONE AND DOB
                $phone = $row["phone"];
                $dob = $row["birthdate"];

                // GET AREA CODE 
                $area_code = substr($phone, 0, 3);

                // CHECK ELIGIBILITY
                if ($area_code == "325") {
                    $eligible = "Yes";
                } else {
                    $eligible = "No";
                }

                // GET MONTH NUMBER FROM DOB
                $month_number = substr($dob, 5, 2);

                // CHANGE MONTH NUMBER INTO ARRAY POSTION
                $month_index = (int)$month_number - 1;

                // GET BIRTH MONTH AND BIRTHSTONE FROM THE ARRAY
                $birth_month = $birthstones[$month_index][0];
                $birthstone = $birthstones[$month_index][1];

                // SHOW THE ROW
                echo "<tr>";
                echo "<td>" . htmlspecialchars($full_name) . "</td>";
                echo "<td>" . htmlspecialchars($phone) . "</td>";
                echo "<td>" . htmlspecialchars($dob) . "</td>";
                echo "<td>" . htmlspecialchars($area_code) . "</td>";
                echo "<td>" . htmlspecialchars($eligible) . "</td>";
                echo "<td>" . htmlspecialchars($birth_month) . "</td>";
                echo "<td>" . htmlspecialchars($birthstone) . "</td>";
                echo "</tr>";

            }
        } else {
            echo "<tr>";
            echo "<td colspan='7'>No participants found.</td>";
            echo "</tr>";
        }

        $conn->close();
        ?>
    </table>
    <p class="back-link">
        <a href="birthstone.php">Back to Birthstone Form</a>
    </p>
</section>
</main>
</body>
</html>
  