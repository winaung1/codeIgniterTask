<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
    <a href="/"><button class="bg-gray-600 px-5 py-2 text-white rounded">back</button></a>
    <h1 class="font-bold"><?php echo $heading;?></h1>
    <?php 
         $number = 100;
    
         for ($i = 2; $i <= $number; $i++){
     
             $isPrime = true;
     
             for ($j = 2; $j < ($i/2); $j++){
                 if($i % $j == 0){
                     $isPrime = false;
                 }
             }
            echo $isPrime ? $i." " : "";
         
         
     }
    ?>
    <button class="btn bg-blue-600 text-white px-3 rounded mb-2 py-2">See Code</button>
    <div class="show hidden bg-gray-700 text-white p-5 rounded">
        <pre>$number = 100;
    
        for ($i = 2; $i <= $number; $i++){
    
        $isPrime = true;
    
        for ($j = 2; $j < ($i/2); $j++){
            if($i % $j == 0){
            $isPrime = false;
            }
        }
        echo $isPrime ? $i." " : "";
    
    
        }</pre>
    </div>

 <script>
     let show = document.querySelector('.show');
     let btn= document.querySelector('.btn');
     btn.addEventListener('click', () => {
         show.classList.toggle('hidden');
     })
 </script>
<?= $this->endSection() ?>