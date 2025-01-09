<?php
// Include firstpageUI and secondpageUI content
if (basename($_SERVER['PHP_SELF']) != 'default.php') {
  header('Location: default.php');
  exit();
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default Page</title>
    <link rel="stylesheet" href="styles.css"> <!-- Optional for CSS -->
</head>
<body>
    <!-- <header>
    </header> -->

    <main>
        <!-- First Page Section -->
        <section id="firstpage">
            <!-- <h2>First Page Content</h2> -->
            <?php include 'firstpageUI.php'; ?>
        </section>

        <!-- Divider -->
        <hr>

        <!-- Second Page Section -->
        <section id="secondpage">
            <!-- <h2>Second Page Content</h2> -->
            <?php include 'secondpageUI.php'; ?>
        </section>
    </main>

    <!-- <footer>
        <p>&copy; <?php echo date('Y'); ?> My Website. All rights reserved.</p>
    </footer> -->
</body>
</html>
