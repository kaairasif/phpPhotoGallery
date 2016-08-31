<?php

echo fileowner("file_permission.php");

//if we have posix installed.

$owner_id = fileowner("file_permission.php");

echo "<br />";

if (function_exists('posix_getuid')) {
    echo "posix_getuid available";
} else {
    echo "posix_getuid not available"; // this prints in my server.
}

// if(isset(posix_getpwuid()) ) {
//   $owner_array = posix_getpwuid($owner_id);
//   echo $owner_array['name'];
// }else {
// 	echo "POSIX is not installed";
// }
?>