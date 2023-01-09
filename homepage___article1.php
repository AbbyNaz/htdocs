<?php include('includes/homepage___header.php'); ?>
<?php include('includes/homepage___navbar.php');
$ArtID = $_GET['id'];
include_once("connections/connection.php");

$con = connection();

$query = "SELECT * FROM articles WHERE ID = $ArtID";
$query_run = mysqli_query($con, $query);
$article = mysqli_fetch_assoc($query_run);
?>

<style>
    /* =============================MID SECTION (articles)===============================*/
    .center{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        height: 300px;
    }
    
    .about__articles {
        margin-top: 3rem;
    }

    .about__articles-container {
        display: grid;
        grid-template-columns: 80% 20%;
        gap: 5rem;
    }

    .about__articles-right>p {
        margin: 1.6rem 0 2.5rem;
    }

    .articles__cards {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        gap: 1.5rem;
    }

    .article__card {
        background: var(--color-bg1);
        padding: 1rem;
        border-radius: 1rem;
        text-align: center;
        transform: var(--transition);
    }

    .article__card:hover {
        background: var(--color-bg2);
        box-shadow: 0 3rem 3rem rgba(0, 0, 0, 0.3);
    }

    .article__icon {
        background: var(--color-danger);
        padding: 0.6rem;
        border-radius: 1rem;
        display: inline-block;
        margin-bottom: 2rem;
        font-stretch: 2rem;
    }

    .article__card:nth-child(2) .article__icon {
        background: var(--color-primary);
    }

    .article__card:nth-child(3) .article__icon {
        background: var(--color-success);
    }

    .article__card p {
        margin-top: 1rem;
    }


    /*=========================RESPONSIVE MEDIA QUERIES (TABLET)==========================*/
    @media screen and (max-width: 1024px) {
        .about__articles {
            margin-top: 2rem;
        }

        .about__articles-container {
            grid-template-columns: 1fr;
            gap: 4rem;
        }

        .about__articles-left {
            width: 80%;
            margin: 0 auto;
        }

        .about__articles-right h1 {
            text-align: center;
        }
    }


    /*=========================RESPONSIVE MEDIA QUERIES (PHONE)==========================*/
    @media screen and (max-width: 600px) {
        .articles__cards {
            grid-template-columns: 1fr 1fr;
            gap: 0.7rem;
        }
    }
</style>

<!--=========================START OF MID SECTION 1=============================-->
<section class="about__articles">
    <div class="container about__articles-container">

        <div class="about__articles-left">
            <img src="../Guidance_Counselor_UI/show_article_image.php?AID=<?= $article['ID'] ?>" class="center"><br>
            <h2 style="color: black;"><?= $article['TITLE'] ?></h2>
            <p align="justify" style="color: black; font-size: 18px;"><?= $article['DESCRIPTION'] ?></p>
        </div>

        <div class="about__articles-right">
            <h4>More Articles</h4>
            <br>

            <div class="articles__cards">
            <?php
            
            $month = date("F");
            $getOtherArt = "SELECT * FROM articles WHERE DURATION = '$month' AND ART_STATUS = 'ACTIVE' AND ID NOT LIKE '%$ArtID%' LIMIT 2 ";
            $getArt = mysqli_query($con, $getOtherArt);

            


            if (mysqli_num_rows($getArt) > 0) {
                foreach ($getArt as $row) {
                    $description = explode(".", $row['DESCRIPTION']);
            ?>

                <article class="article__card">
                    <div class="article__image">
                        <img src="../Guidance_Counselor_UI/show_article_image.php?AID=<?php echo $row['ID']; ?>" style="width:100%; margin-top: 20px; margin-bottom: 20px;">
                    </div>
                    <div class="article__info">
                        <h4><?= $row['TITLE'] ?></h4>
                        <br>
                        <a href="homepage___article1.php?id=<?= $row['ID'] ?>" class="btn btn-primary">Read More</a>
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

        </div>

    </div>
</section>


<!--=========================END OF MID SECTION 1=============================-->


<?php include('includes/homepage___footer.php'); ?>

<?php include('includes/homepage___scripts.php') ?>