<?php
require __DIR__ . '/php/twig.php';

echo $twig->render('container.twig');
?>
<div class="container">
    <?php echo $twig->render('navbar.twig.php'); ?>

</body>
</html>