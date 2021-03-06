<?php require 'php/Home.php'; ?>

<!DOCTYPE html>
<html lang="en">

    <!-- HEAD -->
    <?php $home->addHead(); ?>

    <body>

        <!-- HEADER -->
        <?php $home->addHeader(); ?>

        <main class="bg-white" style="padding-bottom:0;">
            
            <div class="tc-carousel-wrapper">

                <div class="container-variable">

                    <div class="row">

                        <div class="tc-carousel col-xs-12">

                            <div>

                                <img src="img/splash/Edenfield_A_splash5.jpg" class="img-responsive" alt="Dr. Avery Edenfield">

                                <div class="right">
                                    
                                    <div class="tc-carousel-caption">
                                    <h2>Welcome,<br>Avery Edenfield</h2>
                                    <p>Dr. Edenfield researches workplace participation, rhetorics of empowerment and democracy, and community engagement.</p>
                                    <a class="btn btn-blue" href="<?= $people["faculty"]["url"] ?>" role="button">Meet the Faculty</a>
                                </div>

                            </div>
                                
                                </div>
 <div>

                                <img src="img/splash/oldmain.jpg" class="img-responsive" alt="Sunset behind Old Main building at Utah State University in Logan, UT">

                                <div class="tc-carousel-caption">
                                    <h2>USU at ATTW</h2>
                                    <p>We are proud to represent TCR at the Association of Teachers of Technical Writing national conference in Houston.</p>
                                    <a class="btn btn-blue" href="http://attw.org/" role="button" target="_blank">ATTW</a>
                                </div>       </div>
                            
                     
 <div>

                                <img src="img/splash/cliffs.jpg" class="img-responsive" alt="Two grad students standing in front of the ocean in Ireland.">

                                <div class="tc-carousel-caption">
                                    <h2>Go Places</h2>
                                    <p>Breeanne Martin and Emily Petersen at the Cliffs of Moher in Ireland during ProComm 2015.</p>
                                    <a class="btn btn-usu-blue" href="<?= $people["students"]["url"] ?>" role="button">Get to Know Our Students</a>
                                </div>
                            </div>

                            <div>

                                <img src="img/splash/controller.jpg" class="img-responsive" alt="Hands holding a video game controller.">

                                <div class="tc-carousel-caption">
                                    <h2>Gaming for&nbsp;Good</h2>
                                    <p>Take courses in gaming, ethics, disability studies, rhetoric, social justice, and other topics.</p>
                                    <a class="btn btn-green" href="<?= $bachelors["courses"]["url"] ?>" role="button">Check out our topics courses</a>
                                </div>

                            </div>

                           

                        </div>

                    </div>

                </div>

            </div>

        </main>

        <!-- FOOTER -->
        <?php $home->addFooter() ?>

        <!-- JAVASCRIPT -->
        <?php $home->addJavascript() ?>

        <script>

            $(document).ready(function(){
                $('.tc-carousel').slick({
                    adaptiveHeight: true,
                    autoplay: true,
                    autoplaySpeed: 10000,
                    arrows: false,
                    dots: true,
                    draggable: false,
                    fade: true,
                    infinite: true,
                    pauseOnHover: false,
                    speed: 1000,
                    swipe: false,
                    touchMove: false,

                });
            });

        </script>

    </body>
</html>