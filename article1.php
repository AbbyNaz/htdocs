<?php include('includes/homepage___header.php'); ?>

<?php include('includes/homepage___navbar.php'); ?>

<!--CSS for articles page-->
<link rel="stylesheet" href="./css/homepage_articles___style.css">

<section class="articles">
    <br><br>
    <h2>Growth Mindset</h2>
    <h3 style="text-align: center;">Eliminating Fear of Failure</h3>

    <div class="container articles__container">

        <!-- <?php
        include_once("connections/connection.php");

        $con = connection();

        date_default_timezone_set('Asia/Manila');
        $month = date("F");
        $query = "SELECT * FROM articles WHERE DURATION = '$month' LIMIT 9";
        $query_run = mysqli_query($con, $query);

        if (mysqli_num_rows($query_run) > 0) {
            foreach ($query_run as $row) {
        ?> -->

                <article class="article">
                    <div class="article__image">
                        <img src="<?php echo $row['PICTURE']; ?>" style="width:100%; margin-top: 20px; margin-bottom: 20px;">
                    </div>
                    <div class="article__info">
                        <h4><?= $row['TITLE'] ?></h4>
                        <p><?= $row['DESCRIPTION'] ?></p>
                        <a href="homepage___articles.php" class="btn btn-primary">Read More</a>
                    </div>
                </article>
            <?php

            }
        } else {
            ?>
            <p>There was no articles at this time.</p>
        <?php
        }
        ?>
    </div>
</section>
<!--=========================END OF ARTICLES=============================-->


<?php include('includes/homepage___footer.php'); ?>

<?php include('includes/homepage___scripts.php') ?>