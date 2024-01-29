<?php include "partials/header.php" ?>
<body class="h-full">
<div class="min-h-full">
    <?php include "partials/nav.php" ?>
    <?php include "partials/banner.php" ?>
 
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1>Los posis</h1>
        <a href="posts" class="text-blue-500">Go back</a>
        <p class="mt-6"><?=$post['content']?></p>
        
    </div>
  </main>
</div>
</body>
</html>