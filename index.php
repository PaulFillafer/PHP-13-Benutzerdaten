<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data Filter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        /* Add custom styles here, e.g., for alternating row colors */
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        table tr:nth-child(odd) {
            background-color: #ffffff;
        }
    </style>
</head>
<body>
<div class="container mt-4">
    <h2>Benutzerdaten anzeigen</h2>
    <div class="row">
        <div class="col-md-6">
            <input type="text" id="searchInput" placeholder="Name oder Email eingeben" class="form-control">
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary" onclick="datenFiltern()">Suchen</button>
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
        </thead>
        <tbody id="tableBody">
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<?php
    require userdata.php;

?>
</body>
</html>