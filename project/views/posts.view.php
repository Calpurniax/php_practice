<?php include "partials/header.php" ?>
<body class="h-full">
<div class="min-h-full">
    <?php include "partials/nav.php" ?>
    <?php include "partials/banner.php" ?>
 
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <h1>Los posis</h1>
      <ul>
        <?php foreach ($posts as $post) : ?>
            <li class="">
              <a class="text-blue-500 hover:underline"href="post?id=<?=$post['id']?>">
              <?=$post['content']?>
              </a>
            </li>
        <?php endforeach ?>
      </ul>
      <p class="mt-6">
        <a href="#" class="text-blue-500 hover:underline">Create new note</a>
      </p>
    </div>
  </main>
</div>
</body>
</html>