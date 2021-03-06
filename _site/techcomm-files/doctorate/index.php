<?php require '../php/Page.php'; ?>

<!DOCTYPE html>
<html lang="en">

    <!-- HEAD -->
    <?php $page1->addHead(doctorate); ?>

    <body>

        <!-- HEADER -->
        <?php $page1->addHeader(doctorate,about); ?>

        <main>

            <div class="container">

                <div class="row">

                    <article class="col-xs-12 col-sm-9">

                        <div class="col-xs-12">

                            <div class="page-header">
                                <h1><small><?= $doctorate["title"] ?></small><br><?= $doctorate["about"]["title"] ?></h1>
                            </div>

                        </div>

                        <section class="col-xs-12" id="overview">

                            <section>

                                <h3>Social Justice, Technology, Rhetoric</h3>

                                <p>The Technical Communication and Rhetoric (TCR) doctoral program defines the field of technical communication and rhetoric broadly, allowing students to engage diverse topics ranging from social justice to critical theories of technology, from rhetorics of community to online pedagogy, and from crisis communication to computer gaming. In particular, our program is becoming known for addressing issues of social justice, community engagement, diversity, and service learning&mdash;issues that can be explored with partners from a variety of fields and backgrounds.</p>

                            </section>

                            <section>

                                <h3>Customize Your Research</h3>

                                <p>The TCR faculty welcomes opportunities to include students in our research, especially early in their doctoral careers when students are still crafting their own research agendas. For example, international and intercultural technical communication is burgeoning, but few scholars engage in field work in the Global South, so opportunities to participate in this kind research may be a draw, especially for applicants interested in issues of social justice. Dr. Rebecca Walton is one of the few scholars known for field work in the Global South; she is currently pursuing two prospective research projects&mdash;one in Vietnam and one in Morocco&mdash;in which strong doctoral students could participate. Ethics, politics, and rhetorical theory are also a high draw for PhD applicants interested in social justice. Dr. Colton’s recent work on ethics of digital communication and theories of social justice provides a foundation for the expanding social justice scholarship in our field. The students drawn to this type of work are necessary for our program to truly enact our new vision, more firmly plant USU’s reputation, and shape the direction of the technical communication field.</p>
                                
                                <p>For example, a student coming to us from a marketing and public relations background may study professional communication in terms of online fundraising strategies of humanitarian organizations, a student with a degree in biology may focus on the rhetoric of science and ways that dominant narratives obscure and delegitimize the knowledge of disenfranchised groups, and a student coming from rhetoric and philosophy may develop theories for better enacting social justice in professional communication. Our ideal applicants will be exemplars of drive, creativity, intellect, curiosity, motivation, and work ethic.</p>

                            </section>

                            <section>

                                <h3>Award-winning Faculty</h3>

                                <p>The core faculty in TCR includes winners of prestigious national awards, experienced journal editors, and leaders in their fields. They are experts in areas such as rhetorical theory, genre theory, online education, technology, editing, social justice, and qualitative methods. Specific faculty interests include topics such as the effects of technologies on collective activism, technical communication in humanitarian organizations, emergent technologies and human agency in gaming culture, quality of content in complex information systems, and rhetorics of silence and spaces.</p>

                                <a href="<?= $people["faculty"]["url"] ?>">Meet our faculty</a>

                            </section>

                            <section>

                                <h3>Industry-standard Tools</h3>

                                <p>Our PhD students benefit from USU's well-equipped, up-to-date facilities. The Merrill-Cazier Library houses the latest in information technology and serves as the intellectual center of campus. Within the English Department, there is a two-lab learning suite with industry-standard software; desktop, laptop, and tablet computers; smartboard technology; and other digital tools and equipment for use by our students, instructors, and researchers. The teaching lab offers a state-of-the-art environment for instruction, while the open lab is available to facilitate the production of communication using text, graphics, sound, and still and moving images.</p>

                            </section>

                        </section>

                    </article>

                    <!-- SIDE MENU -->
                    <?php $page1->addSideMenu(doctorate,about) ?>

                </div>

            </div>

        </main>

        <!-- FOOTER -->
        <?php $page1->addFooter() ?>

        <!-- JAVASCRIPT -->
        <?php $page1->addJavascript() ?>

    </body>
</html>