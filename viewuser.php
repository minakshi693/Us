<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        h1 {
            font-size: 24px;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding: 10px;
            margin: 10px;


        }

        @media screen and (max-width: 600px) {
            tr {
                display: block;
            }

            td {
                display: block;
                width: 100%;
            }
        }


        table {
            width: 100%;
            margin: 20px;
            border-collapse: collapse;
        }

        button {
            font-size: 14px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-color: #FFD0EC;
            box-sizing: border-box;
            padding: 5px 10px;
            margin: 2px;
            border-radius: 10px;
        }

        button:hover {
            background-color: #7FC7D9;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f8f8f8f8;
        }

        tr:hover {
            background-color: #F5EEE6;
        }

        button {
            box-sizing: border-box;
        }
    </style>

<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Company</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Support</th>
            
        </tr>
        <?php
        include("config.php");
        error_reporting(0);
        $sql ="SELECT * FROM `info`";
        $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['namee']; ?></td>
                <td><?php echo $row['company']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo $row['msg']; ?></td>

               
     <?php
            }
        }
        ?>       
</body>
</html>