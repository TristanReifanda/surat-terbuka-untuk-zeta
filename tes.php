<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .warnakolom {
            background-color: red;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($a = 1; $a <= 12; $a++): ?>
            <tr>
                <?php for($b = 1; $b <= 14; $b++): ?>
                    <?php if($b % 2 == 1): ?> 
                        <td class="warnakolom"><?= "$a,$b"; ?></td>
                    <?php else: ?>
                        <td><?= "$a,$b"; ?></td>
                    <?php endif; ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
