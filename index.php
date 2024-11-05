<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <!-- Bootstrap -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Datatables -->
<link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js" rel="stylesheet">
</head>
<body>
    <header>
        <h1 class="text-center p-3"></h1>
        <?php include "includes/navbar.php" ?>
        <!-- navbar -->
        <!-- ./navbar -->
</header>
    <div class="container mt-3">
        <?php include "content.php" ?>
    </div>
    <script src="assets/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/Tabeljawa.js"></script>
    <script>
    new DataTable('#example');
    </script>
    <Script>
    $(document).ready(function() {
        $('#lck').DataTable({
            paging: true,
            info: true,
            lengthMenu: [5, 10, 15]
        });
    });
    </Script>
</body>
</html>