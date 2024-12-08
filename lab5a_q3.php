<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q3</title>
    <style>
        thead {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        function multiplicate($multiplier) {
            for ($i=1; $i < 13; $i++) { 
                $res[$i] = $i * $multiplier;
            }

            return $res;
        }

        $multiplier = 2;
        $res = multiplicate($multiplier);
    ?>

    <h1>Question 3</h1>

    <table border='1'>
        <thead>
            <tr>
                <td>No</td>
                <td>Multiplier</td>
                <td>Answer</td>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 1; $i < 13; $i++): ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $multiplier = 2 ?></td>
                    <td><?php echo $res[$i] ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</body>
</html>