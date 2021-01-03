<?php

    $result="";
    if(isset($_POST['submit'])){
        require 'phpmailer\PHPMailerAutoload.php';
        $mail = new PHPMailer;

        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'affanhasbycv@gmail.com';
        $mail->Password = 'hasbyforever99';

        $mail->setFrom('affanhasbycv@gmail.com');
        $mail->addAddress('hasbyaffan@gmail.com');
        $mail->addReplyTo($_POST['email'], $_POST['name'])

        $mail->isHTML(true);
        $mail->Body = "<h3>Name : '.$_POST['name'] <br>Email : '.$_POST['email'] <br>Message : '.$_POST['text']</h3>";

        if(!$mail->send()){
            $result="salah";
        }
        else{
            $result="bener";
        }

    }
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Muhhamad Affan Hasby</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Muhhamad Affan Hasby</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#portfolio" class="nav__link">Project</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <h1 class="home__title"><span>HE</span><br>LLO.</h1>

                    <div class="home__scroll">
                        <a href="#about" class="home__scroll-link"><i class='bx bx-up-arrow-alt' ></i>Scroll down</a>
                    </div>

                    <img src="assets/img/affan2.png" alt="" class="home__img">
                </div>
            </section>
            
            <!--===== ABOUT =====-->
            <section class="about section" id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/affan.png" alt="">
                    </div>

                    <div>
                        <h2 class="about__subtitle">I'am Muhhamad Affan Hasby</h2>
                        <!-- <span class="about__profession">Web designer</span> -->
                        <p class="about__text">I am in my final year of studies towards a Bachelor’s of Computer Science at Telkom University. During my studies i have been involved in different projects such as Web development, Computer Network, Software development, and Digital Marketing. Passionate about everything related with Web development, Digital Marketing, Project Management, and Computer Network.</p>

                        <div class="about__social">
                            <a href="https://www.linkedin.com/in/affanhasby/" class="about__social-icon"><i class='bx bxl-linkedin' ></i></a>
                            <a href="https://www.instagram.com/affanhasby/" class="about__social-icon"><i class='bx bxl-instagram' ></i></a>
                        </div>
                    </div>
                </div>
            </section>

            <!--===== PORTFOLIO =====-->
            <section class="portfolio section" id="portfolio">
                <h2 class="section-title">Project</h2>

                <div class="portfolio__container bd-grid">
                    <div class="portfolio__img">
                        <img src="assets/img/work1.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="https://virtualpbx.telkomku.com/" class="portfolio__link-name">Frontend August 2020-October 2020</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="assets/img/work2.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="https://oasislab.id/" class="portfolio__link-name">Frontend October 2020-January 2021</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="assets/img/work3.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="https://www.instagram.com/romamalkist_id/" class="portfolio__link-name">Project Manager March 2020-August 2020</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="assets/img/work4.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="https://www.instagram.com/kioos.id/" class="portfolio__link-name">Content Specialist June 2020-Currently</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="#" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">Coming Soon</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="#" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">Coming Soon</a>
                        </div>
                    </div>
                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <h5 class="text-center text-success"><?=$result; ?></h5>
                <div class="contact__container bd-grid">
                    <div class="contact__info">
                        <h3 class="contact__subtitle">EMAIL</h3>
                        <span class="contact__text">hasbyaffan@gmail.com</span>

                        <h3 class="contact__subtitle">ADRESS</h3>
                        <span class="contact__text">Boyolali, Central Java, Indonesia</span>
                    </div>

                    <form action="" class="contact__form">
                        <div class="contact__inputs">
                            <input type="text" placeholder="name" class="contact__input">
                            <input type="mail" placeholder="email" class="contact__input">
                        </div>

                        <textarea name="text" id="" cols="0" rows="10" class="contact__input"></textarea>

                        <input type="submit" value="Send" class="contact__button">
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer section">
            <div class="footer__container bd-grid">
                <div class="footer__data">
                    <h2 class="footer__title">Muhhamad Affan Hasby</h2>
                    <p class="footer__text">I'm Muhhamad Affan Hasby and this is my personal website</p>
                </div>

                <div class="footer__data">
                    <h2 class="footer__title">EXPLORE</h2>
                    <ul>
                        <li><a href="#home" class="footer__link">Home</a></li>
                        <li><a href="#about" class="footer__link">About</a></li>
                        <li><a href="#portfolio" class="footer__link">Project</a></li>
                        <li><a href="#Contact" class="footer__link">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer__data">
                    <h2 class="footer__title">FOLLOW</h2>
                    <a href="https://www.linkedin.com/in/affanhasby/" class="footer__social"><i class='bx bxl-linkedin' ></i></a>
                    <a href="https://www.instagram.com/affanhasby/" class="footer__social"><i class='bx bxl-instagram' ></i></a>
                </div>


            </div>
        </footer>

        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>