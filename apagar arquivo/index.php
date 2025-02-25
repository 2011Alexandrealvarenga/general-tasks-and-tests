<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  teste


<?php
// $folder = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'].'files/';
// $urlParts = parse_url($url);
// $folder = $urlParts['path'];
// echo "URL Path: $folder";



// Folder path
// $folder = '/path/to/your/folder/';

// Open the directory
// $dir = opendir($folder);

// echo $dir;
// Iterate through files
// while (($file = readdir($dir)) !== false) {
//     $filePath = $folder . $file;
    
//     // Check if it's a file and not a directory
//     if (is_file($filePath)) {
//         // Delete the file
//         unlink($filePath);
//         echo "Deleted: $file\n"; // Output for demonstration
//     }
// }

// // Close the directory handle
// closedir($dir);


$dir = "/images/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      echo "filename:" . $file . "<br>";
    }
    closedir($dh);
  }
}
?>


</body>
</html>