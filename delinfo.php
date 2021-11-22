	<?php
	$id = $_GET['id'];
	$itemid = $_GET['itemid'];
	require_once('connect.php');
	if (isset($itemid)) {
		$q="DELETE FROM cart_item where item_id=$itemid";
			if(!$mysqli->query($q)){
				echo "DELETE failed. Error: ".$mysqli->error ;
			}
			$mysqli->close();
			//redirect
			header("Location: Cart.php");
	}
	elseif(isset($userid)) {
		$q="DELETE FROM USER where USER_ID=$userid";
			if(!$mysqli->query($q)){
				echo "DELETE failed. Error: ".$mysqli->error ;
			}
			$mysqli->close();
			//redirect
			header("Location: user.php");
	}
	?>
