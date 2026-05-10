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
                    <div class="row login-box register-box t-register">
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
                                                <div class="form-group form-box">
                                                    <input type="text" class="form-control" placeholder="Phone"
                                                        name="password" aria-label="Address">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group form-box">
                                                    <label for="" class="input-label">Address</label>
                                                    <textarea class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-box">

                                                    <input type="text" class="form-control" placeholder="code postal">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-box">
                                                    <input type="text" class="form-control"
                                                        placeholder="Latest Experience">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-box">
                                                    <label for="" class="input-label">Message about your
                                                        experience</label>
                                                    <textarea class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox form-group form-box">
                                                    <div class="form-check checkbox-theme">
                                                        <input type="checkbox" class="form-check-input" value=""
                                                            id="remember" name="a">
                                                        <label for="remember" class="form-check-label">
                                                            I formally agree that my information will be used by
                                                            Moniteur Independant to contact me.
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox form-group form-box">
                                                    <div class="form-check checkbox-theme">
                                                        <input type="checkbox" class="form-check-input" value=""
                                                            id="rememberMe" name="b">
                                                        <label for="rememberMe" class="form-check-label">
                                                            I accept that Moniteur Independant stores and processes my
                                                            personal data. (See <a href="" style="float:unset">Privace
                                                                Policy</a>)
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