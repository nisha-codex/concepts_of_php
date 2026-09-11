```<!DOCTYPE html>
<html>
<head>
    <title>Table of 5</title>
</head>
<body>

<h2>Multiplication Table of 5</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Number</th>
        <th>Result</th>
    </tr>

    <?php for ($i = 1; $i <= 10; $i++): ?>

        <?php if ($i % 2 == 0): ?>

            <tr>
                <td>5 × <?= $i ?></td>
                <td><?= 5 * $i ?></td>
            </tr>

        <?php endif; ?>

    <?php endfor; ?>

</table>

</body>
</html>```