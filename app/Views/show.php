<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

    <div class="overflow-x-auto relative">
    <h1 class="bg-blue-500 text-white p-2 rounded">Users</h1>
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
                <th scope="col" class="py-3 px-6">
                    Link
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $key => $user): ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo $user->id ?>
                </th>
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo $user->first_name ?>
                </th>
                <td class="py-4 px-6">
                    <?php echo $user->last_name ?>
                </td>
                <td class="py-4 px-6">
                    <?php echo $user->email ?>
                </td>
                <td class="py-4 px-6">
                    <a href='/MyQuery/singleUser/<?= $user->id?>'><button class="border-[1px] border-blue-500 hover:bg-blue-500 hover:text-white px-2 rounded">View</button></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<a href="/"><button class="bg-blue-500 px-4 py-2 text-white rounded">Back</button></a>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
<?= $this->endSection() ?>