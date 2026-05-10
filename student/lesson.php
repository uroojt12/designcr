<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Admin-Dashboard</title> <?php include_once('../components/site-head.php') ?>
    </head>

    <body class="cut-bg">
        <div class="page-container"> <?php include_once('../components/sidebar.php') ?> <div class="main-content">
                <?php include_once('../components/s-header.php') ?> <main>
                    <section class="sec_lesson-inner">
                        <div class="inner">
                            <div class="cta">
                                <a href="student.php" class="webBtn blueBtn"><i
                                        class="fa fa-chevron-left"></i>Lesson</a>
                            </div>
                            <div class="inside">
                                <ul class="button">
                                    <li>
                                        <a href="" class="blue-color">Lesson</a>
                                    </li>
                                    <li>
                                        <a href="" class="blue-color">Accepted</a>
                                    </li>
                                </ul>
                                <div class="lesson flex">
                                    <h3>Lesson of September 30,2023</h3>
                                    <strong>11 H 00 - 13 H 00</strong>
                                </div>
                                <ul class="flex _inner">
                                    <li>
                                        <div class="image">
                                            <img src="<?= $baseurl ?>images/les-1.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h6>Teacher</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="<?= $baseurl ?>images/location.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h6>Address</h6>
                                            <p>8468200 Toulouse,France </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image image-2">
                                            <img src="<?= $baseurl ?>images/team-8.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <h6>Helly Beard</h6>
                                            <p>87584575495</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="<?= $baseurl ?>images/les-2.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h6>Vehicle</h6>
                                            <p>7kjfhsd</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="cencel">
                                <a href="" class="webBtn greenBtn">Cencel</a>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </body>
    <?php include_once('../components/common.php') ?>

</html>