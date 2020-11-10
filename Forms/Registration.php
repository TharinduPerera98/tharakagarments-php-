<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Item Registration</title>
    <link rel="icon" href="../images/folder-plus-solid.svg" />
    <!-- Bootstrap -->
    <link href="../css/Style_Login.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap-4.0.0.css" rel="stylesheet">
    <link href="../css/navibar.css" rel="stylesheet" type="text/css">
    <link href="../css/webfooter.css" rel="stylesheet" type="text/css">
    <link href="../css/Style.css" rel="stylesheet" type="text/css">
    <link href="../fontawesome-free-5.12.1-web/css/all.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
      include "../NaviBar.php";
    ?>
    <div class="container contentreg">
        <form name="form" action="./../Cord/index.php" method="post" enctype="multipart/form-data">
            <div class="row rows top">
                <div class="col-lg-12">
                    <label class="register">item registration</label>
                </div>
                <?php
                if ( !empty( $_SESSION[ 'Upload' ] ) ):
                    $Error = $_SESSION[ 'Upload' ];
                if ( $Error == "Unsuccessfull" ):
                    echo "<font style=\"margin-left: 3.5rem\" size=\"4rem\" color=red>item number already in our database</font>";
                endif;
                endif;
                if ( !empty( $_SESSION[ 'Successfull' ] ) ):
                    echo "<font style=\"margin-left: 3.5rem\" size=\"4rem\" color=aqua>item registration successfull</font>";
                endif;
                ?>
            </div>
            <div class="row rows">
                <div class="col-lg-4 text-lg-right">
                    <label class="Label">item number : </label>
                </div>
                <div class="col-lg-6 vali <?php
			if ( !empty($_SESSION['Upload']) ):
				$Error = $_SESSION['Upload'];
			if ( $Error == "Unsuccessfull" ):
				echo "error ";
			else:
				echo "success ";
			endif;
			endif;
			?>">
                    <input type="text" class="form-control" name="ItemNumber" placeholder="Item Number" value="<?php
					if(!empty( $_SESSION['ItemNumber'] )):
					$FirstName= $_SESSION['ItemNumber'];
					echo $FirstName;
					endif;																					 
					?>" required>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
            </div>
            <div class="row rows">
                <div class="col-lg-4 text-lg-right">
                    <label class="Label">item name : </label>
                </div>
                <div class="col-lg-6 vali <?php
			if ( !empty($_SESSION['Upload']) ):
				echo " success ";
			endif;
			?>">
                    <input type="text" class="form-control" name="ItemName" placeholder="Item Name" value="<?php
					if(!empty( $_SESSION['ItemName'] )):
					$FirstName= $_SESSION['ItemName'];
					echo $FirstName;
					endif;																					 
					?>" required>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
            </div>
            <div class="row rows">
                <div class="col-lg-4 text-lg-right">
                    <label class="Label">item images : </label>
                </div>
                <div class="col-lg-6 vali <?php
			if ( !empty($_SESSION['Upload']) ):
				$Error = $_SESSION['Upload'];
			if ( $Error == "imageerror" ):
				echo "error ";
			else:
				echo "success ";
			endif;
			endif;
			?>">
                    <input type="file" name="UploadFile[]" class="form-control-file " multiple required>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
            </div>
            <div class="row rows">
                <div class="col-lg-4 text-lg-right">
                    <label class="Label">fabric type : </label>
                </div>
                <div class="col-lg-6 vali <?php
			if ( !empty($_SESSION['Upload']) ):
				echo " success ";
			endif;
			?>">
                    <input type="text" class="form-control" name="FabricType" placeholder="Fabric Type" value="<?php
					if(!empty( $_SESSION['FabricType'] )):
					$FirstName= $_SESSION['FabricType'];
					echo $FirstName;
					endif;																					 
					?>" required>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
            </div>
            <div class="row rows">
                <div class="col-lg-4 text-lg-right">
                    <label class="Label">Quantity : </label>
                </div>
                <div class="col-lg-6  vali <?php
			if ( !empty($_SESSION['Upload']) ):
				echo " success ";
			endif;
			?>">
                    <input type="text" class="form-control" name="Quantity" placeholder="Quantity" value="<?php
					if(!empty( $_SESSION['Quantity'] )):
					$FirstName= $_SESSION['Quantity'];
					echo $FirstName;
					endif;																					 
					?>" required>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
            </div>
            <div class="row rows top">
                <div class="col-lg-4 text-lg-right">
                    <label class="Label">item type : </label>
                </div>
                <div class="col-lg-4 vali <?php
			if ( !empty($_SESSION['Upload']) ):
				echo " success ";
			endif;
			?>">
                    <select class="form-control selectpicker" name="Item_type" id="Item_type" required>
                        <option value="">-----Select Item Type-----</option>
                        <option value="gents_wear">Gents Wear</option>
                        <option value="boys_wear">Boys Wear</option>
                        <option value="ladies_wear">Ladies Wear</option>
                        <option value="girls_wear">Girls Wear</option>
                        <option value="kids_wear">Kids Wear</option>
                        <option value="others">Others</option>
                    </select>
                </div>
            </div>
            <div class="row rows">
                <div class="col-lg-4 text-lg-right">
                    <label class="Label">Description : </label>
                </div>
                <div class="col-lg-6 vali <?php
			if ( !empty($_SESSION['Upload']) ):
				echo " success ";
			endif;
			?>">
                    <textarea type="text" class="form-control" name="Description" placeholder="Description" required><?php
					if(!empty( $_SESSION['Description']  )):
					$FirstName= $_SESSION['Description'] ;
					echo $FirstName;
					endif;																					 
                    ?></textarea>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
            </div>
            <div class="row rows top">
                <div class="col-lg-4 text-lg-right">
                    <label class="Label">Production Status : </label>
                </div>
                <div class="col-lg-4 vali <?php
			if ( !empty($_SESSION['Upload']) ):
				echo " success ";
			endif;
			?>">
                    <select class="form-control selectpicker" name="ProductionStatus" id="ProductionStatus" required>
                        <option value="">-----Select Production Status-----</option>
                        <option value="On Going">On Going</option>
                        <option value="On Hand">On Hand</option>
                    </select>

                </div>
            </div>
            <div class="row rows">
                <div class="col-lg-10 text-lg-right">
                    <button type="reset" class="btn btn-outline-light btn-lg">Clear</button>
                    <button type="submit" class="btn btn-outline-success btn-lg">register</button>
                </div>
            </div>
        </form>
    </div>
    <?php
      include "../WebFooter.php";
    ?>
    <?php
    unset( $_SESSION[ 'Upload' ] );
    unset( $_SESSION[ 'ItemNumber' ] );
    unset( $_SESSION[ 'ItemName' ] );
    unset( $_SESSION[ 'Item_type' ] );
    unset( $_SESSION[ ' Description' ] );
    unset( $_SESSION[ 'Quantity' ] );
    unset( $_SESSION[ 'ProductionStatus' ] );
    unset( $_SESSION[ 'FabricType' ] );
    unset( $_SESSION[ 'Successfull' ] );
    ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap-4.0.0.js"></script>
</body>
</html>