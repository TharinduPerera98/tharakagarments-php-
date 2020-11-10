<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Release</title>
    <link rel="icon" href="../images/tshirt-solid.svg" />
    <!-- Bootstrap -->
    <link href="../css/bootstrap-4.0.0.css" rel="stylesheet">
    <link href="../css/navibar.css" rel="stylesheet" type="text/css">
    <link href="../css/webfooter.css" rel="stylesheet" type="text/css">
    <link href="../css/table.css" rel="stylesheet" type="text/css">
    <link href="../css/Style.css" rel="stylesheet" type="text/css">
    <link href="../fontawesome-free-5.12.1-web/css/all.css" rel="stylesheet" type="text/css">
</head>

<body style="padding-top: 4.3rem">
    <?php
      include "../NaviBar.php";
    ?>
    <?php
    include_once './../Cord/connection.php';
    $sql = "SELECT * FROM (
select s.item_name as item_name, s.Fabric_Type as Fabric_Type, s.Quantity as Quantity, s.Description as Description, s.production_status as production_status, s.item_number as item_number, s.Date as Date from boys_wear s
union
select b.item_name as item_name, b.Fabric_Type as Fabric_Type, b.Quantity as Quantity, b.Description as Description, b.production_status as production_status, b.item_number as item_number, b.Date as Date from gents_wear b
union
select c.item_name as item_name, c.Fabric_Type as Fabric_Type, c.Quantity as Quantity, c.Description as Description, c.production_status as production_status, c.item_number as item_number, c.Date as Date from girls_wear c 
union
select d.item_name as item_name, d.Fabric_Type as Fabric_Type, d.Quantity as Quantity, d.Description as Description, d.production_status as production_status, d.item_number as item_number, d.Date as Date from kids_wear d
union
select e.item_name as item_name, e.Fabric_Type as Fabric_Type, e.Quantity as Quantity, e.Description as Description, e.production_status as production_status, e.item_number as item_number, e.Date as Date from ladies_wear e 
union
select f.item_name as item_name, f.Fabric_Type as Fabric_Type, f.Quantity as Quantity, f.Description as Description, f.production_status as production_status, f.item_number as item_number, f.Date as Date from others f 
) foo where Date >= DATE_ADD(CURDATE(),INTERVAL -7 DAY) AND production_status='on going';";
    $sql1 = "SELECT * FROM (
select s.item_name as item_name, s.Fabric_Type as Fabric_Type, s.Quantity as Quantity, s.Description as Description, s.production_status as production_status, s.item_number as item_number, s.Date as Date from boys_wear s
union
select b.item_name as item_name, b.Fabric_Type as Fabric_Type, b.Quantity as Quantity, b.Description as Description, b.production_status as production_status, b.item_number as item_number, b.Date as Date from gents_wear b
union
select c.item_name as item_name, c.Fabric_Type as Fabric_Type, c.Quantity as Quantity, c.Description as Description, c.production_status as production_status, c.item_number as item_number, c.Date as Date from girls_wear c 
union
select d.item_name as item_name, d.Fabric_Type as Fabric_Type, d.Quantity as Quantity, d.Description as Description, d.production_status as production_status, d.item_number as item_number, d.Date as Date from kids_wear d
union
select e.item_name as item_name, e.Fabric_Type as Fabric_Type, e.Quantity as Quantity, e.Description as Description, e.production_status as production_status, e.item_number as item_number, e.Date as Date from ladies_wear e 
union
select f.item_name as item_name, f.Fabric_Type as Fabric_Type, f.Quantity as Quantity, f.Description as Description, f.production_status as production_status, f.item_number as item_number, f.Date as Date from others f 
) foo where Date >= DATE_ADD(CURDATE(),INTERVAL -7 DAY) AND production_status='on hand';";
    $result = mysqli_query( $conn, $sql );
    $result1 = mysqli_query( $conn, $sql1 );
    ?>
    <div id="FindSuppliers" class="offset">
    <div class="jumbotron">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="hedding">New Release</h3>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h5 class="hedding2">ongoing productions</h5>
            </div>
        </div>
        <div class="row">
            <?php
            while ( $row = $result->fetch_assoc() ):
                $item_number = $row[ 'item_number' ];
            $item_name = $row[ 'item_name' ];
            $Fabric_Type = $row[ 'Fabric_Type' ];
            $production_status = $row[ 'production_status' ];
            $Description = $row[ 'Description' ];
            $Quantity = $row[ 'Quantity' ];
            $sql2 = "SELECT * FROM (
