<?php get_header() ?>
    <div class="hero text-center">
        <h1 class="hero-name">
            Hello, my name is <span class="myName">Andrius</span>
        </h1>
        <h3 class="hero-welcome">Welcome to my Web <span class="myResume">Resume</span></h3>
        <div class="arrow-down">
            <a href="#about-me"><i class="fas fa-angle-double-down" id="arrow"></i></a>
    </div>
    </div>
    <main>
        <div class="about-me vertical-center pt-md-5 mt-md-5 pt-lg-0 mt-lg-0" id="about-me">
            <div class="container">
                <div class="row d-felx justify-content-around">
                    <div class="col-12 col-md-12 col-lg-5 about-text">
                        <h2 class="text-center block pb-3">About Me</h2>
                        <p>For the past 13 years, I have worked mainly in the hospitality and social care industries, but time came to do something
                            with my
                            life, so I decided to follow my passion for computing and retrain myself as a web developer.<br> On the 15th of
                            September, I
                            finished 6 months full stack web developer course at the Baltic Institute of Technologies. Now continuing to
                            work on my
                            skills to improve and advance my existing knowledge.<br> Feel free to take a look at my resume and Github.
                        </p>
                        <div class="media-links text-center align-middle pt-2 pb-4">
                            <a href="http://127.0.0.1/wp/wp-content/uploads/2020/10/Resume_AndriusPilvelis.pdf"  class="btn btn-success resume" target="_blank">Resume<i class="fas fa-file-download ml-3"></i></a>
                            <a href="https://github.com/Apilv" target="_blank"><i class="fab fa-github align-middle pl-3"></i></a>
                        </div>
                    </div>
                    <div class="col-8 col-md-8 col-lg-5 pb-md-5 mb-md-5">
                        <img src="<?php echo THEME_IMG_PATH; ?>/profile_photo.jpg" class="img-fluid rounded" alt="Profile picture">
                    </div>
                </div>
            </div>
        </div>
        <div class="my-skills vertical-center" id="my-skills">
            <div class="container">
                <div class="row d-felx justify-content-around">
                    <div class="skills-text col-12 col-md-6">
                        <h2 class="text-center pb-4">My Skills</h2>
                        <p>To represent my current skillset I created from scratch this simple WordPress theme.<br> For the front end, I used: <strong>HTML, CSS, Bootstrap, Js, Jquery</strong>.
                            <br>For the back end:<strong> PHP, MySql</strong>.
                            <br>It's work in progress, as I continue to grow my skills I will continue to update and improve this template.<br>
                            (Code on GitHub: <a href="https://github.com/Apilv/developer_portfolio_theme" target="_blank"> developer_portfolio_theme</a>).
                        </p>
                    </div>
                    <div class="vertical-line divider d-none d-md-block"></div>
                    <div class="row col-8 col-md-5 skills-icons text-center d-felx justify-content-around">
                        <div class="shadow col-4 col-sm-3 col-md-5 col-lg-5 col-xl-3" data-aos="zoom-in-right" data-aos-duration="1000">
                            <i class="fab fa-html5 align-middle"></i>
                        </div>
                        <div class="shadow col-4 col-sm-3  col-md-5 col-lg-5 col-xl-3" data-aos="zoom-in-bottom" data-aos-duration="1000">
                            <i class="fab fa-css3-alt align-middle"></i>
                        </div>
                        <div class="shadow col-4 col-sm-3  col-md-5 col-lg-5 col-xl-3 text-warning" data-aos="zoom-in-left" data-aos-duration="1000">
                            <i class="fab fa-js-square align-middle"></i>
                        </div>
                        <div class="shadow col-4 col-sm-3  col-md-5 col-lg-5 col-xl-3" data-aos="zoom-in-right" data-aos-duration="1000">
                            <i class="fab fa-php align-middle"></i>
                        </div>
                        <div class="shadow col-4 col-sm-3  col-md-5 col-lg-5 col-xl-3" data-aos="zoom-in-top" data-aos-duration="1000">
                            <i class="fas fa-database align-middle"></i>
                        </div>
                        <div class="shadow col-4 col-sm-3  col-md-5 col-lg-5 col-xl-3" data-aos="zoom-in-left" data-aos-duration="1000">
                            <i class="fab fa-wordpress-simple align-middle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact">
        <div class="container">
            <h2 class="text-center p-4">Contact Me</h2>
            <div class="row d-felx justify-content-around">
                <div class="contact-info pb-3 col-12 col-md-6 text-center">
                    <p class=" mb-0 ml-3 ml-md-5"><i class="fas fa-envelope mr-2 align-middle"></i><i
                            class="fas fa-arrow-right mr-3 align-middle"></i>Andrius.pilv@gmail.com</p>
                    <p class="mt-3 mb-3"><i class="fas fa-phone-alt mr-2 align-middle"></i><i
                            class="fas fa-arrow-right mr-3"></i>+37060331998</p>
                    <a href="https://www.linkedin.com/in/andrius-pilvelis-6530551a6/" class="mt-3"
                        target="_blank"><i class="fab fa-linkedin mr-2"></i><i class="fas fa-arrow-right mr-3"></i>Andrius
                        Pilvelis</a>
                </div>
                <?php dynamic_sidebar('home_contact_1') ?>
            </div>
        </div>
        </div>
    </main>
<?php get_footer()?>