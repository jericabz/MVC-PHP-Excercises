    <?php require base_path('views/partials/head.php')?>
    <?php require base_path('views/partials/nav.php')?>
    <?php require base_path('views/partials/banner.php')?>

    
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <p class="mb-6 text-blue-500 hover:underline">
                <a href="/notes">go back...</a>
            </p>
            <p><?=htmlspecialchars($note['body'])?></p>
            <a class="text-sm leading-6 text-gray-500 border border-current px-3 px-2 rounded"href="/note/edit?id=<?=$note['id']?>">Edit</a>
            
        </div>
        
    </main>
    <?php require base_path('views/partials/footer.php')?>