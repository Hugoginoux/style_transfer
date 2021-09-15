<?php 
    $path_contenu_2=$_GET['contenu'];
    $path_style_2=$_GET['style'];
    $iter=$_GET['iter']
?>

<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css"/>
        <title>Picfusion</title>
    </head>

    <body>
        <header>
            <h1>Fusion d'images</h1>
        </header>

        <section id='affichage'>
            <div>
                <h3>Image de contenu</h3>
                <a href=<?php echo $path_contenu_2; ?>><img src=<?php echo $path_contenu_2; ?> class='images'/></a>
            </div>
            <div>
                <h3>Image de style</h3>
                <a href=<?php echo $path_style_2; ?>><img src=<?php echo $path_style_2; ?> class='images'/></a>
            </div>
        </section>
            <h3>Image fusionnee</h3>
            <?php
                $output=null; $result=null;
                set_time_limit(36000);
                exec('py fusion.py '.$path_contenu_2.' '.$path_style_2.' '.$iter, $output, $result);
                //echo $result; print_r($output);
            ?>
            <a href='images/fusion.jpg'><img src='images/fusion.jpg' class='images'/></a>
        <section>

        </section>

        <section style='padding-top:50px;'>
            <a href='index.php'><button class='button'>Changer d'images</button></a>
            <a href='images/fusion.jpg' download='image_fusionnee.jpg'><button class='button'>Telecharger</button></a>
        </section>
    </body>
</html>