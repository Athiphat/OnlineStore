	<?php
	require_once('connect.php'); 
	if(isset($_POST['submit'])) {
		/* 11. take all the values given from editinfo.php by using post varaibale. */
		// $groupid=$_POST['uid']; /*Answer Here*/
		// $groupcode =$_POST['groupcode'];/*Answer Here*/
		// $groupname = $_POST['groupname'];/*Answer Here*/
		// $remark = $_POST['remark'];/*Answer Here*/
		// $url = $_POST['groupurl'];/*Answer Here*/

			/* 12. Write a SQL statement to update the record of the USER_GROUP table
			*  by setting all values into the table
			*  based on the given $groupid */
		/* 13. Assign the SQL statement into a variable $q1. */
		$q1="update cart_item set item_id=1, quantity=1 ";/*Answer Here*/
		
		/*14. Execute $q$ by the query() method. 
			* 15. Assign the results to varaibale $result1.
			*/
		$result1=$mysqli->query($q1);/*Answer Here*/
		if(!$result1){
			echo "update failed. Error: ".$mysqli->error ;
			return false;
			}
		header("Location: Product-detail.php");
	}
	?>