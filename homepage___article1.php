<?php include('includes/homepage___header.php'); ?>
<?php include('includes/homepage___navbar.php'); ?>

<style>
    /* =============================MID SECTION (articles)===============================*/
    .about__articles {
        margin-top: 3rem;
    }

    .about__articles-container {
        display: grid;
        grid-template-columns: 80% 20%;
        gap: 3rem;
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
            <img src="./images/samplepic_achievements.png" style="width: 100px; height: 100px;">
            <p>Achievements that we have should be shared</p>
        </div>

        <div class="about__articles-right">
            <h4>More Articles</h4>
            <br>

            <div class="articles__cards">

                <article class="article__card">
                    <div class="article__image">
                        <img src="images/article/dec1.png" style="width:100%; margin-top: 20px; margin-bottom: 20px;">
                    </div>
                    <div class="article__info">
                        <h4>Growth Mindset</h4>
                        <br>
                        <a href="homepage___article1.php" class="btn btn-primary">Read More</a>
                    </div>
                </article>

                <article class="article__card">
                    <div class="article__image">
                        <img src="images/article/dec1.png" style="width:100%; margin-top: 20px; margin-bottom: 20px;">
                    </div>
                    <div class="article__info">
                        <h4>Growth Mindset</h4>
                        <br>
                        <a href="homepage___article1.php" class="btn btn-primary">Read More</a>
                    </div>
                </article>

                <article class="article__card">
                    <span class="article__icon">
                        <i class="uil uil-users-alt"></i>
                    </span>
                    <h3>800+</h3>
                    <p>Students</p>
                </article>

            </div>

        </div>

    </div>
</section>
<!--=========================END OF MID SECTION 1=============================-->


<?php include('includes/homepage___footer.php'); ?>

<?php include('includes/homepage___scripts.php') ?>