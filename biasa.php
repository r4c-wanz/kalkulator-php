<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Biasa | Jago Ngoding</title>
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
    <style>
        .text-limit {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }
    </style>
</head>
<body class="font-roboto">
    <div class="w-screen h-screen grid place-content-center">
        <div class="bg-white shadow rounded-lg p-5">
            <h1 class="text-2xl font-bold">Kalkulator Biasa</h1>
            <form class="mt-4">
                <div class="flex gap-1">
                    <input type="number" name="a" placeholder="Bilangan a" value="<?php echo @$_GET['a'] ?>" required class=" w-full border rounded p-1">

                    <select name="operator" class=" w-full border rounded py-1">
                        <option <?php echo !@$_GET['operator'] ? 'selected' : '' ?> disabled>Pilih Operator</option>
                        <option <?php echo @$_GET['operator'] === '+' ? 'selected' : '' ?> value="+">+</option>
                        <option <?php echo @$_GET['operator'] === '-' ? 'selected' : '' ?> value="-">-</option>
                        <option <?php echo @$_GET['operator'] === '*' ? 'selected' : '' ?> value="*">*</option>
                        <option <?php echo @$_GET['operator'] === '/' ? 'selected' : '' ?> value="/">/</option>
                    </select>

                    <input type="number" name="b" placeholder="Bilangan b" value="<?php echo @$_GET['b'] ?>" required class=" w-full border rounded p-1">
                </div>

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
                $a = (double) @$_GET['a'];
                $b = (double) @$_GET['b'];
                $operator = @$_GET['operator'];

                switch ($operator) {
                    case '+':
                        $hasil = $a + $b;
                        break;
                    case '-':
                        $hasil = $a - $b;
                        break;
                    case '*':
                        $hasil = $a * $b;
                        break;
                    case '/':
                        $hasil = $a / $b;
                        break;
                }
            ?>
                <div class="mt-4">
                    Hasil: <strong><?php echo $hasil ?></strong>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>