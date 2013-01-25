<? header("Content-type: text/html; charset=iso-8859-1"); ?>
<?php
	$host = "localhost";
	$user = "appeapple";
	$password = "yvKeXjsa9cJTttyC";

	$con = mysql_connect($host, $user, $password);

	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("eapple", $con);

	$where = "SELECT * FROM apples WHERE 1=1";

	foreach( $_GET as $get_name => $col_name ){
		$where .= " AND " . $get_name . " LIKE '" . $col_name . "'";
	}

	$result = mysql_query($where);
	
	/* Fetch records from query results */
	while ( $row = mysql_fetch_array( $result ) ) {
		if ( $row['PhotoFruit'] && $row['PhotoTree'] ) {
			echo "<img src='" . $row['PhotoFruit'] . "' style='max-width:300px'>";
			echo "<img src='" . $row['PhotoTree'] . "' style='max-width:300px;padding-left:15px'><br>";
		}
		if ( $row['PhotoFruit'] && !$row['PhotoTree'] ) {
			echo "<img src='" . $row['PhotoFruit'] . "' style='max-width:300px'><br>";
		}
		if ( $row['PhotoTree'] && !$row['PhotoFruit'] ) {
			echo "<img src='" . $row['PhotoTree'] . "' style='max-width:300px'><br>";
		}
		echo '<a href=\'modal.php?cultivarname=' . urlencode($row['CultivarName']) . '\' target=\'_blank\' style=\'hover=underline\'>Print Friendly!</a>';
		echo "<p><b>Name of the Cultivar: </b>" . $row['CultivarName'] . "</p>";
		if ( $row['Synonyms'] && ($row['Synonyms'] != 'none') && ($row['Synonyms'] != 'None') ) {
			echo "<p><i>Also known as " . $row['Synonyms'] . "</i></p>";			
		}
		echo "<p><i>Planted in zones " . $row['Zones'] . "</i></p>";
		echo "<p>" . $row['Description'] . "</p><hr>";
		
		echo "<h1>Fruit Information: </h1>";
		echo "<p><b>Parentage: </b>" . $row['Parentage'] . "</p>";
		echo "<p><b>Similar Strains: </b>" . $row['SimilarStrains'] . "</p>";
		echo "<p><b>Current Market Uses: </b>" . $row['CurrentMarketUses'] . "</p>";
		echo "<p><b>Fruit Size: </b>" . $row['FruitSize'] . "</p>";
		echo "<p><b>Fruit Shape: </b>" . $row['FruitShape'] . "</p>";
		echo "<p><b>Fruit Flavor: </b>" . $row['FruitFlavor'] . "</p>";
		echo "<p><b>Flesh Texture: </b>" . $row['FleshTexture'] . "</p>";
		echo "<p><b>Flesh Color: </b>" . $row['FleshColor'] . "</p>";
		echo "<p><b>Skin Ground Color: </b>" . $row['SkinGroundColor'] . "</p>";
		echo "<p><b>Skin Over Color: </b>" . $row['SkinOverColor'] . "</p>";
		echo "<p><b>Color Pattern: </b>" . $row['ColorPattern'] . "</p>";
		echo "<p><b>Skin Russetting: </b>" . $row['SkinRussetting'] . "</p>";
		echo "<p><b>Uses: </b>" . $row['Uses'] . "</p>";
		echo "<p><b>Growth Habit: </b>" . $row['GrowthHabit'] . "</p>";
		echo "<p><b>Tree Vigor: </b>" . $row['TreeVigor'] . "</p>";
		echo "<p><b>Bloom Season: </b>" . $row['BloomSeason'] . "</p>";
		echo "<p><b>Chemical Thinning: </b>" . $row['ChemicalThinning'] . "</p>";
		echo "<p><b>Average Harvest Date: </b>" . $row['AverageHarvestDate'] . "</p>";
		echo "<p><b>Fruit Storage Life: </b>" . $row['FruitStorageLife'] . "</p>";
		
		echo "<h1>Problem Susceptibility: </h1>";
		echo "<p><b>Fireblight: </b>" . $row['Fireblight'] . "</p>";
		echo "<p><b>Apple Scab: </b>" . $row['AppleScab'] . "</p>";
		echo "<p><b>Powdery Mildew: </b>" . $row['PowderyMildew'] . "</p>";
		echo "<p><b>Rusts: </b>" . $row['Rusts'] . "</p>";
		echo "<p><b>Rots: </b>" . $row['Rots'] . "</p>";
		echo "<p><b>Sooty Blotch/Fly Speck: </b>" . $row['SootyBlotchFlySpeck'] . "</p>";
		echo "<p><b>Calcium Related Disorders: </b>" . $row['CalciumRelatedDisorders'] . "</p>";
		echo "<p><b>Fruit Cracking: </b>" . $row['FruitCracking'] . "</p>";
		
		echo "<h1>Atypical Tendencies: </h1>";
		echo "<p><b>Preharvest Drop: </b>" . $row['PreharvestDrop'] . "</p>";
		echo "<p><b>Biennial Bearing: </b>" . $row['BiennialBearing'] . "</p>";

	}
	mysql_close($con);
	?>