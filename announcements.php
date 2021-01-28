<?php
// Start session
session_start();
// If the user is not logged in redirect to the login page
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ανακοινώσεις</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="page_container">
        <?php include('header_menu.php') ?>

        <div class="main_content_block center">
            <div class="content_container" id="announcements_container">
                <!-- Only show "create announcement" link if logged in user is tutor -->
                <!-- <?php if ($_SESSION['user_role'] == 'tutor')
                    echo "<div><p>Νέα Ανακοίνωση</p></div>";
                ?> -->
                <div>
                    <p><a href="new_announcement_form.php">Νέα Ανακοίνωση</a></p>
                </div>
                <ul class="object_list" id="announcements_list">
                    <li class="object_list_item">
                        <div class="object_container">
                            <h2 class="announcement_header">Ανακοίνωση 1</h2>
                            <div>
                                <p class="announcement_field">Ημερομηνία: 12/12/2008 </p>
                                <p class="announcement_field">Θέμα: Έναρξη μαθημάτων</p>
                                <p class="announcement_field">Τα μαθήματα αρχίζουν την Δευτέρα 17/12/2008</p>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <button onclick="scroll_top()" id="top_btn" title="Back To Top">Back to top</button>
    </div>
</body>
<script src="js/script.js"></script>

</html>