select s.item_number as item_number, s.Image_path as Image_path from boys_wear_image s
union
select b.item_number as item_number, b.Image_path as Image_path from gents_wear_image b
union
select c.item_number as item_number, c.Image_path as Image_path from girls_wear_image c 
union
select d.item_number as item_number, d.Image_path as Image_path from kids_wear_image d
union
select e.item_number as item_number, e.Image_path as Image_path from ladies_wear_image e 
union
select f.item_number as item_number, f.Image_path as Image_path from others_image f 
) foo where  item_number='$item_number';";
            $result2 = mysqli_query( $conn, $sql2 );
            ?>
            <div class="col-md-4 align-content-center cardcss">
                <div class="card">
                    <div class="inner innerdb">
                        <div id="SlidShow<?php echo $item_number; ?>" class="carousel slide" data-ride="carousel" data-interval="7000">
                            <div class="carousel-inner card-img-topdb" role="listbox">
                                <?php
                                $i=0;
            while ( $row = $result2->fetch_assoc() ):
                                ?>
                                <div class="carousel-item imageinner <?php if($i==0){ echo 'active';}; $i++;?>" style="background-image: url('../Cord/<?php echo $row[ 'Image_path' ]; ?>');background-position: center;background-repeat: no-repeat;background-size: cover;background-size: cover"><a href="whatsapp://send?text=./../Cord/<?php echo $row[ 'Image_path' ]; ?>"><i class="fab fa-whatsapp-square"></i></a></div>
                                <?php endwhile;?>
                            </div>
                            <a class="carousel-control-prev" href="#SlidShow<?php echo $item_number; ?>" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </a> <a class="carousel-control-next" href="#SlidShow<?php echo $item_number; ?>" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </a> </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">

                            <h6>Item Number : <?php echo $item_number; ?></h6>
                            <h6>Item Name : <?php echo $item_name; ?></h6>
                            <h6>Fabric Type : <?php echo $Fabric_Type; ?></h6>
                            <h6>Production Status : <?php echo $production_status; ?></h6>
                            <h6>Quantity : <?php echo $Quantity; ?></h6>
                            <h6>Description : </h6>
                            <p class="card-text">
                                <?php echo $Description; ?>
                            </p>
                        </p>
                    </div>
                </div>
            </div>
            <?php endwhile;?>
        </div>
        <div class="row">
            <div class="col-12">
                <hr>
                <h5 class="hedding2">onhand productions</h5>
            </div>
        </div>
        <div class="row">
            <?php
            while ( $row = $result1->fetch_assoc() ):
                $item_number = $row[ 'item_number' ];
            $item_name = $row[ 'item_name' ];
            $Fabric_Type = $row[ 'Fabric_Type' ];
            $production_status = $row[ 'production_status' ];
            $Description = $row[ 'Description' ];
            $Quantity = $row[ 'Quantity' ];
            $sql2 = "SELECT * FROM (
select s.item_number as item_number, s.Image_path as Image_path from boys_wear_image s
union
select b.item_number as item_number, b.Image_path as Image_path from gents_wear_image b
union
select c.item_number as item_number, c.Image_path as Image_path from girls_wear_image c 
union
select d.item_number as item_number, d.Image_path as Image_path from kids_wear_image d
union
select e.item_number as item_number, e.Image_path as Image_path from ladies_wear_image e 
union
select f.item_number as item_number, f.Image_path as Image_path from others_image f 
) foo where  item_number='$item_number';";
            $result2 = mysqli_query( $conn, $sql2 );
            ?>
            <div class="col-md-4 align-content-center cardcss">
                <div class="card">
                    <div class="inner innerdb">
                        <div id="SlidShow<?php echo $item_number; ?>" class="carousel slide" data-ride="carousel" data-interval="7000">
                            <div class="carousel-inner card-img-topdb" role="listbox">
                                <?php
                                $i=0;
            while ( $row = $result2->fetch_assoc() ):
                                ?>
                                <div class="carousel-item imageinner <?php if($i==0){ echo 'active';}; $i++;?>" style="background-image: url('../Cord/<?php echo $row[ 'Image_path' ]; ?>');background-position: center;background-repeat: no-repeat;background-size: cover;background-size: cover"><a href="whatsapp://send?text=./../Cord/<?php echo $row[ 'Image_path' ]; ?>"><i class="fab fa-whatsapp-square"></i></a></div>
                                <?php endwhile;?>
                            </div>
                            <a class="carousel-control-prev" href="#SlidShow<?php echo $item_number; ?>" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </a> <a class="carousel-control-next" href="#SlidShow<?php echo $item_number; ?>" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </a> </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">

                            <h6>Item Number : <?php echo $item_number; ?></h6>
                            <h6>Item Name : <?php echo $item_name; ?></h6>
                            <h6>Fabric Type : <?php echo $Fabric_Type; ?></h6>
                            <h6>Production Status : <?php echo $production_status; ?></h6>
                            <h6>Quantity : <?php echo $Quantity; ?></h6>
                            <h6>Description : </h6>
                            <p class="card-text">
                                <?php echo $Description; ?>
                            </p>
                        </p>
                    </div>
                </div>
            </div>
            <?php endwhile;?>
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