<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Admin-Dashboard</title> <?php include_once('../components/site-head.php') ?>
    </head>

    <body class="cut-bg">
        <div class="page-container"> <?php include_once('../components/sidebar.php') ?> <div class="main-content">
                <?php include_once('../components/s-header.php') ?> <main>
                    <div class="main_section">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a class="a" data-toggle="tab" href="#feature">
                                    Lessons</a>
                            </li>
                            <li>
                                <a class="b" data-toggle="tab" href="#learning">
                                    Learning Booklet</a>
                            </li>
                            <li>
                                <a class="c" data-toggle="tab" href="#driving">
                                    To pass the driving test</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade a active in" id="#feature">
                            <div class="main-inner-side ">
                                <div class="main-inner-first ">
                                    <div class="heading-it">
                                        <div class="lesson">
                                            <div class="image">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <h4>Lesson(s) in Progress</h4>
                                        </div>
                                        <div class="cta">
                                            <a href="" class="webBtn greenBtn">Book a Lesson</a>
                                        </div>
                                    </div>
                                    <ul class="top-list">
                                        <li>
                                            <div class="main-listings">
                                                <ul>
                                                    <li>
                                                        <Strong>30/09/2023</Strong>
                                                        <p class="text-center">11:00 - 13:00</p>
                                                    </li>
                                                    <li class="flex">
                                                        <div class="image-1">
                                                            <img src="<?= $baseurl ?>images/profile-user.png" alt="">
                                                        </div>
                                                        <div class="detail">
                                                            <h5>Helly Beard</h5>
                                                            <p>00923456789</p>
                                                        </div>
                                                    </li>
                                                    <li class="flex">
                                                        <div class="image-1">
                                                            <img src="<?= $baseurl ?>images/location.png" alt="">
                                                        </div>
                                                        <div class="detail">
                                                            <p><span>Reu Caussade</span></p>
                                                            <p><span>8468200 Toulouse,France</span></p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="li-cta">
                                                            <a href="" class="webBtn blueBtn"><i
                                                                    class="fa fa-check"></i>Accepted</a>
                                                        </div>
                                                        <a href="lesson.php" class="style-me">See Details <i
                                                                class="fa fa-chevron-right"></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="main-listings">
                                                <ul>
                                                    <li>
                                                        <Strong>30/09/2023</Strong>
                                                        <p class="text-center">11:00 - 13:00</p>
                                                    </li>
                                                    <li class="flex">
                                                        <div class="image-1">
                                                            <img src="<?= $baseurl ?>images/profile-user.png" alt="">
                                                        </div>
                                                        <div class="detail">
                                                            <h5>Helly Beard</h5>
                                                            <p>00923456789</p>
                                                        </div>
                                                    </li>
                                                    <li class="flex">
                                                        <div class="image-1">
                                                            <img src="<?= $baseurl ?>images/location.png" alt="">
                                                        </div>
                                                        <div class="detail">
                                                            <p><span>Reu Caussade</span></p>
                                                            <p><span>8468200 Toulouse,France</span></p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="li-cta">
                                                            <a href="" class="webBtn blueBtn"><i
                                                                    class="fa fa-check"></i>Accepted</a>
                                                        </div>
                                                        <a href="lesson.php" class="style-me">See Details <i
                                                                class="fa fa-chevron-right"></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="pagination">
                                        <li><a href="?" class="active">1</a></li>
                                        <li><a href="?">2</a></li>
                                        <li><a href="?">3</a></li>
                                    </ul>
                                </div>
                                <div class="main-inner-first top-pad">
                                    <table class="table">
                                        <div class="lesson">
                                            <div class="image">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <h4>Summary</h4>
                                        </div>
                                        <thead>
                                            <tr>
                                                <th width="13%">Status</th>
                                                <th width="15%">Teacher</th>
                                                <th width="15%">Date</th>
                                                <th width="15%">Schedules</th>
                                                <th width="42%">Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="" class="cencled">cencled</a></td>
                                                <td>
                                                    <div class="flex">
                                                        <div class="image">
                                                            <img src="" alt="">
                                                        </div>
                                                        <p>Helly Beard</p>
                                                    </div>
                                                </td>
                                                <td>03/02/2023</td>
                                                <td>12:00 - 13:00</td>
                                                <td class="arow_td">8468200 Toulouse,France <i
                                                        class="fa fa-chevron-right"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="" class="cencled">cencled</a></td>
                                                <td>
                                                    <div class="flex">
                                                        <div class="image">
                                                            <img src="" alt="">
                                                        </div>
                                                        <p>Helly Beard</p>
                                                    </div>
                                                </td>
                                                <td>03/02/2023</td>
                                                <td>12:00 - 13:00</td>
                                                <td class="arow_td">8468200 Toulouse,France <i
                                                        class="fa fa-chevron-right"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="" class="green-it">Accepted</a></td>
                                                <td>
                                                    <div class="flex">
                                                        <div class="image">
                                                            <img src="" alt="">
                                                        </div>
                                                        <p>Helly Beard</p>
                                                    </div>
                                                </td>
                                                <td>03/02/2023</td>
                                                <td>12:00 - 13:00</td>
                                                <td class="arow_td">8468200 Toulouse,France <i
                                                        class="fa fa-chevron-right"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="" class="cencled">cencled</a></td>
                                                <td>
                                                    <div class="flex">
                                                        <div class="image">
                                                            <img src="" alt="">
                                                        </div>
                                                        <p>Helly Beard</p>
                                                    </div>
                                                </td>
                                                <td>03/02/2023</td>
                                                <td>12:00 - 13:00</td>
                                                <td class="arow_td">8468200 Toulouse,France <i
                                                        class="fa fa-chevron-right"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="" class="green-it">Accepted</a></td>
                                                <td>
                                                    <div class="flex">
                                                        <div class="image">
                                                            <img src="" alt="">
                                                        </div>
                                                        <p>Helly Beard</p>
                                                    </div>
                                                </td>
                                                <td>03/02/2023</td>
                                                <td>12:00 - 13:00</td>
                                                <td class="arow_td">8468200 Toulouse,France <i
                                                        class="fa fa-chevron-right"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="" class="cencled">cencled</a></td>
                                                <td>
                                                    <div class="flex">
                                                        <div class="image">
                                                            <img src="" alt="">
                                                        </div>
                                                        <p>Helly Beard</p>
                                                    </div>
                                                </td>
                                                <td>03/02/2023</td>
                                                <td>12:00 - 13:00</td>
                                                <td class="arow_td">8468200 Toulouse,France <i
                                                        class="fa fa-chevron-right"></i>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                    <ul class="pagination">
                                        <li><a href="?" class="active">1</a></li>
                                        <li><a href="?">2</a></li>
                                        <li><a href="?">3</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </main>
            </div>
        </div>
    </body>
    <?php include_once('../components/common.php') ?>

</html>