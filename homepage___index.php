<?php
include('includes/homepage___header.php');
?>

<!--=========================START OF NAVBAR=============================-->
<nav>
    <div class="container nav__container">
        <a href="homepage___index.php">
            <!-- <img src="images/sti_logo.png"/> -->
            <h4>Guidance and Counseling Office</h4> 
        </a>
        <ul class="nav__menu">
            <li><a href="homepage___index.php">Home</a></li>
            <!-- <li><a href="homepage___about.php">About</a></li> -->
            <li><a href="homepage___articles.php">Articles</a></li>
            <!-- <li><a href="individual_inventory_form.php">Registration</a></li> -->

            <li><button class="login-btn"><a href="loginForm.php">Login</a></button></li>
            <!-- data-target="#loginform" data-toggle="modal" -->
        </ul>
        <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
        <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
    </div>

</nav>

<!--=========================START OF HEADERS=============================-->
<header>

    <div class="container header__container">
        <div class="header__left">
            <h1>Grow your skills to advance your career path</h1>
            <p>
                You can gain and improve skills with education and experience. The more advanced you are in performing certain skills, the more likely you are to get or progress in a job. </p>
            <a href="loginForm.php" class="btn btn-primary">Get Started</a>
        </div>

        <div class="header__right">
            <div class="header__right-image">
                <img src="./images/headersample.jpg">
            </div>
        </div>
    </div>

</header>
<!--==========================END OF HEADER===============================-->


<!--=========================START OF SERVICES=============================-->
<section class="categories">
    <div class="container categories__container">
        <div class="categories__left">
            <h1>Guidance and Counseling Office Services</h1>
            <p>
                The major aim of Guidance Counseling Services is to encourage students academic, social, emotional and personal development. To reach this aim, guidance counseling services help students get to know themselves better and find effective solutions to their daily problems.
            </p>
            <!-- <a href="#" class="btn">Learn More</a> -->
        </div>

        <div class="categories__right">
            <article class="category">
                <span class="category__icon"><i class="uil uil-book-open"></i></span>
                <h5>Guidance and Counseling</h5>
                <p> You can gain and improve skills with education and experience.</p>
                </p>
            </article>

            <article class="category">
                <span class="category__icon"><i class="uil uil-info-circle"></i></span>
                <h5>Information Service</h5>
                <p>Information services aim to provide valuable information to guide student learning activities and reduce learning issues. </p>
            </article>

            <article class="category">
                <span class="category__icon"><i class="uil uil-user-circle"></i></span>
                <h5>Individual Inventory Service</h5>
                <p>Individual Inventory Service is concerned with obtaining, collecting, and preserving personal and career information. </p>
            </article>

            <article class="category">
                <span class="category__icon"><i class="uil uil-user-md"></i></i></span>
                <h5>Career Guidance Service</h5>
                <p>Career Guidance Service refers to the support provided to students in achieving their career development.</p>
            </article>

            <article class="category">
                <span class="category__icon"><i class="uil uil-user-arrows"></i></span>
                <h5>Counseling Service</h5>
                <p>Counseling Service defines it as the interpersonal process that assists students in becoming more aware of themselves and their concerns.</p>
            </article>

            <article class="category">
                <span class="category__icon"><i class="uil uil-social-distancing"></i></span>
                <h5>Referral Service</h5>
                <p>Referral Service is a process that includes finding a suitable person to give preventative or intervention services to students who require assistance.</p>
            </article>
        </div>
    </div>
</section>
<!--=========================END OF SERVICES=============================-->




