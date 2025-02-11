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
                            <h2>Order</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="index.html">Home</a></li>
                                <li>Order</li>
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
                                                <th class="images images-b">Order ID</th>
                                                <th class="product">Date</th>
                                                <th class="ptice">Quantity</th>
                                                <th class="ptice">Ship To</th>
                                                <th class="">Total Price</th>
                                                <th class="remove">Status</th>
                                                <th class="action remove-b">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="images"># 8976A</td>
                                                <td class="product">05 : 08 : 2023</td>
                                                <td class="ptice">06</td>
                                                <td class="name">Alex Genderia</td>
                                                <td class="">$ 450</td>
                                                <td class="Del"><span>Delivered</span></td>
                                                <td class="action">
                                                    <ul>
                                                        <li class="w-btn-view"><a data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="View" href="#"><i
                                                                    class="fi ti-eye"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="images"># 8976A</td>
                                                <td class="product">05 : 08 : 2023</td>
                                                <td class="ptice">06</td>
                                                <td class="name">Alex Genderia</td>
                                                <td class="">$ 450</td>
                                                <td class="stock"><span>Pending</span></td>
                                                <td class="action">
                                                    <ul>
                                                        <li class="w-btn-view"><a data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="View" href="#"><i
                                                                    class="fi ti-eye"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="images"># 8976A</td>
                                                <td class="product">05 : 08 : 2023</td>
                                                <td class="ptice">06</td>
                                                <td class="name">Alex Genderia</td>
                                                <td class="">$ 450</td>
                                                <td class="stocks"><span>Pending</span></td>
                                                <td class="action">
                                                    <ul>
                                                        <li class="w-btn-view"><a data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="View" href="#"><i
                                                                    class="fi ti-eye"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="images"># 8976A</td>
                                                <td class="product">05 : 08 : 2023</td>
                                                <td class="ptice">06</td>
                                                <td class="name">Alex Genderia</td>
                                                <td class="">$ 450</td>
                                                <td class="can"><span>Canceled</span></td>
                                                <td class="action">
                                                    <ul>
                                                        <li class="w-btn-view"><a data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="View" href="#"><i
                                                                    class="fi ti-eye"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="images"># 8976A</td>
                                                <td class="product">05 : 08 : 2023</td>
                                                <td class="ptice">06</td>
                                                <td class="name">Alex Genderia</td>
                                                <td class="">$ 450</td>
                                                <td class="pro"><span>Processing</span></td>
                                                <td class="action">
                                                    <ul>
                                                        <li class="w-btn-view"><a data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="View" href="#"><i
                                                                    class="fi ti-eye"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
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