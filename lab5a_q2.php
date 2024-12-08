<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q2</title>
    <style>
        thead {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php 
        $students = [
            [
                'name' => 'Alice',
                'program' => 'BIP',
                'age' => 21
            ],
            [
                'name' => 'Bob',
                'program' => 'BIS',
                'age' => 20
            ],
            [
                'name' => 'Raju',
                'program' => 'BIT',
                'age' => 22
            ]
        ]
    ?>

    <h1>Question 2</h1>

    <table border='1'>
        <thead>
            <tr>
                <td>Name</td>
                <td>Programme</td>
                <td>Age</td>
            </tr>
        </thead>
        <?php foreach($students as $student): ?>
            <tbody>
                <tr>
                    <td><?php echo $student['name']; ?></td>
                    <td><?php echo $student['program']; ?></td>
                    <td><?php echo $student['age']; ?></td>
                </tr>
        </tbody>
        <?php endforeach; ?>
    </table>
</body>
</html>