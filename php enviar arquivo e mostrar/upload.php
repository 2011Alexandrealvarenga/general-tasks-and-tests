<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] == 0) {
        // Get file information
        $fileTmpPath = $_FILES['fileToUpload']['tmp_name'];
        $fileName = $_FILES['fileToUpload']['name'];
        $fileSize = $_FILES['fileToUpload']['size'];
        $fileType = $_FILES['fileToUpload']['type'];
        $fileNameCmps = explode('.', $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
        
        // Define allowed file types
        $allowedExtensions = ['txt'];

        // Check file extension
        if (in_array($fileExtension, $allowedExtensions)) {
            // Read the file content
            $fileContent = file_get_contents($fileTmpPath);
            
            echo "<h1>File Content:</h1>";
            echo "<pre> conteudo: " . htmlspecialchars($fileContent) . "</pre>";
        } else {
            echo "Invalid file type. Only .txt files are allowed.";
        }
    } else {
        echo "There was an error uploading the file.";
    }
} else {
    echo "Invalid request.";
}
?>
