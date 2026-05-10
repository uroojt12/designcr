<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Login</title>
        <?php include_once('components/site-head.php') ?>
    </head>

    <body>
        <?php include_once('components/header.php') ?>
        <main>
            <!-- ====sec_login ===== -->
            <section class="sec_login">
                <div class="cover">
                    <div class="row login-box register-box">
                        <div class="col-lg-6 col-md-12 bg-image">
                            <div class="info">
                                <div class="text-info">
                                    <div class="typing">
                                        <h1>PASS PERMIS FACILE</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 align-self-center">
                            <div class="form-section">
                                <h3>Inscription</h3>
                                <div class="login-inner-form">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-box">
                                                    <input type="text" class="form-control" placeholder="First Name"
                                                        name="fname">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-box">
                                                    <input type="text" class="form-control" placeholder="Last Name"
                                                        name="lname">

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-box">
                                                    <input type="email" class="form-control" placeholder="Email Address"
                                                        name="email" aria-label="Address">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-box date-ico">
                                                    <label for="" class="input-label">Select Date</label>

                                                    <input type="text" class="form-control datepicker" name="date" id=""
                                                        placeholder="MM/DD/YYYYY">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-box">
                                                    <label for="" class="input-label">Address</label>
                                                    <input type="text" class="form-control" placeholder="Address">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-box">

                                                    <input type="text" class="form-control" placeholder="code postal">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-box">
                                                    <input type="text" class="form-control" placeholder="Ville">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-box">
                                                    <label for="" class="input-label">AVEZ NU ?
                                                        <small>(Obligatory)</small></label>
                                                    <div class="form-control">
                                                        <label class="switch">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                        <div class="red-none">
                                                            <p>Non</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-box">
                                                    <label for="" class="input-label">AVEZ NU ?
                                                    </label>
                                                    <div class="form-control">
                                                        <label class="switch">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                        <div class="red-none">
                                                            <p>Non</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-box">
                                                    <label for="" class="input-label">AVEZ NU ?
                                                        <small>(Obligatory)</small></label>
                                                    <select name="event" id="event" class="form-control"
                                                        placeholder="Select Options">
                                                        <option value="1">Select Options</option>
                                                        <option value="2">Reception</option>
                                                        <option value="3">Birthday</option>
                                                        <option value="4">Engagment</option>
                                                        <option value="5">Dinner Party</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-box date-ico">
                                                    <label for="" class="input-label">Select Date</label>

                                                    <input type="text" class="form-control datepicker" name="date" id=""
                                                        placeholder="MM/DD/YYYYY">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group form-box">
                                                    <input type="text" class="form-control" placeholder="Password"
                                                        name="fname">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-box">
                                                    <input type="text" class="form-control"
                                                        placeholder="Confirm password" name="fname">
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="checkbox form-group form-box">
                                                    <div class="form-check checkbox-theme">
                                                        <input type="checkbox" class="form-check-input" value=""
                                                            id="rememberMe">
                                                        <label for="rememberMe" class="form-check-label">
                                                            I agreed to <a href="">Terms & Condition</a>
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-0 text-center">
                                                    <button type="submit"
                                                        class="webBtn blueBtn btn-md">S'Inscrire</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>
    <?php include_once('components/common.php') ?>

</html>