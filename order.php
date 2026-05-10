<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Login</title>
        <?php include_once('components/site-head.php') ?>
    </head>

    <body>
        <?php include_once('components/header.php') ?>
        <main>
            <!-- ====sec_video===== -->
            <section class="sec_checkout sec_order">
                <div class="contain">
                    <div class="top-links">
                        <p> <a href="">Accueil
                            </a> > <a href="">Panier</a> > Préparation de la commande</p>
                    </div>
                    <div class="flex flexRow">
                        <div class="col col1">
                            <div class="inner tabe_block">
                                <ul class="cta">
                                    <li>
                                        <button type="button" class="webBtn  greyBtn active" id="member">Pas encore de
                                            compte</button>
                                    </li>
                                    <li>
                                        <button type="button" class="webBtn greyBtn" id="n_member">Je me
                                            connecte</button>
                                    </li>
                                </ul>
                                <div class="form-section" id="member_block">
                                    <div class="login-inner-form">
                                        <form action="">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-box">
                                                        <input type="text" class="form-control" placeholder="Prénom"
                                                            name="fname">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-box">
                                                        <input type="text" class="form-control" placeholder="Nom"
                                                            name="lname">

                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group form-box">
                                                        <input type="email" class="form-control"
                                                            placeholder="Email Address" name="email"
                                                            aria-label="Address">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group form-box">
                                                        <input type="text" class="form-control" placeholder="Téléphone"
                                                            name="phone" aria-label="phone">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group form-box date-ico">
                                                        <label for="" class="input-label">Date of Birth
                                                            <small>Optional</small></label>

                                                        <input type="text" class="form-control datepicker" name="date"
                                                            id="" placeholder="MM/DD/YYYYY">
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

                                                        <input type="text" class="form-control"
                                                            placeholder="code postal">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-box">
                                                        <input type="text" class="form-control" placeholder="Ville">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group form-box">
                                                        <label for="" class="input-label">Avez vous un numéro NEPH ?
                                                            <small>(Obligatoire pour les forfaits
                                                                conduite)</small></label>
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
                                                        <label for="" class="input-label">Voulez-vous financier via CPF
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
                                                        <label for="" class="input-label">Comment avez-vous connu
                                                            moniteur indépendant ?
                                                            <small>(facultatif)</small></label>
                                                        <select name="event" id="event" class="form-control"
                                                            placeholder="Select Options"
                                                            wire:model.defer="source_acquisition">
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
                                                        <label for="" class="input-label">Date d'obtention du code de la
                                                            route <small>(facultatif)</small></label>

                                                        <input type="text" class="form-control datepicker" name="date"
                                                            id="" placeholder="MM/DD/YYYYY">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group form-box">
                                                        <input type="text" class="form-control"
                                                            placeholder="Mot de passe" name="fname">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group form-box">
                                                        <input type="text" class="form-control"
                                                            placeholder="Confirmez le mot de passe" name="fname">
                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div class="checkbox form-group form-box">
                                                        <div class="form-check checkbox-theme">
                                                            <input type="checkbox" class="form-check-input" value=""
                                                                id="rememberMe">
                                                            <label for="rememberMe" class="form-check-label">
                                                                Je comprends et j’accepte les <a href="">conditions
                                                                    générales d'utilisation</a>
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group mb-0 text-center">
                                                        <button type="submit" class="webBtn blueBtn btn-md">
                                                            Paiement</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <div id="n_member_block" class="hide">
                                    <div class="login-inner-form">
                                        <form action="">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-box">
                                                        <input type="email" class="form-control"
                                                            placeholder="Email Address" name="email"
                                                            aria-label="Address">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group form-box">
                                                        <input type="password" class="form-control"
                                                            placeholder="Password" autocomplete="off" name="password">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group mb-0 text-center">
                                                        <button type="submit" class="webBtn blueBtn btn-md">
                                                            Je me connecte</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col2">
                            <div class="inner">
                                <div class="sub-total">
                                    <h5>Subtotal:</h5>
                                    <p>€29.90</p>
                                </div>
                                <p class="items">1 Item</p>
                                <hr>
                                <form action="">
                                    <div class="form-group form-box">
                                        <input type="text" class="form-control" placeholder="Latest Experience">
                                    </div>
                                    <div class="form-group mb-0 text-center">
                                        <button type="submit" class="webBtn blueBtnn">Apply Now</button>
                                    </div>
                                </form>
                                <hr>
                                <div class="sub-total">
                                    <h5>Total:</h5>
                                    <p>€29.90</p>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php include_once('components/footer.php') ?>
    </body>


</html>