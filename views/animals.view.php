<?php
require('partials/head.php');
require('partials/nav.php');
require('partials/banner.php');
?>
<main class="mt-80">
    <div class="mx-auto max-w-7xl py-6 px-8">
        <p class="flex justify-start text-4xl font-palanquin font-bold px-5"> Our Animals</p>
        <ul class="mt-5 grid lg:grid-cols-3 sm:grid-cols-1 grid-cols-1 sm:gap-4 gap-16 md:justify-center px-5">
        <?php
        foreach ($animals as $animal) {
            $output = "<li>" ."<br>"."<a href='/jemwildlife2/animal?id=". $animal['ID'] . "&return=animals'>"."<h1 class='mb-5 text-center py-5 mt-5 relative z-10 text-white-400 hover:underline text-2xl bg-blue-950 font-montserrat'>". $animal['name'] ."</h1>". "</a> "."<br> <br>"."<img src=".$animal['imageURL']." alt=".$animal['name'].">"."</li>";
            echo $output;
        } ?>
        </ul>
    </div>
</main>
<?php
require('partials/footer.php');
?>
