<?php
    session_start();
    include_once '../Cord/connection.php';
    if ( empty( $_SESSION['Username'] ) ) {
    	header( "Location: ./../index.php" );
    }
    $username = $_SESSION[ 'Username' ];
	$sql = "SELECT * FROM `customer_details` WHERE Email='$username'";
	$resultset = mysqli_query( $conn, $sql );
	$record = mysqli_fetch_assoc( $resultset );
    ?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top"> <a class="navbar-brand" href="http://localhost/garment%20project"><img src="../images/TC-Logo.png"> Tharaka Garments</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <div class="dropdown show"> <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> PRODUCTS </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="../Forms/gents_wear">Gents Wear</a>
                                <a class="dropdown-item" href="../Forms/boys_wear">Boys Wear</a>
                                <a class="dropdown-item" href="../Forms/ladies_wear">Ladies Wear</a>
                                <a class="dropdown-item" href="../Forms/girls_wear">Girls Wear</a>
                                <a class="dropdown-item" href="../Forms/kids_wear">Kids Wear</a>
                                <a class="dropdown-item" href="../Forms/others">Others</a>
                                <a class="dropdown-item" href="../Forms/new_releas">New Release</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown show"><a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> items </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="../Forms/Registration">Add new item</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
						<div class="dropdown show"> <a class="nav-link dropdown-toggle datadropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../Cord/<?php echo $record['ProfilePicture']; ?>" class="rounded-circle img-fluid" alt="Placeholder image"><span> <?php echo $_SESSION['Username'];?></span> </a>
							<div class="dropdown-menu">
								<h6 class="dropdown-header">account settings</h6>
								<a class="dropdown-item" href="../Forms/EditDetails">edit profile</a>
                                <?php if ($_SESSION['UserType'] == 'Admin'):?>
                                <a class="dropdown-item" href="../Forms/Staff_Registration">Add Staff</a>
                                <a class="dropdown-item" href="../Forms/staff_access">Manage Users</a>
                                <?php endif;?>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="./../Cord/Logout"><i class="fas fa-sign-out-alt"></i> logout</a>
							</div>
						</div>
					</li>
                </ul>
            </div>
        </nav>