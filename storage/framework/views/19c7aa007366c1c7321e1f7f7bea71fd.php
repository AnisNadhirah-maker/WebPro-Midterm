<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy"
        content="default-src 'self'; style-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net">

    <title>Welcome to Laravel 11 - CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Welcome to Laravel 11</h1>
                <p class="lead">This is a simple welcome page built with Laravel and Bootstrap with CRUD functions.
                </p>
                <a href="<?php echo e(url('/authors')); ?>" class="btn btn-primary">Go to CRUD</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGFz3CDP6HDWzJ5kwiFf5l5nUsWnw8ATpLqcfEI9Ap6E" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH /home/ch/web/crud-laravel.codinghelper.tech/public_html/resources/views/welcome.blade.php ENDPATH**/ ?>