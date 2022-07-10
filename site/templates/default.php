<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPT starterkit</title>
    <?= css('dist/index.css') ?>
</head>

<body class="bg-zinc-900">
    <main class="flex flex-col items-center justify-center w-full h-screen font-black">
        <h1 class="flex flex-col items-center gap-4 text-orange-300 uppercase md:text-7xl">
            <?= $page->title() ?>
            <span class="text-base font-normal"><?= $page->subtitle() ?> </span>
        </h1>

        <p class="mt-8 text-base font-normal text-teal-100">Thank you for downloading KPT,
            hope it will be useful to you.</p>
            
    </main>

    <script type="module" src="<?= url('dist/main.js') ?>"></script>
</body>

</html>