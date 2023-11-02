
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyList</title>
</head>
<body>
    <table border="">
        <tr>
            <th>SerialNo</th>
            <th>AdmNo</th>
            <th>FullName</th>
            <th>Email</th>
            <th>year</th>
        </tr>
        <tr>
            <td><?php echo $row['SerialNo']; ?> </td>
            <td><?php echo $row['AdmNo']; ?> </td>
            <td><?php echo $row['FullName']; ?> </td>
            <td><?php echo $row ['Email']; ?> </td>
            <td><?php echo $row['year']; ?> </td>
        </tr>
        <tr>
            <td><?php echo $row['SerialNo'];?> </td>
            <td><?php echo $row['AdmNo'];?> </td>
            <td><?php echo $row['FullName'];?> </td>
            <td><?php echo $row['Email'];?> </td>
            <td><?php echo $row['year'];?> </td>
        </tr>
        <tr>
            <td><?php echo $row['SerialNo'];?> </td>
            <td><?php echo $row['AdmNo'];?> </td>
            <td><?php echo $row['FullName'];?> </td>
            <td><?php echo $row['Email'];?> </td>
            <td><?php echo $row['year'];?> </td>
        </tr>
        <tr>
            <td><?php echo $row['SerialNo'];?> </td>
            <td><?php echo $row['AdmNo'];?> </td>
            <td><?php echo $row['FullName'];?> </td>
            <td><?php echo $row['Email'];?> </td>
            <td><?php echo $row['year'];?> </td>
        </tr>

    </table>
    
</body>
</html>


<?php
     $SerialNo=$_POST['SerialNo'];
     $AdmNo=$_POST['AdmNo'];
     $FullName=$_POST['FullName'];
     $Email=$_POST['Email'];
     $year=$_POST['year'];


    

?>