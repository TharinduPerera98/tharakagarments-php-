<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Staff Registration</title> 
    <link rel="icon" href="../images/user-friends-solid.svg" />
    <!-- Bootstrap -->
    <link href="../css/bootstrap-4.0.0.css" rel="stylesheet">
    <link href="../css/navibar.css" rel="stylesheet" type="text/css">
    <link href="../css/webfooter.css" rel="stylesheet" type="text/css">
    <link href="../css/EditData.css" rel="stylesheet" type="text/css">
    <link href="../css/Style.css" rel="stylesheet" type="text/css">
    <link href="../fontawesome-free-5.12.1-web/css/all.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
      include "../NaviBar.php";
    ?>
    <div class="container contentreg">
        <div class="row rows top">
            <div class="col-lg-12">
                <label class="register">Staff registration</label>
            </div>
            <?php
            if ( !empty( $_SESSION[ 'Upload' ] ) ):
                $Error = $_SESSION[ 'Upload' ];
            if ( $Error == "Unsuccessfull" ):
                echo "<font style=\"margin-left: 3.5rem\" size=\"4rem\" color=red>nic number or email address already in our database</font>";
            endif;
            endif;
            if ( !empty( $_SESSION['Successfull'] ) ):
                echo "<font style=\"margin-left: 3.5rem\" size=\"4rem\" color=aqua>Staff registration successfull</font>";
            endif;
            ?>
        </div>
        <form name="form" action="../Cord/registration.php" method="post" enctype="multipart/form-data">
            <div class="row rows top">
                <div class="col-lg-2 text-lg-right">
                    <label class="Label">First Name : </label>
                </div>
                <div class="col-lg-4 vali <?php
			if ( !empty($_SESSION['Upload']) ):
				echo " success ";
			endif;
			?>">

                    <input type="text" class="form-control" name="FirstName" placeholder="First Name" value="<?php
					if(!empty( $_SESSION['FirstName'] )):
					$FirstName= $_SESSION['FirstName'];
					echo $FirstName;
					endif;																					 
					?>" required>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="col-lg-2 text-lg-right">
                    <label class="Label">Last Name : </label>
                </div>
                <div class="col-lg-4 vali <?php
			if ( !empty($_SESSION['Upload']) ):
				echo " success ";
			endif;
			?>">
                    <input type="text" class="form-control" name="LastName" placeholder="Last Name" value="<?php
					if(!empty( $_SESSION['LastName'] )):
					$FirstName= $_SESSION['LastName'];
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
                    <label class="Label">Email : </label>
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
                    <input type="email" class="form-control" name="Email" placeholder="Email" value="<?php
					if(!empty( $_SESSION['Email'] )):
					$FirstName= $_SESSION['Email'];
					echo $FirstName;
					endif;																					 
					?>" required>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <?php
                        if ( !empty( $_SESSION[ 'Upload' ] ) ):
                            $Error = $_SESSION[ 'Upload' ];
                        if ( $Error == "Unsuccessfull" ):
                    ?>
                    <br/>
                    <small>
                        <?php
                            echo "nic number or email address already in our database <br/>";
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
                    <label class="Label">NIC : </label>
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
                    <input type="text" class="form-control" name="NIC" placeholder="NIC" value="<?php
					if(!empty( $_SESSION['NIC'] )):
					$FirstName= $_SESSION['NIC'];
					echo $FirstName;
					endif;																					 
					?>" required>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <?php
                        if ( !empty( $_SESSION[ 'Upload' ] ) ):
                            $Error = $_SESSION[ 'Upload' ];
                        if ( $Error == "Unsuccessfull" ):
                    ?>
                    <br/>
                    <small>
                        <?php
                            echo "nic number or email address already in our database";
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
                    <label class="Label">Contact Number : </label>
                </div>
                <div class="col-lg-6 vali <?php
			if ( !empty($_SESSION['Upload']) ):
				echo " success ";
			endif;
			?>">
                    <input type="text" class="form-control" name="ContactNumber" placeholder="Mobail Number" value="<?php
					if(!empty( $_SESSION['ContactNumber'] )):
					$FirstName= $_SESSION['ContactNumber'];
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
                    <label class="Label">Profile Picture : </label>
                </div>
                <div class="col-lg-6 vali <?php
			if ( !empty($_SESSION['Upload']) ):
				$Error = $_SESSION['Upload'];
			if ( $Error == "error" ):
				echo "error ";
			else:
				echo "success ";
			endif;
			endif;

			?>">

                    <input type="file" name="UploadFile" class="form-control-file " required>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>
                        <?php
                        if ( !empty( $_SESSION[ 'Upload' ] ) ):
                            $Error = $_SESSION[ 'Upload' ];
                        if ( $Error == "error" ):
                            echo "file transformation error";
                        endif;
                        endif;

                        ?>
                    </small>
                </div>
            </div>
            <div class="row rows">
                <div class="col-lg-4 text-lg-right">
                    <label class="Label">Password : </label>
                </div>
                <div class="col-lg-6 vali <?php
			if ( !empty($_SESSION['Upload']) ):
				$Error = $_SESSION['Upload'];
			if ( $Error == "Perror" ):
				echo "error ";
			else:
				echo "success ";
			endif;
			endif;

			?>">
                    <input type="password" class="form-control" name="Password" placeholder="Password" required>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <?php
                    if ( !empty($_SESSION['Upload']) ):
				    $Error = $_SESSION['Upload'];
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
			else:
				echo "success ";
			endif;
			endif;

			?>">
                    <input type="password" class="form-control" name="ConfirmPassword" placeholder="Confirm Password" required>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                </div>
            </div>
            <div class="row rows">
                <div class="col-lg-10 text-lg-right">
                    <button type="reset" class="btn btn-outline-light btn-lg">Clear</button>
                    <button type="submit" class="btn btn-outline-success btn-lg">register</button>
                </div>
            </div>
        </form>
        <?php
        unset( $_SESSION[ 'Upload' ] );
        unset( $_SESSION[ 'FirstName' ] );
        unset( $_SESSION[ 'LastName' ] );
        unset( $_SESSION[ 'Email' ] );
        unset( $_SESSION[ 'NIC' ] );
        unset( $_SESSION[ 'ContactNumber' ] );
        unset( $_SESSION['Successfull'] );
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