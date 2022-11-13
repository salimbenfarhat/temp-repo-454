<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= $variables['meta']['title']; ?></title>
  <meta charset="UTF-8">
  <meta name="description" content="<?= $variables['meta']['description']; ?>">
  <meta name="author" content="Salim Benfarhat">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <base href="https://test.salim.click">
  <!-- LOADING FAVICON -->
  <link rel="icon" href="<?= 'public/favicon.ico'; ?>" sizes="any">
  <link rel="icon" href="<?= 'public/icon.svg'; ?>" type="image/svg+xml">
  <link rel="apple-touch-icon" href="<?= 'public/icon.png'; ?>">
  <!-- LOADING CSS FILES -->
  <link rel="stylesheet" href="public/assets/css/App.css">
  <!-- LOADING JS FILES -->
  <script src="<?= 'public/assets/js/App.js'; ?>" async></script>
</head>
<body>
  <h1>SBFRAMEWORK - TEST ENV.</h1>
  <?= $content; ?>
</body>
</html>