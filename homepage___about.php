<?php include('includes/homepage___header.php'); ?>
<?php include('includes/homepage___navbar.php'); ?>

<style>
    /* =============================MID SECTION (ACHIEVEMENTS)===============================*/
    .about__achievements {
        margin-top: 3rem;
    }

    .about__achievements-container {
        display: grid;
        grid-template-columns: 40% 60%;
        gap: 5rem;
    } 

    .about__achievements-right>p {
        margin: 1.6rem 0 2.5rem;
    }

    .achievements__cards {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
    }

    .achievement__card {
        background: var(--color-bg1);
        padding: 1.6rem;
        border-radius: 1rem;
        text-align: center;
        transform: var(--transition);
    }

    .achievement__card:hover {
        background: var(--color-bg2);
        box-shadow: 0 3rem 3rem rgba(0, 0, 0, 0.3);
    }

    .achievement__icon {
        background: var(--color-danger);
        padding: 0.6rem;
        border-radius: 1rem;
        display: inline-block;
        margin-bottom: 2rem;
        font-stretch: 2rem;
    }

    .achievement__card:nth-child(2) .achievement__icon {
        background: var(--color-primary);
    }

    .achievement__card:nth-child(3) .achievement__icon {
        background: var(--color-success);
    }

    .achievement__card p {
        margin-top: 1rem;
    }


    /*=========================RESPONSIVE MEDIA QUERIES (TABLET)==========================*/
    @media screen and (max-width: 1024px) {
        .about__achievements {
            margin-top: 2rem;
        }

        .about__achievements-container {
            grid-template-columns: 1fr;
            gap: 4rem;
        }

        .about__achievements-left {
            width: 80%;
            margin: 0 auto;
        }

        .about__achievements-right h1 {
            text-align: center;
        }
    }





    /*=========================RESPONSIVE MEDIA QUERIES (PHONE)==========================*/
    @media screen and (max-width: 600px) {
        .achievements__cards {
            grid-template-columns: 1fr 1fr;
            gap: 0.7rem;
        }
    }
</style>

<!--=========================START OF MID SECTION 1=============================-->
<section class="about__achievements">
    <div class="container about__achievements-container">

        <div class="about__achievements-left">
            <img src="./images/samplepic_achievements.png">
        </div>

        <div class="about__achievements-right">
            <h1>Achievements</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates explicabo, dolorum beatae, sequi obcaecati ullam molestiae quod magni earum itaque ut doloribus tempora molestias minima architecto aut neque odio blanditiis a non optio sunt sint! Nisi facilis officiis veniam nam.</p>

            <div class="achievements__cards">

                <article class="achievement__card">
                    <span class="achievement__icon">
                        <i class="uil uil-users-alt"></i>
                    </span>
                    <h3>800+</h3>
                    <p>Students</p>
                </article>

                <article class="achievement__card">
                    <span class="achievement__icon">
                        <i class="uil uil-users-alt"></i>
                    </span>
                    <h3>800+</h3>
                    <p>Students</p>
                </article>

                <article class="achievement__card">
                    <span class="achievement__icon">
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