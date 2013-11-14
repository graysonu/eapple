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

	$result = mysql_query($where);

	echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";

	/* Fetch records from query results */
	while ( $row = mysql_fetch_array( $result ) ) {
		echo "<table class='master'>";
		echo "<tr><td class='category'>Cultivar Name:</td><td class='data'>" . $row['CultivarName'] . "</td></tr>";
		echo "<tr><td class='category'>Synonyms:</td><td class='data'>" . $row['Synonyms'] . "</td></tr>";
		echo "<tr><td class='category'>Zones: </td><td class='data'>" . $row['Zones'] . "</td></tr>";
		echo "<tr><td class='category'>Description:</td><td class='data'>" . $row['Description'] . "</td></tr>";
		echo "<tr><td class='category'>Parentage:</td><td class='data'>" . $row['Parentage'] . "</td></tr>";
		echo "<tr><td class='category'>Similar Strains:</td><td class='data'>" . $row['SimilarStrains'] . "</td></tr>";
		echo "<tr><td class='category'>Current Market Uses:</td><td class='data'>" . $row['CurrentMarketUses'] . "</td></tr>";
		echo "<tr><td class='category'>Fruit Size:</td><td class='data'>" . $row['FruitSize'] . "</td></tr>";
		echo "<tr><td class='category'>Fruit Shape:</td><td class='data'>" . $row['FruitShape'] . "</td></tr>";
		echo "<tr><td class='category'>Fruit Flavor:</td><td class='data'>" . $row['FruitFlavor'] . "</td></tr>";
		echo "<tr><td class='category'>Flesh Texture:</td><td class='data'>" . $row['FleshTexture'] . "</td></tr>";
		echo "<tr><td class='category'>Flesh Color:</td><td class='data'>" . $row['FleshColor'] . "</td></tr>";
		echo "<tr><td class='category'>Skin Ground Color:</td><td class='data'>" . $row['SkinGroundColor'] . "</td></tr>";
		echo "<tr><td class='category'>Skin Over Color:</td><td class='data'>" . $row['SkinOverColor'] . "</td></tr>";
		echo "<tr><td class='category'>Color Pattern:</td><td class='data'>" . $row['ColorPattern'] . "</td></tr>";
		echo "<tr><td class='category'>Skin Russetting:</td><td class='data'>" . $row['SkinRussetting'] . "</td></tr>";
		echo "<tr><td class='category'>Uses:</td><td class='data'>" . $row['Uses'] . "</td></tr>";
		echo "<tr><td class='category'>Growth Habit:</td><td class='data'>" . $row['GrowthHabit'] . "</td></tr>";
		echo "<tr><td class='category'>Tree Vigor:</td><td class='data'>" . $row['TreeVigor'] . "</td></tr>";
		echo "<tr><td class='category'>Bloom Season:</td><td class='data'>" . $row['BloomSeason'] . "</td></tr>";
		echo "<tr><td class='category'>Chemical Thinning:</td><td class='data'>" . $row['ChemicalThinning'] . "</td></tr>";
		echo "<tr><td class='category'>Average Harvest Date:</td><td class='data'>" . $row['AverageHarvestDate'] . "</td></tr>";
		echo "<tr><td class='category'>Fruit Storage Life:</td><td class='data'>" . $row['FruitStorageLife'] . "</td></tr>";
		echo "<tr><td class='category'>Fireblight:</td><td class='data'>" . $row['Fireblight'] . "</td></tr>";
		echo "<tr><td class='category'>Apple Scab:</td><td class='data'>" . $row['AppleScab'] . "</td></tr>";
		echo "<tr><td class='category'>Powdery Mildew:</td><td class='data'>" . $row['PowderyMildew'] . "</td></tr>";
		echo "<tr><td class='category'>Rusts:</td><td class='data'>" . $row['Rusts'] . "</td></tr>";
		echo "<tr><td class='category'>Rots:</td><td class='data'>" . $row['Rots'] . "</td></tr>";
		echo "<tr><td class='category'>Sooty Blotch/Fly Speck:</td><td class='data'>" . $row['SootyBlotchFlySpeck'] . "</td></tr>";
		echo "<tr><td class='category'>Calcium Related Disorders:</td><td class='data'>" . $row['CalciumRelatedDisorders'] . "</td></tr>";
		echo "<tr><td class='category'>Fruit Cracking:</td><td class='data'>" . $row['FruitCracking'] . "</td></tr>";
		echo "<tr><td class='category'>Preharvest Drop:</td><td class='data'>" . $row['PreharvestDrop'] . "</td></tr>";
		echo "<tr><td class='category'>Biennial Bearing:</td><td class='data'>" . $row['BiennialBearing'] . "</td></tr>";
		echo "</table>";
	}

?>