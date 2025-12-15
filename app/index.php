<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
  <style>
    :root {
      --bg: #ffffff;
      --text: #000000;
      --link: #0066cc;
    }

    @media (prefers-color-scheme: dark) {
      :root {
        --bg: #121212;
        --text: #e0e0e0;
        --link: #4da3ff;
      }
    }

    body {
      background-color: var(--bg);
      color: var(--text);
      font-family: Arial, sans-serif;
      padding: 2rem;
    }

    a {
      color: var(--link);
    }
  </style>
</head>
<body>
  <h1>Hello</h1>
  <p>Welcome to this PHP-FPM containerized service.</p>
  <a href="info.php">View PHP information</a>
</body>
</html>
