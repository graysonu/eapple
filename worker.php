<? header("Content-type: text/html; charset=iso-8859-1"); ?>
<?php
	if (! isset($_SESSION) ) {
		session_start();
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
	$_SESSION = array_merge($_SESSION, $_GET);

	echo "<b>Refined by <i>(click to remove)</i>:</b><br>";

	foreach( $_SESSION as $get_name => $col_name ){
		echo '<i><a href="javascript:void(0)" class="unsetter" onclick="unsetAttributes(\'' . $get_name . '\')">' . $get_name . '=>' . $col_name . '</a>, </i>';
		$where .= " AND " . $get_name . " LIKE '%" . $col_name . "%'";
	}

	echo "<br>";
	
	$result = mysql_query($where);

	if ( !mysql_fetch_array($result) ){
		echo "<b><i>There are currently no apples matching the given criteria. Please remove some options by clicking on the blue links above!</i></b>";
	}
	
	/* Fetch records from query results */
	while ( $row = mysql_fetch_array( $result ) ) {
		echo '<table class="appleresults" border="1" id="' . $row['CultivarName'] .'">';
		if ( $row['PhotoFruit'] ){
			echo "<tr><td><img src='" . $row['PhotoFruit'] . "' alt='Photo broken' width='150' height='150'></td></tr>";
		}
		if ( !$row['PhotoFruit'] ) {
			if ( $row['PhotoTree'] ) {
				echo "<tr><td><img src='" . $row['PhotoTree'] . "' alt='Photo broken' width='150' height='150'></td></tr>";	
			}
			if ( !$row['PhotoTree'] ) {
				echo "<tr><td><img src='/images/APPLE2.png' width='150' height='150'></td></tr>";
			}
		}
		echo "<tr><td class='name'><b>Name: </b>" . $row['CultivarName'] . "</td></tr>";
		echo "</table>";
	}
	mysql_close($con);
	?>

