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
            <section class="sec_checkout">
                <div class="contain">
                    <div class="top-links">
                        <p> <a href="">Accueil
                            </a> > Panier</p>
                    </div>
                    <div class="flex flexRow">
                        <div class="col col1">
                            <div class="inner">
                                <div class="main-head">
                                    <h5>Forfait code de la route</h5>
                                    <p>Prix: 29,90 €</p>
                                    <p>Type: Code de la route</p>
                                </div>
                                <div class="pricing">
                                    <a href=""> <i class="fa fa-trash-o"></i>upprimer l'article du panier</a>
                                    <p>€29.90</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col2">
                            <div class="inner">
                                <div class="sub-total">
                                    <h5>Sous-total:</h5>
                                    <p>€29.90</p>
                                </div>
                                <p class="items">1 Article</p>
                                <hr>
                                <form action="">
                                    <div class="form-group form-box">
                                        <input type="text" class="form-control" placeholder="Votre code promo">
                                    </div>
                                    <div class="form-group mb-0 text-center">
                                        <button type="submit" class="webBtn blueBtnn">Appliquer</button>
                                    </div>
                                </form>
                                <hr>
                                <div class="sub-total">
                                    <h5>Total:</h5>
                                    <p>€29.90</p>
                                </div>
                                <hr>
                                <div class="cta">
                                    <a href="order.php" class="webBtn blueBtn">Commander</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php include_once('components/footer.php') ?>
    </body>


</html>