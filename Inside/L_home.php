<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="icon" href="../images/home-solid.svg" />
    <!-- Bootstrap -->
    <link href="../css/bootstrap-4.0.0.css" rel="stylesheet">
    <link href="../css/navibar.css" rel="stylesheet" type="text/css">
    <link href="../css/webfooter.css" rel="stylesheet" type="text/css">
    <link href="../css/Style.css" rel="stylesheet" type="text/css">
    <link href="../fontawesome-free-5.12.1-web/css/all.css" rel="stylesheet" type="text/css">
</head>

<body  style="padding-top: 4.3rem" data-spy="scroll" data-target="#navbarResponsive">
    <div id="Home">
    <?php
      include "../NaviBar.php";
    ?>
    </div>
    <div id="FindSuppliers" class="offset">
        <div class="jumbotron .d-none .d-lg-block">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="hedding">PRODUCTS</h3>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div onClick="location.href='../Forms/gents_wear';" class="col-md-4 align-content-center cardcss">
                    <div class="card cd1">
                        <div class="inner">
                            <div class="card-img-top"></div>
                        </div>
                        <div class="card-body">
                            <center>
                            <h1 class="card-title">Gents Wear</h1>
                            </center>
                        </div>
                    </div>
                </div>
                <div  onClick="location.href='../Forms/boys_wear';" class="col-md-4 align-content-center cardcss">
                    <div class="card cd2">
                        <div class="inner">
                            <div class="card-img-top"></div>
                        </div>
                        <div class="card-body">
                            <center>
                            <h1 class="card-title">Boys Wear</h1>
                            </center>
                        </div>
                    </div>
                </div>
                <div onClick="location.href='../Forms/ladies_wear';" class="col-md-4 align-content-center cardcss">
                    <div class="card cd3">
                        <div class="inner">
                            <div class="card-img-top"></div>
                        </div>
                        <div class="card-body">
                            <center>
                            <h1 class="card-title">Ladies Wear</h1>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div onClick="location.href='../Forms/girls_wear';" class="col-md-4 align-content-center cardcss">
                    <div class="card cd4">
                        <div class="inner">
                            <div class="card-img-top"></div>
                        </div>
                        <div class="card-body">
                            <center>
                            <h1 class="card-title">Girls Wear</h1
                            </center>
                        </div>
                    </div>
                </div>
                <div onClick="location.href='../Forms/kids_wear.php';" class="col-md-4 align-content-center cardcss">
                    <div class="card cd5">
                        <div class="inner">
                            <div class="card-img-top"></div>
                        </div>
                        <div class="card-body">
                            <center>
                            <h1 class="card-title">Kids Wear</h1>
                            </center>
                        </div>
                    </div>
                </div>
                <div onClick="location.href='../Forms/others';" class="col-md-4 align-content-center cardcss">
                    <div class="card cd6">
                        <div class="inner">
                            <div class="card-img-top"></div>
                        </div>
                        <div class="card-body">
                            <center>
                                <h1 class="card-title">Others</h1>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
      include "../WebFooter.php";
    ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap-4.0.0.js"></script>
</body>
</html>