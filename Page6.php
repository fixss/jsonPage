<?php
$kv = array();
if ($_GET) {
	foreach ($_GET as $key => $value) {
		$kv[] = "\"$key\":\"$value\"";
	}
}

$query_string = join(",", $kv);
echo '{"testrecord1":{'.$query_string.'}}';
?>