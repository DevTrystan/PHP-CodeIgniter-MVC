<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <script src="tablesorter.js"></script>
    <link rel="stylesheet" href="style.css">
    <script>
        $(document).ready(function() {
            $("#myTable").tablesorter();
        });
    </script>
    <style>
   
    </style>
    <title>Sort table</title>
</head>

<body>
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h1>Sort table</h1>
                <p style="font-style: italic;">J'aime JavaScript et le code PHP</p>
                <hr>
                <table class="Table" id="myTable">
                    <thead class="thead-inverse">
                        <tr>
                            <th><button>#</button></th>
                            <th><button>Articles</button></th>
                            <th><button> Libellé</button></th>
                            <th><button> Prix</button></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><img src="greenTshirt.png" alt="photo"></td>
                            <td>Vert</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><img src="blue.png" alt="photo"></td>
                            <td>Bleu</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td><img src="pantalon.png" alt="photo"></td>
                            <td>Marine</td>
                            <td>25</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>