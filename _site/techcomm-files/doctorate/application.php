<?php require '../php/Page.php'; ?>

<!DOCTYPE html>
<html lang="en">

    <!-- HEAD -->
    <?php $page1->addHead(); ?>

    <body>

        <!-- HEADER -->
        <?php $page1->addHeader(doctorate,application); ?>

        <main>

            <div class="container">

                <div class="row">

                    <article class="col-xs-12 col-sm-9">

                        <div class="col-xs-12">

                            <div class="page-header">
                                <h1><small><?= $doctorate["title"] ?></small><br><?= $doctorate["application"]["title"] ?></h1>
                            </div>

                        </div>

                        <section class="col-xs-12">

                            <h2>Overview</h2>

                            <p>Doctoral students must apply for admission to both the School of Graduate Studies and the English Department’s Technical Communication and Rhetoric (TCR) Doctoral program.</p>

                            <p>For the 2015-2016 academic year, the application deadline is February 1, 2015—the last date for materials to be postmarked. No applicants will be considered until all required information arrives in the School of Graduate Studies office. All application materials must be postmarked before or by the deadline.</p>
                            <p>Before you apply to any graduate programs, please see Angela Eaton's excellent article on applying to graduate school in Technical Communication, available here: <a href="https://www.depts.ttu.edu/english/tcr/grad_application/ApplyingToGradSchool.pdf" target="_blank">https://www.depts.ttu.edu/english/tcr/grad_application/ApplyingToGradSchool.pdf</a></p>

                        </section>

                        <section class="col-xs-12">

                            <h2>Application materials:</h2>

                            <ul>

                                <li>A completed application form, which you submit electronically through the Graduate School website. In the essay section of the application form, please indicate the program and specialization for which you are applying: "PhD in Technical Communication and Rhetoric."</li>
                                <li>A $55 application fee.</li>
                                <li>All official undergraduate and graduate transcripts showing your GPA. The minimum requirement is 3.00 on a 4.00 scale for the last 60 credits taken.</li>
                                <li>Three letters of recommendation, two of which must be from former teachers if you have been enrolled in school during the last five years. These letters should be sent directly to the Graduate School by the letter writers using the forms you downloaded from the Graduate School website.</li>
                                <li>Test scores from all three sections of the Graduate Record Examination. The minimum acceptable score is at or above the 40th percentile in the Verbal and Analytical sections. The GRE Subject test is not required.</li>
                                <li>International applicants from non-English-speaking countries must also take the following two tests unless their undergraduate degree is from a university in an English-speaking country: Test of English as a Foreign Language (TOEFL). The minimum score for the paper-based TOEFL is 550; for the computer-based TOEFL, 213; and for the Internet-based TOEFL, 80.</li>

                            </ul>

                        </section>

                        <section class="col-xs-12">

                            <h2>International Students</h2>

                            <p>International students must also submit an I-20 application form and a financial guarantee. Please visit the Graduate School web page describing international application procedures and the Utah State web page providing information for international students.</p>

                        </section>

                        <section class="col-xs-12">

                            <h2>Letter of intent</h2>

                            <p>While you are assembling the materials to send to the Graduate School, also prepare a letter of intent of around 1,000 words, addressed to the PhD selection committee. This should explain your career goals and research agenda. Below are some questions and prompts to give you a sense of what the selection committee would like you to include in your letter of intent. We encourage you to illustrate your answers to these questions with relevant anecdotes and specific examples from your academic or non-academic experience.</p>

                            <ul>

                                <li>Why are you applying for a PhD and why have you chosen our Technical Communication and Rhetoric program?</li>

                                <li>What aspects of our program particularly interest you and why? Which faculty do you see yourself working with most closely and why?</li>
                                <li>Describe one or two particular research projects on which you worked for your Master’s degree.</li>
                                <li>Why did this work interest you and what research questions motivated these projects?</li>
                                <li>If you were to continue working on the projects, what further research questions might you pursue, especially in a Technical Communication and Rhetoric program?</li>
                                <li>What professional and/or academic experiences have led you to believe you are ready for the kind of work that our PhD program will involve?</li>
                                <li>What research questions in Technical Communication and Rhetoric do you want to pursue in the program?</li>
                                <li>What career goals will this PhD in Technical Communication and Rhetoric help you to meet?</li>
                                <li>Do you wish to apply for a Graduate Instructorship (please see below)?</li>

                            </ul>

                        </section>

                        <section class="col-xs-12">

                            <h2>Graduate Instructor application</h2>

                            <p>To apply for a Graduate Instructorship, you must indicate your interest in being considered for a GI-ship in your Letter of Intent.  In addition to indicating your interest in teaching, you may also include a paragraph that describes any previous teaching experiences you have that would make you a good candidate for a graduate instructorship.  You should also indicate any teaching experience in your CV that you send to the DGS with your application materials.</p>

                        </section>

                        <section class="col-xs-12">

                            <h2>Curriculum vitae</h2>

                            <p>Submit the most current version of your curriculum vitae. For help building a CV please visit Purdue's OWL on &quot;<a href="https://owl.english.purdue.edu/owl/resource/641/1/" target="_blank">Writing the Curriculum Vitae</a>.&quot;</p>

                        </section>

                        <section class="col-xs-12">

                            <h2>Writing Samples</h2>

                            <p>Two writing samples (a total of 20-40 pages), exhibiting your best writing. These samples may include academic or non-academic writing, but at least one of the samples should demonstrate your critical and research skills. For each writing sample, write a <strong>one-page preface</strong>, contextualizing the sample: please describe your purpose for writing the document, the readers for whom you wrote it and how they affected your decisions while composing and revising the piece, and what you believe the sample demonstrates about your abilities to address a communication challenge.</p>

                            <p>Send your letter of intent, the vita, and the writing samples directly to:</p>

                            <address>
                                Director of Graduate Studies
                                <br>English Department
                                <br>Utah State University
                                <br>3200 Old Main Hill
                                <br>Logan, UT 84322-3200
                            </address>

                        </section>

                    </article>

                    <!-- SIDE MENU -->
                    <?php $page1->addSideMenu(doctorate,application) ?>

                </div>

            </div>

        </main>

        <!-- FOOTER -->
        <?php $page1->addFooter() ?>

        <!-- JAVASCRIPT -->
        <?php $page1->addJavascript() ?>

    </body>
</html>