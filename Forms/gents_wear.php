<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>gents wear</title>
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
    $sql = "SELECT * FROM `gents_wear` WHERE production_status='on going';";
    $sql1 = "SELECT * FROM `gents_wear` WHERE production_status='on hand';";
    $result = mysqli_query( $conn, $sql );
    $result1 = mysqli_query( $conn, $sql1 );
    ?>
    <div id="FindSuppliers" class="offset">
    <div class="jumbotron">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="hedding">gents wear</h3>
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
            $sql2 = "SELECT * FROM `gents_wear_image` WHERE item_number='$item_number';";
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
                            <h6 class="text-center">
                        <a class="btn btn-outline-success btn-lg" onClick="editbtn('<?php echo $item_number; ?>','<?php echo $item_name; ?>','<?php echo $Fabric_Type; ?>','<?php echo $Description; ?>','<?php echo $production_status; ?>','<?php echo $Quantity; ?>')">Edit</a>
                    <a href="./../Cord/UpdateDelete.php?delete=<?php echo $item_number; ?>&database=gents_wear" class="btn btn-outline-danger btn-lg">Delete</a></h6>
                        

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
            $sql2 = "SELECT * FROM `gents_wear_image` WHERE item_number='$item_number';";
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
                                <div class="carousel-item imageinner <?php if($i==0){ echo 'active';}; $i++;?> align-self-center" style="background-image: url('../Cord/<?php echo $row[ 'Image_path' ]; ?>');background-position: center;background-repeat: no-repeat;background-size: cover;background-size: cover"><a href="whatsapp://send?text=./../Cord/<?php echo $row[ 'Image_path' ]; ?>"><i class="fab fa-whatsapp-square"></i></a></div>
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
                            <h6 class="text-center">
                        <a class="btn btn-outline-success btn-lg" onClick="editbtn('<?php echo $item_number; ?>','<?php echo $item_name; ?>','<?php echo $Fabric_Type; ?>','<?php echo $Description; ?>','<?php echo $production_status; ?>','<?php echo $Quantity; ?>')">Edit</a>
                    <a href="./../Cord/UpdateDelete.php?delete=<?php echo $item_number; ?>&database=gents_wear" class="btn btn-outline-danger btn-lg">Delete</a></h6>
                        

                        </p>
                    </div>
                </div>
            </div>
            <?php endwhile;?>
        </div>
    </div>
    <div class="modal fade text-white" id="editer" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form method="post" action="./../Cord/UpdateDelete.php?database=gents_wear">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div class="form-group">
                            <h1>UPDATE ITEM</h1>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Item Number :</label>
                            <input type="text" class="form-control " name="Item_Number" id="Item_Number" placeholder="Item Number" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Item Name :</label>
                            <input type="text" class="form-control " name="Item_Name" id="Item_Name" placeholder="Item Name" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Fabric Type :</label>
                            <input type="text" class="form-control" name="Fabric_Type" id="Fabric_Type" placeholder="Fabric Type" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Quantity :</label>
                            <input type="text" class="form-control" name="Quantity" id="Quantity" placeholder="Fabric Type" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description :</label>
                            <textarea type="text" class="form-control" name="Description" id="Description" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Production Status : </label>
                            <select class="form-control selectpicker" name="ProductionStatus" id="ProductionStatus">
                                <option value="">-----Select Production Status-----</option>
                                <option value="On Going">On Going</option>
                                <option value="On Hand">On Hand</option>
                            </select>
                        </div>
                        <div class="form-group align-content-center"><button name="edit" type="submit" class="btn btn-outline-light btn-lg btn-block">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
      include "../WebFooter.php";
    ?>
    <script>
        function editbtn( item_number, Item_Name, Fabric_Type, Description, ProductionStatus, Quantity ) {
            $( '#editer' ).modal( 'show' );
            document.getElementById( "Item_Number" ).value = item_number;
            document.getElementById( "Item_Name" ).value = Item_Name;
            document.getElementById( "Fabric_Type" ).value = Fabric_Type;
            document.getElementById( "Description" ).value = Description;
            document.getElementById( "ProductionStatus" ).value = ProductionStatus;
            document.getElementById( "Quantity" ).value = Quantity;
        };
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap-4.0.0.js"></script>
</body>
</html>