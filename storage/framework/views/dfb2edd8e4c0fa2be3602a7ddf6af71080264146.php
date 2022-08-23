<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/navbar.css'); ?>
        <link rel="shortcut icon" href="<?php echo e(asset('logos-iconos/NeoNica-favico.png')); ?>">
        <title>NeoNica360°</title>
    </head>
    <body class="antialiased">

        <header>
            <div id="navbar"></div>
        </header>

        <?php echo app('Illuminate\Foundation\Vite')('resources/js/jquery-3.6.0.min.js'); ?>
        <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
        <?php echo app('Illuminate\Foundation\Vite')('resources/js/navbar.js'); ?>
    </body>
</html>
<?php /**PATH C:\Users\Jose Chevez\Documents\Hackathon 2022\prototipo-1\resources\views/molde.blade.php ENDPATH**/ ?>