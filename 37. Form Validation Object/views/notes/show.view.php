    <?php require base_path('views/partials/head.php')?>
    <?php require base_path('views/partials/nav.php')?>
    <?php require base_path('views/partials/banner.php')?>

    
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <p class="mb-6 text-blue-500 hover:underline">
                <a href="/notes">go back...</a>
            </p>
            <p><?=htmlspecialchars($note['body'])?></p>
            <footer class="mt-6 inline-flex">
                <a href="/note/edit?id=<?=$note['id']?>" class=" text-blue-500 hover:underline"><button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Edit</button></a>
                 <form method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?=$note['id']?>">
                <button type="submit" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 ">Delete</button>
            </form>
            </footer>
            
        </div>
        
    </main>
    <?php require base_path('views/partials/footer.php')?>

    