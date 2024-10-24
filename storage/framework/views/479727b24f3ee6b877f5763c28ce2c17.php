<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy"
        content="default-src 'self'; style-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net">

    <title>Keep your book up!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Add background image to the body */
        body {
            background-image: url('img/book.jpg');
            background-size: cover; /* Ensures the image covers the whole page */
            background-position: center; /* Centers the image */
            background-repeat: no-repeat; /* Prevents tiling of the image */
            height: 100vh; /* Sets the height to 100% of the viewport */
            color: white; /* Optional: Set text color to white for better contrast */
        }

        .container {
            padding-top: 100px;
        }

        h1 {
            color: #ffcc00; 
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8); 
        }

        p {
            color: #f0e68c; 
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8); 
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Welcome to our Book & Author Tracker!</h1>
                <p class="lead"><strong>This website helps you stay updated and allows you to update authors' works.</strong></p>
                <a href="<?php echo e(url('/authors')); ?>" class="btn btn-primary">Continue</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGFz3CDP6HDWzJ5kwiFf5l5nUsWnw8ATpLqcfEI9Ap6E" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH C:\Users\amira\Herd\group-project\resources\views/welcome.blade.php ENDPATH**/ ?>