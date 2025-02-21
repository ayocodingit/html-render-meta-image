<?php
$imageUrl = isset($_GET['image']) ? $_GET['image'] : "https://static.xx.fbcdn.net/rsrc.php/v4/y1/r/xGN4CvUH3Nz.png";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic WhatsApp OG Image</title>

    <!-- Open Graph Meta Tags (Generated Server-Side) -->
    <meta property="og:title" content="Dynamic WhatsApp Link Preview">
    <meta property="og:description" content="Check out this dynamic Open Graph image!">
    <meta property="og:image" content="<?php echo htmlspecialchars($imageUrl); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">

    <!-- Force WhatsApp to refresh preview -->
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
</head>
<body>
    <h1>Dynamic WhatsApp Link Preview</h1>
    <p>Image URL: <?php echo htmlspecialchars($imageUrl); ?></p>
</body>
</html>
