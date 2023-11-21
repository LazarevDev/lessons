<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid #ddd;
            color: #333;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Цвет</th>
            <th>Значение</th>
        </tr>
        <?php
        $intensities = array('00', '33', '66', '99', 'CC', 'FF');
        foreach ($intensities as $red) {
            foreach ($intensities as $green) {
                foreach ($intensities as $blue) {
                    $color = '#'.$red.$green.$blue;
                    echo '<tr>';
                        echo '<td style="background-color: '.$color .'"></td>';
                        echo '<td>'.$color.'</td>';
                    echo '</tr>';
                }
            }
        }
        ?>
    </table>
</body>
</html>