<?php
require('views/partials/head.php');
require('views/partials/nav.php');
require('views/partials/banner.php');
?>


    <section class="flex flex-1 flex-col mt-80 px-5">
        <h3 class="text-4xl capitalize font-palanquin font-bold py-10">About Us</h3>
        <p class="mt-4 info-text text-justify">Welcome to Jem Wildlife Centre, nestled near Penkridge in Staffordshire, where our passion for wildlife drives our mission. Committed to the welfare of British wild animals, we specialize in rescuing those in distress—be it the sick, injured, or orphaned. Our dedicated team works tirelessly to rehabilitate and release these creatures back into their natural habitats, fostering their resilience for a second chance at a wild and free life. For those who may not thrive in the wild, we provide a loving and permanent home, ensuring they receive the care and support they need. At Jem Wildlife Centre, every rescue is a step towards preserving our natural treasures, embodying our dedication to the wellbeing of our native wildlife. Join us in making a difference—one rescue at a time.</p>
        <br>
        <h3 class="text-4xl capitalize font-palanquin font-bold py-10">Our Conservation efforts</h3>
        <p class="mt-4 info-text text-justify">At Jem Wildlife Centre, our commitment extends beyond rescue to active conservation efforts. We strive to contribute to the preservation of local ecosystems by engaging in habitat restoration projects and wildlife conservation initiatives. By partnering with local communities, educational institutions, and environmental organizations, we aim to raise awareness about the importance of safeguarding our natural heritage. Our conservation programs include educational outreach, advocating for sustainable practices, and collaborating with like-minded partners to create a united front for the protection of British wildlife. At Jem Wildlife Centre, we believe that through collective efforts, we can create a brighter and more sustainable future for both the rescued animals under our care and the broader ecosystems they inhabit. Join us in our conservation journey, as we work towards a harmonious coexistence between humanity and the precious wildlife we are dedicated to preserving.</p>
    </section>

    <section class="max-container max-sm:mt-12 mt-10">
        <h2 class="flex justify-start text-4xl font-palanquin font-bold px-5">Our Animals</h2>
        <div class="mt-5 grid lg:grid-cols-3 sm:grid-cols-1 grid-cols-1 sm:gap-4 gap-16 md:justify-center px-5">
            <a href="/jemwildlife2/animals" class="transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
                <img src="images/homeanimals1.jpg" alt="Picture of an animal" class="rounded-xl" width="500" height="400">
                <br>
                <h3 class="text-2xl font-montserrat mb-5 text-center font-semibold bg-slate-gray rounded-xl">British Hedgehog</h3>
            </a>
            <a href="/jemwildlife2/animals" class="transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
                <img src="images/pic1.webp" alt="Picture of an animal" class="rounded-xl" width="500" height="400">
                <br>
                <h3 class="text-2xl font-montserrat mb-5 text-center font-semibold bg-slate-gray rounded-xl">British Squirrel</h3>
            </a>
            <a href="/jemwildlife2/animals" class="transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
                <img src="images/homeanimals3.jpg" alt="Picture of an animal" class="rounded-xl" width="500" height="400">
                <br>
                <h3 class="text-2xl font-montserrat mb-5 text-center font-semibold bg-slate-gray rounded-xl">British Wild Cat</h3>
            </a>
        </div>
    </section>

    <section class="max-container max-sm:mt-12 mt-10">
        <h2 class="flex justify-start text-4xl font-palanquin font-bold px-5">Our Events</h2>
        <div class="mt-5 grid lg:grid-cols-3 sm:grid-cols-1 grid-cols-1 sm:gap-4 gap-16 md:justify-center px-5">
            <a href="/jemwildlife2/events" class="transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
                <img src="images/meetanimals.jpg" alt="Picture of an animal" class="rounded-xl" width="500" height="400">
                <br>
                <h3 class="text-2xl font-montserrat mb-5 text-center font-semibold bg-slate-gray rounded-xl">Meet the Animals</h3>
            </a>
            <a href="/jemwildlife2/events" class="transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none ">
                <img src="images/fund.jpg" alt="Picture of an animal" class="rounded-xl" width="500" height="500">
                <br>
                <h3 class="text-2xl font-montserrat mb-5 text-center font-semibold bg-slate-gray rounded-xl">Injured! They need you</h3>
            </a>
            <a href="/jemwildlife2/events" class="transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
                <img src="images/adoption2.jpg" alt="Picture of an animal" class="rounded-xl" width="500" height="400">
                <br>
                <h3 class="text-2xl font-montserrat mb-5 text-center font-semibold bg-slate-gray rounded-xl">Adoption Days</h3>
            </a>
        </div>
    </section>
   
<?php
require('views/partials/footer.php');
?>