<!-- Write PHP Script to upload Curriculum Vitae with following details: 
- File type: PDF & DOCX 
- File size: <=1MB -->

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $upload_dir = 'uploads/';
    $file = $_FILES['cv'];
    $file_name = basename($file['name']);
    $file_size = $file['size'];
    $file_tmp_name = $file['tmp_name'];
    $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    
    // Define allowed file types and size limit
    $allowed_types = ['pdf', 'docx'];
    $max_size = 1 * 1024 * 1024; // 1MB in bytes

    // Validate file type
    if (!in_array($file_type, $allowed_types)) {
        echo "Error: Only PDF and DOCX files are allowed.";
        exit();
    }

    // Validate file size
    if ($file_size > $max_size) {
        echo "Error: File size must be less than or equal to 1MB.";
        exit();
    }

    // Ensure the uploads directory exists
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }

    // Move the uploaded file to the target directory
    $target_file = $upload_dir . $file_name;
    if (move_uploaded_file($file_tmp_name, $target_file)) {
        echo "File uploaded successfully.";
    } else {
        echo "Error: There was a problem uploading your file.";
    }
} else {
    echo "No file uploaded.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Upload CV</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <h2>Upload Your Curriculum Vitae</h2>
    <label for="cv">Select CV (PDF or DOCX, max 1MB):</label>
    <input type="file" id="cv" name="cv" accept=".pdf,.docx" required><br><br>
    <input type="submit" value="Upload">
</form>
</body>
</html>
