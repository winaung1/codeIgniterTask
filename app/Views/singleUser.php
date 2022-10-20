<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

    <div class="overflow-x-auto relative">
    <h1 class="bg-blue-500 text-white p-2 rounded">User</h1>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Id
                </th>
                <th scope="col" class="py-3 px-6">
                    First Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Last Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Email
                </th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $js_encode = json_encode($user); 
            $js_decode = json_decode($js_encode, true);
            foreach($js_decode as $data){
                $id = ($data['id']);
                $first_name = ($data['first_name']);
                $last_name = ($data['last_name']);
                $email = ($data['email']);
            }

        ?> 

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   <?= $id ?>
                </th>
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              
                   <?= $first_name ?>
                </th>
                <td class="py-4 px-6">
                  
                <?= $last_name ?>
                </td>
                <td class="py-4 px-6">
                <?= $email ?>     
                 
                </td>
            </tr>
        </tbody>
    </table>
</div>
<a href="/MyQuery"><button class="bg-blue-500 px-4 py-2 text-white rounded">Back</button></a>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
<?= $this->endSection() ?>