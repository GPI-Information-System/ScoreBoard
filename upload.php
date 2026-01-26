<?php
// Create image folder if it doesn't exist
$imageFolder = __DIR__ . '/images';
if (!is_dir($imageFolder)) {
  mkdir($imageFolder, 0755, true);
}

// Check if file was uploaded
if (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
  http_response_code(400);
  echo json_encode([
    'success' => false,
    'message' => 'No file uploaded or upload error'
  ]);
  exit;
}

$file = $_FILES['file'];
$team = isset($_POST['team']) ? $_POST['team'] : 'unknown';

// Validate file type
$allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
if (!in_array($file['type'], $allowedTypes)) {
  http_response_code(400);
  echo json_encode([
    'success' => false,
    'message' => 'Invalid file type. Only images allowed.'
  ]);
  exit;
}

// Generate unique filename
$fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION);
$fileName = 'team_' . $team . '_' . time() . '.' . $fileExtension;
$filePath = $imageFolder . '/' . $fileName;

// Move uploaded file
if (move_uploaded_file($file['tmp_name'], $filePath)) {
  echo json_encode([
    'success' => true,
    'filePath' => 'images/' . $fileName,
    'message' => 'File uploaded successfully'
  ]);
} else {
  http_response_code(500);
  echo json_encode([
    'success' => false,
    'message' => 'Failed to save file'
  ]);
}
