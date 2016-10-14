<?php
require __DIR__ . '/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__.'\template');
$twig = new Twig_Environment($loader, array(
    'cache' => '/path/to/compilation_cache',
));

echo $twig->render('navbar.twig');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple CMS</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <!--Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <?php echo $twig->render('navbar.twig');?>
    </div>
</body>
</html>