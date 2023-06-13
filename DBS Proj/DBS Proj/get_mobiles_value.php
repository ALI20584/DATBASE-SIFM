<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | SIFM</title>
    <link rel="shortcut icon" href="/pics/360_F_524673483_l6BieJxFUe0acXaVt6CJbjBTCBtxrI4U.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <menu>
            <h1>SIFM</h1>
        </menu>
        <div class="back">
            <p></p>
        </div>

    </header>
    <main>
        <div class="Mobiles">
            <div class="Mob Mob1">
                <a href="/mob/mob1.html">
                    <img src="/pics/download (2).jpeg" alt="img1">
                </a>
                <h3>Iphone 12</h3>
                <input type="hidden" name="mobile[]" value="<?php echo generateValue(); ?>">
            </div>
            <div class="Mob Mob2">
                <a href="/mob/mob2.html">
                    <img src="/pics/download (1).jpeg" alt="img2">
                </a>
                <h3>Iphone 14</h3>
                <input type="hidden" name="mobile[]" value="<?php echo generateValue(); ?>">
            </div>
            <div class="Mob Mob2">
                <a href="/mob/mob2.html">
                    <img src="/pics/download (1).jpeg" alt="img2">
                </a>
                <h3>Iphone 13</h3>
                <input type="hidden" name="mobile[]" value="<?php echo generateValue(); ?>">
            </div>
            <div class="Mob Mob3">
                <a href="/mob/mob2.html">
                    <img src="/pics/download (1).jpeg" alt="img2">
                </a>
                <h3>Iphone 12</h3>
                <input type="hidden" name="mobile[]" value="<?php echo generateValue(); ?>">
            </div>
            <div class="Mob Mob4">
                <a href="/mob/mob2.html">
                    <img src="/pics/download (1).jpeg" alt="img2">
                </a>
                <h3>Iphone 11</h3>
                <input type="hidden" name="mobile[]" value="<?php echo generateValue(); ?>">
            </div>
            <div class="Mob Mob5">
                <a href="/mob/mob2.html">
                    <img src="/pics/download (1).jpeg" alt="img2">
                </a>
                <h3>Iphone xs</h3>
                <input type="hidden" name="mobile[]" value="<?php echo generateValue(); ?>">
            </div>
            <!-- Add similar hidden input fields for other mobiles -->
        </div>
        <form action="process.php" method="GET">
            <button type="submit"><p class="Total">Submit</p></button>
        </form>
    </main>

    <?php
    function generateValue() {
        $mobiles = array("Iphone 12", "Iphone 14", "Mi 13 Ultra", "Pixel 7", "Vivo v21", "Iphone X", "Poco F3", "Samsung S23", "Samsung A73", "Pixel 4a");
        $randomIndex = array_rand($mobiles);
        return $mobiles[$randomIndex];
    }
    ?>
</body>
</html>
