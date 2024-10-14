<?php
require 'func.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id) {
    $user = getDataPerID($id);
    if ($user): ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>User Details</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        </head>
        <body>
        <div class="container mt-4">
            <h2>Benutzerdetails für <?= htmlspecialchars($user['firstname'] . ' ' . $user['lastname']) ?></h2>

            <!-- Filtereingabefeld -->
            <form method="GET" action="detail.php">
                <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
                <input type="text" name="filter" placeholder="Filter nach Name oder E-Mail" class="form-control mb-2">
                <button type="submit" class="btn btn-primary">Filtern</button>
            </form>

            <table class="table">
                <tr>
                    <th>Name</th>
                    <td><?= htmlspecialchars($user['firstname'] . ' ' . $user['lastname']) ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                </tr>
                <tr>
                    <th>Geburtsdatum</th>
                    <td><?= date("d.m.Y", strtotime($user['birthdate'])) ?></td>
                </tr>
            </table>

            <a href="index.php" class="btn btn-secondary">Zurück zur Übersicht</a>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        </body>
        </html>
    <?php
    else:
        echo "Benutzer nicht gefunden.";
    endif;
} else {
    echo "Keine ID angegeben.";
}
?>
