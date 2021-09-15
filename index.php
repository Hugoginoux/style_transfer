<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css"/>
        <title>Picfusion</title>
        
    </head>

    <body>
        <script type='text/javascript' src='script.js'></script>
        <header>
            <h1>Fusion d'images</h1>
        </header>
        <section>
            <form action="afficher.php" method="post" id="form" enctype="multipart/form-data">

            <ul id="images">
                <li><label for="contenu" class="button">Image de contenu</label>
                <input type="file" name="contenu" style="display:none;" class="uploads" id="contenu" accept="image/*" multiple='false'></li>
                <li><div class="button" id="button_mid" style="width:270px;height:30px;"><label for="iterations" style="font-family:gears;color:black;">Nombre d'iterations</label>
                <input type="number" id="iterations" name="iterations" min="1" max="1000" value="10" style="color:black;margin-top:15px;"/></div></li>
                <li><label for="style" class="button">Image de style</label>
                <input type="file" name="style" style="display:none;" class="uploads" id="style" accept="image/*" multiple='false'></li>
            </ul>

            <input type="submit" name="valid" id="valid" class="button" value="Valider"/>
            <!-- <button type="submit" name='valid' id="valid" class="button">Valider</button> -->

            </form>
        </section>
    
    </body>
</html>