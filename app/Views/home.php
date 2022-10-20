<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

    <div class="text-center bg-blue-400 py-40 rounded">
       <p class="text-white text-2xl font-bold w-[35%] pb-5 mx-auto"> Welcome to my simple task for Vanderhall using CodeIgniter</p>
       <a href="/Home/prime"><button class="bg-red-400 hover:bg-red-600 text-white px-3 py-2 rounded">Prime Number</button></a>
       <a href="/MyQuery"><button class="bg-yellow-400 hover:bg-yellow-600 text-white px-3 py-2 rounded">Users data</button></a>
    </div>
<?= $this->endSection() ?>
