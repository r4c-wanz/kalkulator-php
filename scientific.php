<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Scientific Sederhana | Jago Ngoding</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        roboto: ['Roboto', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="font-roboto">
    <div class="w-screen h-screen grid place-content-center">
        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.292755 5.29403C-0.0977178 5.6845 -0.0977178 6.31863 0.292755 6.7091L5.2908 11.7071C5.68127 12.0976 6.3154 12.0976 6.70587 11.7071C7.09635 11.3167 7.09635 10.6825 6.70587 10.2921L3.41029 6.99961L12.994 6.99961C13.547 6.99961 13.9937 6.55291 13.9937 6C13.9937 5.44709 13.547 5.00039 12.994 5.00039L3.41341 5.00039L6.70275 1.70793C7.09322 1.31746 7.09322 0.683327 6.70275 0.292855C6.31228 -0.0976174 5.67815 -0.0976174 5.28768 0.292855L0.28963 5.2909L0.292755 5.29403Z" fill="white"/>
        </svg>
        <div class="bg-white shadow rounded-lg p-5">
            <h1 class="text-2xl font-bold">Kalkulator Scientific Sederhana</h1>
            <form class="mt-4">
                <input type="text" name="ekspresi" placeholder="Ekspresi aritmatika" value="<?php echo @$_GET['ekspresi'] ?>" class="w-full border rounded p-1">

                <div class="mt-4 flex justify-between">
                    <div class="flex gap-1">
                        <button type="button" onclick="location.href = '?'" class="bg-red-600 hover:bg-red-700 rounded px-3 py-1 text-sm text-white font-bold">Clear</button>
                        <button type="submit" class="bg-green-600 hover:bg-green-700 rounded px-3 py-1 text-sm text-white font-bold">Hitung</button>
                    </div>
                    <button type="button" onclick="location.href = 'index.html'" class="bg-neutral-600 hover:bg-neutral-700 rounded px-3 py-1 text-sm text-white font-bold">Back</button>
                </div>
            </form>
            <?php
            if ($_GET):
                $ekspresi = @$_GET['ekspresi'];
                $hasil = eval("return {$ekspresi};"); ?>
                <div class="mt-4">
                    Hasil <strong><?php echo $hasil ?></strong>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>