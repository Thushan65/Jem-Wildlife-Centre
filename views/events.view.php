<?php
require('partials/head.php');
require('partials/nav.php');
require('partials/banner.php');
?>
<main class="mt-80">
    <div class="mx-auto max-w-7xl py-6 px-8 justify-center">
        <form method="get" class="grid grid-cols-2 justify-center">
            <div>
                <label for="txtSearch" class="block text-md font-medium leading-6 text-gray-900">Description</label>
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md mt-2">
                        <input type="text" name="description" id="description" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 relative z-10" value="<?= isset($_GET['description']) ? htmlspecialchars($_GET['description']) : '' ?>">
                        <button type="submit" class="px-5 relative z-10">Search</button>
                        <br>
                    </div>
                
            </div>

            <div>
                <label for="txtSearch" class="block font-medium leading-6 text-gray-900 text-md">Catalog</label>
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md mt-2">
                        <input type="text" name="catalog" id="catalog" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 relative z-10" value="<?= isset($_GET['catalog']) ? htmlspecialchars($_GET['catalog']) : '' ?>">
                        <button type="submit" class="px-5 relative z-10">Search</button>
                        <br>
                    </div>
            </div>
        </form>
        <p class="mt-4 mb-2"><?= $records ?></p>
        <div class="mx-auto max-w-7xl py-6 px-8">
            <p class="flex justify-start text-4xl font-palanquin font-bold px-5"> Our Events</p>
            <ul class="mt-5 grid lg:grid-cols-3 sm:grid-cols-1 grid-cols-1 sm:gap-4 gap-16 md:justify-center px-5">
                <?php
                foreach ($events as $event) {
                    $output = "<li>"."<h2 class='text-2xl bg-blue-950 text-white-400 text-center py-5'>".$event['name']."</h2>"."<br>"."<p class='text-xl font-montserrat text-center'>". $event['description']."</p>"."<br>"."<p class='text-md bg-red-600 text-center font-bold text-white'>". $event['catagory'] ."</p>"."<br>"."<p class='text-center text-black font-palanquin font-bold'>".$event['date'] ."</p>"."<br>"."<img src=".$event['imageURL']." alt=".$event['name'].">" ."</li>";
                    echo $output;
                } ?>
            </ul>
        </div>
    </div>
</main>

<?php
require('partials/footer.php');
?>
