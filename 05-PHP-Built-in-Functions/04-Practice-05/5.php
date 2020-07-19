<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
    <section class="content">

    <aside class="col-xs-4">
        <?php Navigation(); ?>


    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">


        <?php

        /*
            Step 1: Use a pre-built math function here and echo it

            Step 2: Use a pre-built string function here and echo it

            Step 3: Use a pre-built Array function here and echo it
        */

        echo pow(2, 4) . "<br>";

        $string = "hi";
        echo strtoupper($string). "<br>";

        $list = [12, 34];
        echo max($list). "<br>";

        ?>


    </article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>