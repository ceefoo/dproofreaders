<?php
$relPath = '../../../pinc/';
include_once($relPath.'base.inc');

// Handles transition from "one filter for all rounds" to "one filter per round".

echo "Making temp table...\n";
// because some versions of MySQL won't let us
// INSERT INTO the same table that we SELECT FROM.
mysqli_query(DPDatabase::get_connection(), "
	CREATE TEMPORARY TABLE user_filters_temp
       	SELECT *
       	FROM user_filters
	WHERE filtertype LIKE 'proof_%'
") or die(mysqli_error(DPDatabase::get_connection()));

echo "Copying 'proof_' rows to 'P1_' rows.\n";
mysqli_query(DPDatabase::get_connection(), "
	INSERT IGNORE INTO user_filters
	SELECT username, REPLACE(filtertype, 'proof_', 'P1_'), value
	FROM user_filters_temp
") or die(mysqli_error(DPDatabase::get_connection()));
echo mysqli_affected_rows(DPDatabase::get_connection()), " rows affected\n";

echo "Copying 'proof_' rows to 'P2_' rows.\n";
mysqli_query(DPDatabase::get_connection(), "
	INSERT IGNORE INTO user_filters
	SELECT username, REPLACE(filtertype, 'proof_', 'P2_'), value
	FROM user_filters_temp
") or die(mysqli_error(DPDatabase::get_connection()));
echo mysqli_affected_rows(DPDatabase::get_connection()), " rows affected\n";

echo "Delete the 'proof_' rows.\n";
mysqli_query(DPDatabase::get_connection(), "
	DELETE FROM user_filters
	WHERE filtertype LIKE 'proof_%'
") or die(mysqli_error(DPDatabase::get_connection()));
echo mysqli_affected_rows(DPDatabase::get_connection()), " rows affected\n";

// Handle rationalization of filtertypes for pool-related filters.

echo "Pool-related filters...\n";
$old_to_new = array(
	'avail_PP_'   => 'PP_av_',
	'avail_PPV_'  => 'PPV_av_',
);
foreach( $old_to_new as $old_stem => $new_stem )
{
	echo "Changing '$old_stem' to '$new_stem'...\n";
	mysqli_query(DPDatabase::get_connection(), "
		UPDATE user_filters
		SET filtertype = REPLACE( filtertype, '$old_stem', '$new_stem' )
		WHERE filtertype LIKE '$old_stem%'
	") or die(mysqli_error(DPDatabase::get_connection()));
	echo mysqli_affected_rows(DPDatabase::get_connection()), " rows affected\n";
}

echo "\nDone!\n";
?>
