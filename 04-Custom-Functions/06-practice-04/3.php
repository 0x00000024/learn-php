<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

    <section class="content">

    <aside class="col-xs-4">

        <?php Navigation(); ?>

    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">

        <?php

        /*
            Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

            Step 2: Make a for loop that displays 10 numbers

            Step 3: Make a switch Statement that test against one condition with 5 cases
        */

        if (1 < 2) {
            echo "I love PHP!" . "<br>";
        } elseif (1 > 2) {
            echo "fdklsf";
        } else {
            echo "fjdskf";
        }

        for ($i = 1; $i <= 10; $i++) {
            echo $i . "<br>";
        }

        $opt = 1;
        switch ($opt) {
            case 1:
                echo "1";
                break;
            case 2:
                echo "2";
                break;
            case 3:
                echo "3";
                break;
            case 4:
                echo "4";
                break;
            case 5:
                echo "5";
                break;
            default:
                break;
        }
        ?>


    </article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>