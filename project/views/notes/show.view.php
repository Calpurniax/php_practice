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
        <footer class="mt-6">
          <a href="note/edit?id=<?= $note['id']?>" class="inline-flex justify-center rounded-md border border-transparent bg-gray-600 py-2 px-4 text-white">Edit</a>
        </footer>        
        <form class="mt-6" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value=<?= $note['id']?>>           
            <button class="text-sm text-red-500">Delete</button>
        </form>
      </div>
    </main>
  </div>
</body>

</html>