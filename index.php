<?php
include "data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2:400,500,600,700,800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/bd3a10f7d4.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="styles.css" type="text/css">

    <title>Covid-19 Tracker</title>


</head>

<body>
    <div class="container-fluid bg-light p-5 text-center my-3">
        <h1>Covid-19 Tracker</h1>
        <h5 class="text-muted">An opensource project to keep track of all the COVID-19 cases around the nation</h5>
    </div>

    <div class="container my-5">
        <div class="row text-center">
            <div class="col-sm-6 col-lg-3 text-danger">
                <h5>Confirmed</h5>
                <?php echo $data['data']['summary']['total']; ?>
            </div>
            <div class="col-sm-6 col-lg-3 text-primary">
                <h5>Active</h5>
                <?php echo (($data['data']['summary']['total']) - ($data['data']['summary']['discharged']) - ($data['data']['summary']['deaths'])); ?>
            </div>

            <div class="col-sm-6 col-lg-3 text-success">
                <h5>Recovered</h5>
                <?php echo $data['data']['summary']['discharged']; ?>

            </div>
            <div class="col-sm-6 col-lg-3 text-secondary">
                <h5>Deceased</h5>
                <?php echo $data['data']['summary']['deaths']; ?>

            </div>
        </div>
    </div>

    <div class="container bg-light p-3 my-3 text-center">
        <div>
            <h5 class="text-info" id="quote">"We'll definitely win this together"</h5>
        </div>

    </div>


    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark bg-secondary">
                    <tr>
                        <th scope="col">States</th>
                        <th scope="col">Confirmed-Indian</th>
                        <th scope="col">Recovered</th>
                        <th scope="col">Deceased</th>
                        <th scope="col">Confirmed-Foreign</th>
                        <th scope="col">Total-Confirmed</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data['data']['regional'] as $state) {
                    ?>
                        <tr>
                            <th>
                                <?php
                                echo $state['loc']
                                ?>
                            </th>
                            <td>
                                <?php
                                echo $state['confirmedCasesIndian']
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $state['discharged']
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $state['deaths']
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $state['confirmedCasesForeign']
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $state['totalConfirmed']
                                ?>
                            </td>
                        </tr>



                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">Copyright &copy; 2020, <a href="https://github.com/vsasvipul0605">Vipul Sinha</a></span>
        </div>
    </footer>
    <script>
        function getNewQuote() {
            var xHttp = new XMLHttpRequest();
            xHttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById("quote").innerHTML = this.responseText;
                }
            };
            xHttp.open("GET", "get-quote.php", true);
            xHttp.send();
        }

        setInterval(getNewQuote, 3000); // Refresh on every 3 seconds
    </script>

</body>

</html>
