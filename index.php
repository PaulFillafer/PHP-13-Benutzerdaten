<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data Filter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2>Benutzerdaten anzeigen</h2>
    <div class="row">
        <div class="col-md-6">
            <input type="text" id="searchInput" placeholder="Name oder Email eingeben" class="form-control">
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary">Suchen</button>
        </div>
        <div class="col-md-2">
            <button class="btn btn-secondary" onclick="leeren()">Leeren</button>
        </div>
    </div>
    <div id="error-message" style="color: red;"></div>
    <table id="userDataTable" class="table table-striped mt-4">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Geburtsdatum</th>
        </tr>
        <?php
        require 'func.php';
        $dataextract=getAllData();
        for($i = 0; $i < count($dataextract); $i++){
            $tutti=$dataextract[$i];
            echo '<tr>'.'<td>'.$tutti['firstname'].'</td>'.'<td>'.$tutti['lastname'].'</td>'.'<td>'.$tutti['birthdate'].'</td>'.'</tr>';
        }



        ?>
        </thead>
        <tbody id="tableBody">
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<?php
    require 'userdata.php';
    require 'func.php';
    getAllData();




?>
</body>
</html>