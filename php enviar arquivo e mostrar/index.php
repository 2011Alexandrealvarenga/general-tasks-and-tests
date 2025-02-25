<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload and Display File</title>
</head>
<body>
    <h1>Upload a File</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" accept=".txt" required>
        <input type="submit" value="Upload File">
    </form>
</body>
</html>
