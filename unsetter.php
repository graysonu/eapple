<? header("Content-type: text/html; charset=iso-8859-1"); ?>
<?php
	
	$q = $_GET["q"];
	session_start();
	if (isset($_SESSION[$q])) {
		unset($_SESSION[$q]);
	}

	$host = "localhost";
	$user = "appeapple";
	$password = "yvKeXjsa9cJTttyC";

	$con = mysql_connect($host, $user, $password);

	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("eapple", $con);

	$where = "SELECT * FROM apples WHERE 1=1";

	echo "<b>Refined by <i>(click to remove)</i>:</b><br>";

	foreach( $_SESSION as $get_name => $col_name ){
		echo '<i><a href="javascript:void(0)" class="unsetter" onclick="unsetAttributes(\'' . $get_name . '\')">' . $get_name . '=>' . $col_name . ',</a> </i>';
		$where .= " AND " . $get_name . " LIKE '%" . $col_name . "%'";
	}

	echo "<br>";
	
	$result = mysql_query($where);

	if ( mysql_num_rows($result) == 0 ){
		echo "<b><i>There are currently no apples matching the given criteria. Please remove some options by clicking on the blue links above!</i></b>";
	}
	
	/* Fetch records from query results */
	while ( $row = mysql_fetch_array( $result ) ) {
		echo '<table class="appleresults" id="' . $row['CultivarName'] .'">';
		if ( $row['PhotoFruit'] ){
			echo "<tr><td><img src='" . $row['PhotoFruit'] . "' alt='Photo broken' class='apple-img'></td></tr>";
		}
		if ( !$row['PhotoFruit'] ) {
			if ( $row['PhotoTree'] ) {
				echo "<tr><td><img src='" . $row['PhotoTree'] . "' alt='Photo broken' class='apple-img'></td></tr>";	
			}
			if ( !$row['PhotoTree'] ) {
				echo "<tr><td><img src='/images/APPLE2.png' class='apple-img'></td></tr>";
			}
		}
		echo "<tr><td class='name'><p>" . $row['CultivarName'] . "</p></td></tr>";
		echo "</table>";
	}
	mysql_close($con);

?>
