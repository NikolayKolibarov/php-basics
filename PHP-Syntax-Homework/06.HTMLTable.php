<?php
$name = "Gosho";
$phone = "0882-321-423";
$age = "24";
$address = "Hadji Dimitar";
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            text-indent: 5px;
            border-collapse: collapse;
        }
        table tr {
            border: 1px solid #000;
        }
        table th, table td {
            width: 105px;
            line-height: 25px;
        }
        table th {
            text-align: left;
            background: #FFA100;
        }
        table td {
            text-align: right;
        }
    </style>
</head>
<body>
<table>
    <tbody>
    <tr>
        <th><strong>Name</strong></th>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <th><strong>Phone number</strong></th>
        <td><?php echo $phone; ?></td>
    </tr>
    <tr>
        <th><strong>Age</strong></th>
        <td><?php echo $age; ?></td>
    </tr>
    <tr>
        <th><strong>Address</strong></th>
        <td><?php echo $address; ?></td>
    </tr>
    </tbody>
</table>
</body>