<!--=========================START OF ARTICLES=============================-->
<section class="articles">
    <br><br><br><br>
    <h2>Articles</h2>
    <div class="container articles__container">

        <?php
        include_once("connections/connection.php");

        $con = connection();
        $month = date("F");
        $query = "SELECT * FROM articles WHERE DURATION = '$month' AND ART_STATUS = 'ACTIVE' LIMIT 3 ";
        $query_run = mysqli_query($con, $query);

        if (mysqli_num_rows($query_run) > 0) {
            foreach ($query_run as $row) {
        ?>

                <article class="article">
                    <div class="article__image">
                        <img src="<?php echo $row['PICTURE']; ?>">
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




<!--=========================START OF FAQS=============================-->
<section class="faqs">
    <h2>Frequently Asked Questions</h2>
    <div class="container faqs__container">

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
                <h4>What is Guidance and Counseling ?</h4>
                <p>Guidance is usually the general process of guiding someone through counseling or other problem-solving. In contrast, counseling refers specifically to the process of counseling by a professional counselor based on people's personal or psychological problems.</p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
                <h4>What is Guidance and Counseling Office (GCO) ?</h4>
                <p>The Guidance and Counseling Office (GCO) refers to an Academic support department that encourages students' most significant potential degree of human growth and development by providing services that aid in this process.</p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
                <h4>What is Guidance and Counseling Services?</h4>
                <p>Guidance and Counseling Services help students make the most of their academic experience. Individual and group counseling services are available through the guidance office to assist students with various personal, educational, emotional, and professional difficulties.</p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
                <h4>What is Information Services</h4>
                <p>
                    Information Service cites that this is the giving of current, sufficient, correct, and essential information to students to enhance their academic, personal, social,
                    emotional, and career development to assist them in making proper plans and life- changing decisions are referred to as information services.
                </p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
                <h4>What is Referral Service?</h4>
                <p> Referral Service is a process that includes finding a suitable person to give preventative or intervention services to students who require assistance. Students with issues about their personal lives might be referred to a Guidance Counselor for necessary and appropriate action and assistance.</p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
                <h4>What is Individual Inventory Service?</h4>
                <p> Individual Inventory Service is concerned with obtaining, collecting, and preserving personal and career information and materials or output from guidance activities that students have participated in while in school. </p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
                <h4>What is Career Guidance Service?</h4>
                <p>Career Guidance Service refers to the support provided to students in achieving their career development through self-evaluation, career planning, and career preparation activities such as career counseling, assessment, and the provision of career-related data and information. </p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
                <h4>What is Counseling Service?</h4>
                <p> Counseling Service defines it as the interpersonal process that assists students in becoming more aware of themselves and their concerns and providing them with learning opportunities, understanding, and being accountable for their decisions and actions. Counseling service can be given to an individual or a small group.</p>
            </div>
        </article>

    </div>
</section>
<!--=========================END OF FAQS=============================-->

<!--=========================START OF TESTIMONIALS=============================-->
<!-- <section class="container testimonials__container mySwiper">
    <h2>Students Testimonials</h2>
    <div class="swiper-wrapper">
        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="./images/profiles/avatar1.jpg">
            </div>
            <div class="testimonial__info">
                <h5>Marian Rivera</h5>
                <small>Senior High School Student</small>
            </div>
            <div class="testimonial__body">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium voluptatibus quod ratione consequuntur molestiae aliquam eveniet laudantium veritatis doloribus, corporis consectetur. Aut illum obcaecati possimus quod ab hic totam tenetur!</p>
            </div>
        </article>

        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="./images/profiles/avatar2.jpg">
            </div>
            <div class="testimonial__info">
                <h5>Kathryn Bernardo</h5>
                <small>Information Technology Student</small>
            </div>
            <div class="testimonial__body">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium voluptatibus quod ratione consequuntur molestiae aliquam eveniet laudantium veritatis doloribus, corporis consectetur. Aut illum obcaecati possimus quod ab hic totam tenetur!</p>
            </div>
        </article>

        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="./images/profiles/avatar3.jpg">
            </div>
            <div class="testimonial__info">
                <h5>Daniel Padilla</h5>
                <small>Senior High School Student</small>
            </div>
            <div class="testimonial__body">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium voluptatibus quod ratione consequuntur molestiae aliquam eveniet laudantium veritatis doloribus, corporis consectetur. Aut illum obcaecati possimus quod ab hic totam tenetur!</p>
            </div>
        </article>

        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="./images/profiles/avatar4.jpg">
            </div>
            <div class="testimonial__info">
                <h5>Barbie Forteza</h5>
                <small>Tourism Student</small>
            </div>
            <div class="testimonial__body">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium voluptatibus quod ratione consequuntur molestiae aliquam eveniet laudantium veritatis doloribus, corporis consectetur. Aut illum obcaecati possimus quod ab hic totam tenetur!</p>
            </div>
        </article>

        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="./images/profiles/avatar5.jpg">
            </div>
            <div class="testimonial__info">
                <h5>Kim Chiu</h5>
                <small>Business Student</small>
            </div>
            <div class="testimonial__body">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium voluptatibus quod ratione consequuntur molestiae aliquam eveniet laudantium veritatis doloribus, corporis consectetur. Aut illum obcaecati possimus quod ab hic totam tenetur!</p>
            </div>
        </article>
    </div>
    <div class="swiper-pagination"></div>
</section> -->
<!--=========================END OF TESTIMONIALS=============================-->


<?php include('includes/homepage___footer.php'); ?>

<?php include('includes/homepage___scripts.php'); ?>