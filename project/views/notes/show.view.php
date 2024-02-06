<?php include base_path("views/partials/header.php") ?>

<body class="h-full">
  <div class="min-h-full">
    <?php include base_path("views/partials/nav.php") ?>
    <?php include base_path("views/partials/banner.php") ?>

    <main>
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1>Los posis</h1>
        <a href="notes" class="text-blue-500">Go back</a>
        <p class="mt-6"><?= htmlspecialchars($note['content']) ?></p>
      </div>
    </main>
  </div>
</body>

</html>