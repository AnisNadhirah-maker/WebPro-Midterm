<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <!-- You can include CSS files here -->
</head>
<body>
    <header>
        <h1>My Laravel App</h1>
        <!-- You can add a navigation bar here if needed -->
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?> <!-- This is where individual view content will be injected -->
    </main>

    <footer>
        <p>&copy; <?php echo e(date('Y')); ?> My Laravel App. All rights reserved.</p>
    </footer>
</body>
</html>
<?php /**PATH C:\laragon\www\PBKK-GROUP-PROJECT\resources\views/layout.blade.php ENDPATH**/ ?>