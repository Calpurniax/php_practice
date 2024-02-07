<?php include base_path("views/partials/header.php") ?>
<body class="h-full">
  <div class="min-h-full">
    <?php include base_path("views/partials/nav.php") ?>
    <?php include base_path("views/partials/banner.php") ?>
    <main>
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form method="POST" action="/personal/php_practice/project/public/notes">
          <div class="shadow sm:overflow-hidden sm:rounded-md">
            <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
              <div>
                <label for="content" class="block text-sm font-medium text-gray-700">New note:</label>
                <div class="mt-1">
                  <textarea id="content" rows="3" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" name="content"><?= $_POST['content'] ?? '' ?></textarea>
                </div>
                <?php if (isset($errors['body'])) : ?>
                  <p class="text-red-500 text-xs mt-2">
                    <?= $errors['body'] ?>
                  </p>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
            <a href="/personal/php_practice/project/public/notes" type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-white">Back to notes</a>
            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-white">Save</button>
          </div>      
        </form>
      </div>
    </main>
  </div>
</body>

</html>