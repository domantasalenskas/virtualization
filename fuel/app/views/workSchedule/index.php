
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Dirba dienomis</th>
        <th>Darbo pradzia</th>
        <th>Darbo pabaiga</th>
    </tr>
    <?php foreach($schedule as $doctor) : ?>
    <tr>
        <td>
            <?php echo $doctor -> fname;?>
        </td>
        <td>
            <?php echo $doctor -> lname;?>
        </td>
        <td>
            <?php echo $doctor -> workDays;?>
        </td>
        <td>
            <?php echo $doctor -> timeStart;?>
        </td>
        <td>
            <?php echo $doctor -> timeEnd;?>
        </td>
    </tr>
    <?php endforeach;?>
</table>

</body>
</html>
