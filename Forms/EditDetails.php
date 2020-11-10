<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>edit details</title>
    <link rel="icon" href="../images/address-book-solid.svg" />
    <!-- Bootstrap -->
    <link href="../css/bootstrap-4.0.0.css" rel="stylesheet">
    <link href="../css/navibar.css" rel="stylesheet" type="text/css">
    <link href="../css/webfooter.css" rel="stylesheet" type="text/css">
    <link href="../css/Style.css" rel="stylesheet" type="text/css">
    <link href="../css/EditData.css" rel="stylesheet" type="text/css">
    <link href="../fontawesome-free-5.12.1-web/css/all.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
      include "../NaviBar.php";
    ?>
    <div class="container contentreg">
        <div class="row rows top">
            <div class="col-lg-12">
                <label class="register">edit details</label>
            </div>
            <?php
                if ( !empty( $_SESSION[ 'Upload' ] ) ):
                    $Error = $_SESSION[ 'Upload' ];
                if ( $Error == "Unsuccessfull" ):
                    echo "<font style=\"margin-left: 3.5rem\" size=\"4rem\" color=red>password reset error</font>";
                endif;
                endif;
                if ( !empty( $_SESSION[ 'Successfull' ] ) ):
                    echo "<font style=\"margin-left: 3.5rem\" size=\"4rem\" color=aqua>password reset successfully</font>";
                endif;
                ?>
        </div>
        <form name="form" action="./../Cord/EditData.php?ID=<?php echo $record['NIC']; ?>" method="post" enctype="multipart/form-data">
            <div class="row rowss">
                <div class="col-lg-6">
                    <center>
                        <img src="../Cord/<?php echo $record['ProfilePicture']?>" class="rounded-circle img-fluid profileimg" alt="Placeholder image">
                    </center>
                </div>
                <div class="col-lg-4 co">
                    <div class="row rowone">
                        <div class="col-lg-3 text-lg-right">
                            <label class="Label">Name :</label>
                        </div>
                        <div class="col-lg-6">
                            <label class="Label">
                                <?php echo $record['FirstName']."  ".$record['LastName']; ?>
                            </label>
                        </div>
                    </div>
                    <div class="row rows">
                        <div class="col-lg-3 text-lg-right">
                            <label class="Label">Email :</label>
                        </div>
                        <div class="col-lg-6">
                            <label class="Label Labeltext">
                                <?php echo $record['Email'] ?>
                            </label>
                        </div>
                    </div>
                    <div class="row rows">
                        <div class="col-lg-3 text-lg-right">
                            <label class="Label">NIC :</label>
                        </div>
                        <div class="col-lg-6 vali">
                            <label class="Label Labeltext">
                                <?php echo $record['NIC']; ?>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row rows">
                <div class="col-lg-4 text-lg-right">
                    <label class="Label">Contact Number : </label>
                </div>
                <div class="col-lg-6 vali">
                    <input type="text" class="form-control" name="ContactNumber" placeholder="Mobail Number" value="<?php echo $record['ContactNumber']; ?>" required>
                </div>
            </div>
            <div class="row rows top">
                <div class="col-lg-12">
                    <center>
                        <h4>CHANGE PASSWORD</h4>
                    </center>
                </div>
            </div>
            <div class="row rows">
                <div class="col-lg-4 text-lg-right">
                    <label class="Label">New Password : </label>
                </div>
                <div class="col-lg-6 vali <?php
			if ( !empty($_SESSION['Upload']) ):
				$Error = $_SESSION['Upload'];
			if ( $Error == "Perror" ):
				echo "error ";
			endif;
			endif;

			?>">
                    <input type="password" class="form-control" name="Password" placeholder="Password" required>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <?php
                        if ( !empty( $_SESSION[ 'Upload' ] ) ):
                            $Error = $_SESSION[ 'Upload' ];
                        if ( $Error == "Perror" ):
                    ?>
                    <br/>
                    <small>
                        <?php
                            echo "error : password mismatch";
                        ?>
                    </small>
                    <?php
                    endif;
                    endif;
                    ?>
                </div>
            </div>
            <div class="row rows">
                <div class="col-lg-4 text-lg-right">
                    <label class="Label">Confirm Password : </label>
                </div>
                <div class="col-lg-6 vali <?php
			if ( !empty($_SESSION['Upload']) ):
				$Error = $_SESSION['Upload'];
			if ( $Error == "Perror" ):
				echo "error ";
			endif;
			endif;

			?>">
                    <input type="password" class="form-control" name="ConfirmPassword" placeholder="Confirm Password" required>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                </div>
            </div>
            <div class="row rowsbtn">
                <div class="col-lg-10 text-lg-right">
                    <button type="reset" class="btn btn-outline-light btn-lg">Clear</button>
                    <button type="submit" class="btn btn-outline-success btn-lg">Update</button>
                </div>
            </div>
        </form>
        <?php
        unset( $_SESSION[ 'Upload' ] );
        unset( $_SESSION[ 'Successfull' ] );
        ?>
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