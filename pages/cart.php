<?php
include 'template/header.php';
include 'template/my-functions.php';
include 'template/item.php';
print_r($_SESSION)
?>
<section class="h-100 h-custom" style="background-color: #000;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black">Panier</h1>
                                    </div>

                                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img src="<?php echo $_SESSION['picture'] ?> " class="img-fluid rounded-3" alt="Cotton T-shirt">
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <h6 class="text-muted"><?php echo $_SESSION['name'] ?></h6>
                                            <h6 class="text-black mb-0"><?php echo "description" ?></h6>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                <i class="fas fa-minus"></i>
                                            </button>

                                            <input id="form1" min="0" name="cart_quantity" value=<?php echo $_SESSION['qte'] ?> type="number" class="form-control form-control-sm" />

                                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">

                                            <?php $pTotal = calculPrice ($_SESSION['price'], $_SESSION['priceDiscount'], $_SESSION['qte']) ?>
                                            <h6 class="mb-0"><?php echo "Prix total : ", formatprice($pTotal), " € " ?></h6>
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                        </div>
                                    </div>

                                    <hr class="my-4">

                                    <div class="pt-5">
                                        <h6 class="mb-0"><a href="multidimensional-catalog.php" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 bg-grey">
                                <div class="p-5">
                                    <h3 class="fw-bold mb-5 mt-2 pt-1 text-dark">résumé</h3>

                                    <div class="d-flex justify-content-between mb-4">
                                        <h5 class="text-uppercase text-dark">Prix HT</h5>
                                        <h5><?php echo $_SESSION['priceHT'] * $_SESSION['qte'], " €" ?></h5>
                                    </div>

                                    <div class="d-flex justify-content-between mb-4">
                                        <h5 class="text-uppercase text-dark">TVA</h5>
                                        <h5><?php echo (calculTVA(formatprice($_SESSION['price']), $_SESSION['priceHT'])) * $_SESSION['qte'], " €" ?></h5>

                                    </div>

                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-4">
                                        <h5 class="text-uppercase text-dark">Total panier </h5>
                                        <h5><?php echo  formatprice($pTotal), "€" ?></h5>
                                    </div>
                                    <form method="post" action="cart.php">
                                        <div class="mb-4 pb-2">
                                            <select class="select" name="transporteur">
                                                <option value="<?php $transporteur['tnt'] ?> ">TNT 5€</option>                                                
                                                <option value="<?php $transporteur['LaPoste'] ?>">La Poste 10€</option>                                                
                                                <option value="<?php $transporteur['DPD'] ?>">DPD 7,50€</option>                                                
                                                <option value="<?php $transporteur['Chronopost'] ?>">Chronopost 15€</option>
                                                <option value="<?php $transporteur['relaisColis'] ?>">relais colis gratuit</option>
                                            </select>
                                            <input type="hidden" id="transporter_choice" value="<?php echo  $transporteur['tnt'] ?>" name="transporter_choice">
                                            <button type="submit" class="btn btn-dark btn-block btn-lg" value="add_transporteur" data-mdb-ripple-color="dark" name = "add_transporteur" >Valider </button>
                                        </div>



                                        <div class="d-flex justify-content-between mb-4">
                                            <h5 class="text-uppercase text-dark">Frais de port </h5>
                                            <h5><?php echo formatprice($fraisPort =  calculFraisDP($_SESSION['weight'], $_SESSION['qte'], $pTotal)) ?> €</h5>
                                        </div>
                                        <div class="mb-4 pb-2">

                                        </div>

                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase text-dark">Prix total</h5>
                                            <h5><?php echo formatprice($fraisPort + $pTotal), " €" ?></h5>
                                        </div>

                                        <button type="button" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark">Commander</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<script src="../assets/bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>
<?php
include 'template/footer.php';
?>