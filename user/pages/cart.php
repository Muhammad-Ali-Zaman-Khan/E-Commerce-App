<?php
    include('../include/header.php')
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <title>Pengu - eCommerce HTML5 Template</title>
    <?php
    include('../include/styles.php')
    ?>
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="assets/images/preloader.png" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <br>
        <br>
        <br>
        <br>
        <!-- end of header -->

        <!-- start wpo-page-title -->
        <section class="wpo-page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Cart</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="index.html">Home</a></li>
                                <li>Cart</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <!-- cart-area start -->
        <div class="cart-area section-padding">
            <div class="container">
                <div class="form">
                    <div class="cart-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <form action="cart">
                                    <table class="table-responsive cart-wrap">
                                        <thead>
                                            <tr>
                                                <th class="images images-b">Image</th>
                                                <th class="product-2">Product Name</th>
                                                <th class="pr">Quantity</th>
                                                <th class="ptice">Price</th>
                                                <th class="stock">Total Price</th>
                                                <th class="remove remove-b">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="images"><img src="assets/images/cart/img-1.jpg" alt=""></td>
                                                <td class="product">
                                                    <ul>
                                                        <li class="first-cart">White Wedding Shoe</li>
                                                        <li>Brand : Makita</li>
                                                        <li>Size : XL</li>
                                                    </ul>
                                                </td>
                                                <td class="stock">
                                                    <ul class="input-style">
                                                        <li class="quantity cart-plus-minus">
                                                            <input type="text" value="1" />
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="ptice">$ 250</td>
                                                <td class="stock">$ 250</td>
                                                <td class="action">
                                                    <ul>
                                                        <li class="w-btn"><a data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Remove from Cart" href="#"><i
                                                                    class="fi ti-trash"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="images"><img src="assets/images/cart/img-2.jpg" alt=""></td>
                                                <td class="product">
                                                    <ul>
                                                        <li class="first-cart">Long Sleeve Tops</li>
                                                        <li>Brand : Yato</li>
                                                        <li>Size : 5 stick</li>
                                                    </ul>
                                                </td>
                                                <td class="stock">
                                                    <ul class="input-style">
                                                        <li class="quantity cart-plus-minus">
                                                            <input type="text" value="1" />
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="ptice">$ 350</td>
                                                <td class="stock">$ 350</td>
                                                <td class="action">
                                                    <ul>
                                                        <li class="w-btn"><a data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Remove to Cart" href="#"><i
                                                                    class="fi ti-trash"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="images"><img src="assets/images/cart/img-3.jpg" alt=""></td>
                                                <td class="product">
                                                    <ul>
                                                        <li class="first-cart">Long Sleeve Tops</li>
                                                        <li>Brand : Yato</li>
                                                        <li>Size : XXL</li>
                                                    </ul>
                                                </td>
                                                <td class="stock">
                                                    <ul class="input-style">
                                                        <li class="quantity cart-plus-minus">
                                                            <input type="text" value="1" />
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="ptice">$ 450</td>
                                                <td class="stock">$ 450</td>
                                                <td class="action">
                                                    <ul>
                                                        <li class="w-btn"><a data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Remove to Cart" href="#"><i
                                                                    class="fi ti-trash"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="images"><img src="assets/images/cart/img-4.jpg" alt=""></td>
                                                <td class="product">
                                                    <ul>
                                                        <li class="first-cart">Winter Jacket </li>
                                                        <li>Brand : Makita</li>
                                                        <li>Size : L</li>
                                                    </ul>
                                                </td>
                                                <td class="stock">
                                                    <ul class="input-style">
                                                        <li class="quantity cart-plus-minus">
                                                            <input type="text" value="1" />
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="ptice">$ 550</td>
                                                <td class="stock">$ 550</td>
                                                <td class="action">
                                                    <ul>
                                                        <li class="w-btn"><a data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Remove to Cart" href="#"><i
                                                                    class="fi ti-trash"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="images"><img src="assets/images/cart/img-6.jpg" alt=""></td>
                                                <td class="product">
                                                    <ul>
                                                        <li class="first-cart">White Wedding Shoe</li>
                                                        <li>Brand : Yato</li>
                                                        <li>Size : M</li>
                                                    </ul>
                                                </td>
                                                <td class="stock">
                                                    <ul class="input-style">
                                                        <li class="quantity cart-plus-minus">
                                                            <input type="text" value="1" />
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="ptice">$ 550</td>
                                                <td class="stock">$ 550</td>
                                                <td class="action">
                                                    <ul>
                                                        <li class="w-btn"><a data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Remove to Cart" href="#"><i
                                                                    class="fi ti-trash"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                                <div class="submit-btn-area">
                                    <ul>
                                        <li><a class="theme-btn" href="shop.html">Continue Shopping <i
                                                    class="fa fa-angle-double-right"></i></a></li>
                                        <li><button class="theme-btn" type="submit">Update Cart</button></li>
                                    </ul>
                                </div>
                                <div class="cart-product-list">
                                    <ul>
                                        <li>Total product<span>( 05 )</span></li>
                                        <li>Sub Price<span>$2250</span></li>
                                        <li>Vat<span>$50</span></li>
                                        <li>Eco Tax<span>$100</span></li>
                                        <li>Delivery Charge<span>$100</span></li>
                                        <li class="cart-b">Total Price<span>$2500</span></li>
                                    </ul>
                                </div>

                                <div class="submit-btn-area">
                                    <ul>
                                        <li><a class="theme-btn" href="checkout.html">Proceed to Checkout <i
                                                    class="fa fa-angle-double-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-area end -->

        <!-- start of wpo-site-footer-section -->
        <?php
    include('../include/footer.php')
    ?>
       
        <!-- end of wpo-site-footer-section -->


    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <?php
    include('../include/scripts.php')
    ?>
</body>

</html>