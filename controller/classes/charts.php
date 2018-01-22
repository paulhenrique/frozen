<?php
function create_list_charts(){
	$types = array('json');
	if ($handle = opendir('../users/'.$_SESSION["user"]["user"].'/')) {
	$title = array();
		while ($entry = readdir( $handle ) ) {
			$ext = strtolower( pathinfo( $entry, PATHINFO_EXTENSION) );
			if(in_array($ext, $types))
				$title[] = $entry;
		}
		closedir($handle);
		return $title;
	}
}
?>