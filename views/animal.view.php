<?php
require('partials/head.php');
require('partials/nav.php');
require('partials/banner.php');
?>
<main class="mt-80">
  <div class="w-6/12 py-6 px-8">
    <p class="font-montserrat">Animal number: <?= htmlspecialchars($_GET['id']) ?></p>
    <p class="text-left font-palanquin">Description: <?= $animal['description']?></p>
    <img class="w-2/5 max-w-[300px] justify-center mt-2" src="<?= $animal['imageURL'] ?>" alt="<?= $animal['name'] ?>">
  </div>
  <p class="ml-4 mb-6">
    <a href="/jemwildlife2/<?= $returnURL ?>" class="text-blue-500 underline relative z-10">go back...</a>
  </p>
</main>

<?php
require('partials/footer.php');
?>
