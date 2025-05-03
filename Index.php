<?php
// List of random Facebook profile URLs
$facebookAccounts = [
    "https://facebook.com/zuck",
    "https://facebook.com/facebookapp",
    "https://facebook.com/meta",
    "https://facebook.com/engineer",
    "https://facebook.com/natgeo"
];

// Pick a random one
$randomUrl = $facebookAccounts[array_rand($facebookAccounts)];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Social Info</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <a href="<?php echo $randomUrl; ?>" target="_blank" class="social-icon">
    <!-- Facebook SVG icon -->
    <svg viewBox="0 0 24 24">
      <path d="M22.675 0H1.325C.593 0 0 .593 0 1.326v21.348C0 23.407.593 24 1.325 24h11.49v-9.294H9.692v-3.622h3.123V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.464.099 2.797.143v3.24l-1.92.001c-1.504 0-1.794.715-1.794 1.763v2.312h3.587l-.467 3.622h-3.12V24h6.116C23.407 24 24 23.407 24 22.674V1.326C24 .593 23.407 0 22.675 0z"/>
    </svg>
  </a>
</body>
</html>
