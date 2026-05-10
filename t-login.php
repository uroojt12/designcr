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
            <section class="sec_login t-login">
                <div class="cover">
                    <div class="row login-box">
                        <div class="col-lg-6 col-md-12 align-self-center form-info">
                            <div class="form-section">
                                <h3>Login</h3>
                                <div class="login-inner-form">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group form-box">
                                                    <input type="email" class="form-control" placeholder="Email Address"
                                                        name="email" aria-label="Address">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-box">
                                                    <input type="password" class="form-control" placeholder="Password"
                                                        autocomplete="off" name="password">
                                                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkbox form-group form-box">
                                                    <div class="form-check checkbox-theme">
                                                        <input type="checkbox" class="form-check-input" value=""
                                                            id="rememberMe">
                                                        <label for="rememberMe" class="form-check-label">
                                                            Remember me
                                                        </label>
                                                    </div>
                                                    <a href="password.php">Forget Password</a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-0 text-center">
                                                    <button type="submit" class="webBtn blueBtn btn-md">Login</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="text">
                                        Don't have an account?
                                        <a href="register.php"> Register here</a>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-12 bg-image">
                            <div class="info">
                                <div class="text-info">
                                    <div class="typing">
                                        <h1>PASS PERMIS FACILE</h1>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>

</html>