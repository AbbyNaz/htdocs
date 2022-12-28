<?php include('includes/homepage___header.php'); ?>
<?php include('includes/homepage___navbar.php'); ?>

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
            <img src="./images/article/dec1.png" class="center"><br>
            <h2 style="color: black;">Achievements that we should share together</h2>
            <p align="justify" style="color: black; font-size: 18px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptate qui, voluptatibus aliquam nihil quae amet dolor magnam, atque porro eos cumque dolores enim corrupti quia. Veniam praesentium, maiores nisi exercitationem pariatur, illum natus deleniti animi dolor asperiores eveniet laborum quos aut fugiat dolores accusantium molestias sequi delectus ut magni optio perferendis debitis. Ut quibusdam, quod delectus dolor fuga omnis esse repellendus aperiam vitae, neque facilis quidem rem soluta reiciendis nihil sunt culpa necessitatibus doloribus tempora quae dignissimos exercitationem perferendis officiis quis? Accusamus ipsam labore tenetur dolor voluptate doloremque maxime quia eum eaque ipsa sequi eveniet corporis quo illum necessitatibus perferendis magni commodi, enim esse numquam! Expedita in explicabo quos consequuntur veniam et magni commodi voluptatibus nesciunt possimus error architecto fuga odit, vero iste aliquam voluptates sint modi id placeat vitae deserunt eveniet. Numquam possimus labore debitis laboriosam optio consectetur voluptas atque quas aspernatur ullam est fugit, sit repellendus aut consequuntur voluptatum cum minus vero nesciunt mollitia perferendis! Corporis rem sunt itaque nam deserunt quasi similique labore perferendis fugit consequatur ea molestias, vitae modi ullam adipisci sit cumque veritatis. Soluta, dignissimos quaerat. Non animi fugit dignissimos nobis voluptatibus rerum deleniti laboriosam maiores. Debitis vero explicabo sed? Odit, impedit porro? Nostrum!</p>
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

            </div>

        </div>

    </div>
</section>
<!--=========================END OF MID SECTION 1=============================-->


<?php include('includes/homepage___footer.php'); ?>

<?php include('includes/homepage___scripts.php') ?>