<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('assets/img/icon-tab.png') }}" />
    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="{{ asset('assets/css/cdn.jsdelivr.net_npm_swiper@9.4.1_swiper-bundle.min.css') }}" />

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!-- <link rel="stylesheet" href="style.css" /> -->

    <title>Portfolio Daniel AS</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">Daniel</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class="uil uil-estate nav__icon"></i> Home
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class="uil uil-user nav__icon"></i> About
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#skills" class="nav__link">
                            <i class="uil uil-file-alt nav__icon"></i> Skills
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#jurney" class="nav__link">
                            <i class="uil uil-briefcase-alt nav__icon"></i> MyJourney
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#portfolio" class="nav__link">
                            <i class="uil uil-scenery nav__icon"></i> Portfolio
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class="uil uil-message nav__icon"></i> ContactMe
                        </a>
                    </li>
                </ul>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>
            <div class="nav__btns">
                <!-- Change Theme -->
                <i class="uil uil-moon change-theme" id="theme-button"></i>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__content grid">
                    <div class="home__social">
                        <a href="https://www.linkedin.com/in/danielsmg/" class="home__social-icon" target="_blank">
                            <i class="uil uil-linkedin-alt"></i>
                        </a>
                        <a href="https://www.instagram.com/danielandressmg/" class="home__social-icon" target="_blank">
                            <i class="uil uil-instagram"></i>
                        </a>
                        <a href="https://github.com/danismg" class="home__social-icon" target="_blank">
                            <i class="uil uil-github-alt"></i>
                        </a>
                    </div>

                    <div class="home__img">
                        <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <mask id="mask0" mask-type="alpha">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547
        130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775
        97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666
        0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                            </mask>
                            <g mask="url(#mask0)">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346
        165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403
        129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028
        -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                                <image class="home__blob-img" x="2" y="-5" href="{{ asset('assets/img/me.png') }}" />
                            </g>
                        </svg>
                    </div>
                    <div class="home__data">
                        <h1 class="home__title">Hi, I'm Daniel</h1>
                        <h3 class="home__subtitle">Frontend Developer | Data Science</h3>
                        <p class="home__description">
                            I am an information system student who is interested in website
                            development and data science.
                        </p>
                        <a href="#contact" class="button button--flex">
                            Contact Me <i class="uil uil-message button__icon"></i>
                        </a>
                    </div>
                </div>
                <div class="home__scroll">
                    <a href="#about" class="home__scroll-button button--flex">
                        <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                        <span class="home__scroll-name">Scroll down</span>
                        <i class="uil uil-arrow-down home__scroll-arrow"></i>
                    </a>
                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section" id="about">
            <h2 class="section__title">About Me</h2>
            <span class="section__subtitle">My Introduction</span>

            <div class="about__container container grid">
                <img src="assets/img/Me2.jpg" alt="" class="about__img" />
                <div class="about__data">
                    <p class="about__description">
                        I am an information systems student interested in website and data
                        development. Quick to learn and enthusiastic about learning new
                        things, especially in the field of software engineering. Team
                        worker and willing to be led by experienced developers.
                    </p>

                    <div class="about__info">
                        <div>
                            <span class="about__info-title">04+</span>
                            <span class="about__info-name">Month <br />
                                experience</span>
                        </div>
                        <div>
                            <span class="about__info-title">10+</span>
                            <span class="about__info-name">Completed <br />
                                project</span>
                        </div>
                        <div>
                            <span class="about__info-title">01</span>
                            <span class="about__info-name">Companies <br />
                                worked</span>
                        </div>
                    </div>
                    <div class="about__buttons">
                        <a download="" href="assets/pdf/Resume.pdf" class="button button--flex">Download CV <i
                                class="uil uil-download-alt button__icon"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== SKILLS ====================-->
        <section class="skills section" id="skills">
            <h2 class="section__title">Skills</h2>
            <span class="section__subtitle">My technical level</span>

            <div class="skills__container container grid">
                <div>
                    <!--==================== SKILL 1 ====================-->
                    <div class="skills__content skills__open">
                        <div class="skills__header">
                            <i class="uil uil-brackets-curly skills__icon"></i>
                            <div>
                                <h1 class="skills__title">Frontend deleveloper</h1>
                                <span class="skills__subtitle">More than 4 months</span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">HTML</h3>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__html"></span>
                                </div>
                            </div>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">CSS</h3>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__css"></span>
                                </div>
                            </div>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">JavaScript</h3>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__js"></span>
                                </div>
                            </div>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Angular</h3>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__python"></span>
                                </div>
                            </div>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Vue Js</h3>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__css"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--==================== SKILL 2 ====================-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-server-network skills__icon"></i>
                            <div>
                                <h1 class="skills__title">Backtend deleveloper</h1>
                                <span class="skills__subtitle">More than 4 months</span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">PHP</h3>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__php"></span>
                                </div>
                            </div>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Node Js</h3>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__node"></span>
                                </div>
                            </div>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Pyhton</h3>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__python"></span>
                                </div>
                            </div>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Typescript</h3>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__python"></span>
                                </div>
                            </div>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Java</h3>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__java"></span>
                                </div>
                            </div>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">C</h3>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__python"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <!--==================== SKILL 3 ====================-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-swatchbook skills__icon"></i>
                            <div>
                                <h1 class="skills__title">Data Science</h1>
                                <span class="skills__subtitle">More than 5 months</span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">SQL</h3>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__html"></span>
                                </div>
                            </div>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Looker Studio</h3>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__looker"></span>
                                </div>
                            </div>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Machine Learning</h3>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__ml"></span>
                                </div>
                            </div>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Power BI</h3>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__power"></span>
                                </div>
                            </div>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">EDA</h3>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__eda"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== QUALIFICATION ====================-->
        <section class="qualification section" id="jurney">
            <h2 class="section__title">Qualification</h2>
            <span class="section__subtitle">My personal journey</span>

            <div class="qualification__container container">
                <div class="qualification__tabs">
                    <div class="qualification__button button--flex qualification__active" data-target="#work">
                        Work/Intern
                        <i class="uil uil-briefcase-alt qualification__icon"></i>
                    </div>

                    <div class="qualification__button button--flex qualification__active" data-target="#education">
                        <i class="uil uil-graduation-cap qualification__icon"></i>
                        Education
                    </div>
                </div>

                <div class="qualification__sections">
                    <!--================ QUALIFICATION CONTENT 1 ================-->
                    <div class="qualification__content qualification__active" data-content id="work">
                        <!--================= QUALIFICATION 1=================-->
                        <div class="qualification__data">
                            <div style="text-align: right">
                                <h3 class="qualification__title">
                                    Student Teaching Assistant for PEMVIS Courses
                                </h3>
                                <span class="qualification__subtitle">Laguboti - Del Institute of Technology</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    Sep 2021 - Dec 2021
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                        <!--================= QUALIFICATION 2=================-->
                        <div class="qualification__data">
                            <div></div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                            <div>
                                <h3 class="qualification__title">
                                    Student Teaching Assistant for ALSTRUDAT Courses
                                </h3>
                                <span class="qualification__subtitle">Laguboti - Del Institute of Technology</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    Sep 2022 - Dec 2022
                                </div>
                            </div>

                            <div>
                                <!-- <span class="qualification__rounder"></span> -->
                                <span class="qualification__line"></span>
                            </div>
                        </div>
                        <!-- ================================================= -->
                        <div class="qualification__data">
                            <div style="text-align: right">
                                <h3 class="qualification__title">Data Science MSIB</h3>
                                <span class="qualification__subtitle">Jakarta - Startup Campus MSIB</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    Feb 2020 - Jun 2020
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>
                        <!--================= QUALIFICATION 3 =================-->
                        <div class="qualification__data">
                            <div></div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                            <div style>
                                <h3 class="qualification__title">Frontend Dev Intern</h3>
                                <span class="qualification__subtitle">Medan - SimpliDOTS</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    Juni 2023 - Sep 2023
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="qualification__data">
                            <div style="text-align: right">
                                <h3 class="qualification__title">
                                    Student Teaching Assistant for PPW Courses
                                </h3>
                                <span class="qualification__subtitle">Laguboti - Del Institute of Technology</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    Sep 2023 - Now
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                            </div>
                        </div>
                    </div>

                    <!--================ QUALIFICATION CONTENT 2 ================-->
                    <div class="qualification__content" data-content id="education">
                        <!--================= QUALIFICATION 1 =================-->
                        <div class="qualification__data">
                            <div style="text-align: right">
                                <h3 class="qualification__title">Information Systems</h3>
                                <span class="qualification__subtitle">Laguboti - Del Institute of Technology</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2020 - Now
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== PORTFOLIO ====================-->
        <section class="portfolio section" id="portfolio">
            <h2 class="section__title">Portfolio</h2>
            <span class="section__subtitle">Most recent work</span>

            <div class="portfolio__container container swiper">
                <div class="swiper-wrapper">
                    <!--==================== PORTFOLIO 4 ====================-->
                    <div class="portfolio__content grid swiper-slide">
                        <img src="assets/img/Component_SimpliDOTS.png" alt="" class="portfolio__img" />
                        <div class="portfolio__data">
                            <h3 class="portfolio__title">
                                Library Design System SimpliDOTS
                            </h3>
                            <p class="portfolio__description">
                                This library contains a design system consisting of basic web
                                components that can be customized starting from color, text,
                                component content, size and many others with Angular
                                framework.
                            </p>
                            <a href="https://github.com/danismg/SimpliDOTS-Design-System-Library"
                                class="button button--flex button--small portfolio__button" target="_blank">
                                Demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>
                    <!--==================== PORTFOLIO 1 ====================-->
                    <div class="portfolio__content grid swiper-slide">
                        <img src="assets/img/clinic.png" alt="" class="portfolio__img" />
                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Del Clinic</h3>
                            <p class="portfolio__description">
                                Del Clinic(DELNIC) is a web application that functions to
                                accommodate all data collection and actual clinical
                                information.This website is built using Laravel framework and
                                SQL database.
                            </p>
                            <a href="https://github.com/danismg/Clinic-Del-ppw-project"
                                class="button button--flex button--small portfolio__button" target="_blank">
                                Demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>
                    <!--==================== PORTFOLIO 2 ====================-->

                    <div class="portfolio__content grid swiper-slide">
                        <img src="assets/img/penguin_species.png" alt="" class="portfolio__img" />
                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Analysis of penguin species</h3>
                            <p class="portfolio__description">
                                There are several tasks that define the workflow of CRISP -
                                DM. This tax was obtained from the Startup Campus MBKM
                                Independent Study.
                            </p>
                            <a href="https://github.com/danismg/Penguin-Dataset-Analysis"
                                class="button button--flex button--small portfolio__button" target="_blank">
                                Demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>
                    <!--==================== PORTFOLIO 3 ====================-->
                    <div class="portfolio__content grid swiper-slide">
                        <img src="assets/img/Dasboard.png" alt="" class="portfolio__img" />
                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Home Credit Default Risk</h3>
                            <p class="portfolio__description">
                                The problem faced by Home Credit is the risk of churn, namely
                                customers who are likely to leave Home Credit services or pay
                                off their loans within the expected time period. The method
                                used is CRISP - DM.
                            </p>
                            <a href="https://github.com/danismg/Home-Credit-Default-Risk"
                                class="button button--flex button--small portfolio__button" target="_blank">
                                Demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next">
                    <i class="uil uil-angle-right swiper-portfolio-icon"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="uil uil-angle-left swiper-portfolio-icon"></i>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!--==================== PROJECT IN MIND ====================-->
        <section class="project section"></section>

        <!--==================== CONTACT ME ====================-->
        <section class="contact section" id="contact">
            <h2 class="section__title">Contact Me</h2>
            <span class="section__subtitle">Get in touch</span>

            <div class="contact__container container grid">
                <div>
                    <div class="contact__information">
                        <i class="uil uil-phone contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Call Me</h3>
                            <span class="contact__subtitle">+62 822-6819-1939</span>
                        </div>
                    </div>
                    <div class="contact__information">
                        <i class="uil uil-envelope contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Email</h3>
                            <span class="contact__subtitle">danielandressmg00@gmail.com</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-map-marker contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Location</h3>
                            <span class="contact__subtitle">Kualuh Hulu, Aek Kanopan</span>
                        </div>
                    </div>
                </div>

                <form action="https://formspree.io/f/xgebgdrw" class="contact__form grid" method="POST"
                    id="contact-form">
                    <div class="contact__inputs grid">
                        <div class="contact__content">
                            <label for="" class="contact__label">Name</label>
                            <input type="text" class="contact__input" name="name" />
                        </div>
                        <div class="contact__content">
                            <label for="" class="contact__label">Email</label>
                            <input type="email" class="contact__input" name="email" />
                        </div>
                    </div>
                    <div class="contact__content">
                        <label for="" class="contact__label">Subject</label>
                        <input type="text" class="contact__input" name="subject" />
                    </div>
                    <div class="contact__content">
                        <label for="" class="contact__label">Message</label>
                        <textarea class="contact__input" id="" cols="0" rows="7" name="name"></textarea>
                    </div>

                    <div>
                        <button type="submit" class="button button--flex" style="font-size: 16px">
                            <!-- <a href="#" class="button button--flex"> -->
                            Send Message
                            <i class="uil uil-message button__icon"></i>
                            <!-- </a> -->
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Daniel AS</h1>
                    <span class="footer__subtitle">Frontend developer</span>
                    <br />
                    <span class="footer__subtitle">Data Science</span>
                </div>

                <ul class="footer__links">
                    <li>
                        <a href="#portfolio" class="footer__link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer__link">Contact <menu></menu></a>
                    </li>
                </ul>

                <div class="footer__socials">
                    <a href="https://www.instagram.com/danielandressmg/" class="footer__social" target="_blank">
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/danielsmg/" class="footer__social" target="_blank">
                        <i class="uil uil-linkedin-alt"></i>
                    </a>
                </div>
            </div>

            <p class="footer__copy">&#169; DanielAS. All right reserved</p>
        </div>
    </footer>

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>

    <!--==================== SWIPER JS ====================-->
    <script src="{{ asset('assets/js/cdn.jsdelivr.net_npm_swiper@9.4.1_swiper-bundle.min.js') }}"></script>

    <!--==================== MAIN JS ====================-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('https://smtpjs.com/v3/smtp.js') }}"></script>
</body>

</html>
