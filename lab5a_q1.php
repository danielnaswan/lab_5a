<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
        $name = 'Muhammad Daniel Bin Naswan';
        $matricNum = 'AI220367';
        $course = 'Software Engineering';
        $yos = '2024';
        $adress = 'secret lol';
    ?>

    <h1>Question 1</h1>

    <table border='1'>
        <tr>
            <td style='font-weight: bold;'>Name</td>
            <td>
                <?php echo $name; ?>
            </td>
        </tr>
        <tr>
            <td style='font-weight: bold;'>Matric number</td>
            <td>
                <?php echo $matricNum; ?>
            </td>
        </tr>
        <tr>
            <td style='font-weight: bold;'>Course</td>
            <td>
                <?php echo $course; ?>
            </td>
        </tr>
        <tr>
            <td style='font-weight: bold;'>Year of study</td>
            <td>
                <?php echo $yos; ?>
            </td>
        </tr>
        <tr>
            <td style='font-weight: bold;'>Adress</td>
            <td>
                <?php echo $adress; ?>
            </td>
        </tr>
    </table>
</body>
</html>