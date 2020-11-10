<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>manage users</title>
    <link rel="icon" href="../images/tasks-solid.svg" />
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
    <div class="jumbotron text-white tabledata">
		<?php
		include_once './../Cord/connection.php';
		$sql = "SELECT * FROM `customer_details` WHERE Email != '$username'";
		$result = mysqli_query($conn,$sql);
		?>
        <br>
        <div class="table-responsive">
		<table id="table" class="table text-center">
			<thead>
				<tr>
					<th>NIC Number</th>
					<th>Name</th>
					<th>Contact Number</th>
					<th>User Access Type</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while($row=$result->fetch_assoc()):?>
				<tr>
					<td><?php echo $row['NIC']; ?></td>
					<td><?php echo $row['FirstName']."   ".$row['LastName']; ?></td>
					<td><?php echo $row['ContactNumber']; ?></td>
					<td><?php echo $row['User_Type']; ?></td>
					<td>
						<a class="btn btn-outline-success btn-lg" onClick="editbtn('<?php echo $row['NIC']; ?>','<?php echo $row['FirstName']." ".$row['LastName']; ?>','<?php echo $row['ContactNumber']; ?>','<?php echo $row['User_Type']; ?>')">Edit</a>
                    <a href="./../Cord/StaffDetails.php?delete=<?php echo $row['NIC']; ?>&database=customer_details" class="btn btn-outline-danger btn-lg">Delete</a></h6>
					</td>
				</tr>
				<?php endwhile;?>
			</tbody>
		</table>
    </div>
        <br>
    </div>
    <div class="modal fade text-white" id="editer" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form method="post" action="./../Cord/StaffDetails.php">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div class="form-group">
                            <h1>MANAGE USER ACCESS</h1>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">NIC Number :</label>
                            <input type="text" class="form-control " name="NIC" id="NIC" placeholder="NIC Number" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name :</label>
                            <input type="text" class="form-control " name="Item_Name" id="Item_Name" placeholder="Name" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">ContactNumber :</label>
                            <input type="text" class="form-control" name="ContactNumber" id="ContactNumber" placeholder="Fabric Type" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">User Access Status : </label>
                            <select class="form-control selectpicker" name="AccessStatus" id="AccessStatus">
                                <option value="">-----Select User Access-----</option>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select>
                        </div>
                        <div class="form-group align-content-center"><button name="edit" type="submit" class="btn btn-outline-light btn-lg btn-block">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
      include "../WebFooter.php";
    ?>
    <script>
        function editbtn( NIC, Name, ContactNumber, User_Type) {
            $( '#editer' ).modal( 'show' );
            document.getElementById( "NIC" ).value = NIC;
            document.getElementById( "Item_Name" ).value = Name;
            document.getElementById( "ContactNumber" ).value = ContactNumber;
            document.getElementById( "AccessStatus" ).value = User_Type;
        };
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap-4.0.0.js"></script>
</body>
</html>