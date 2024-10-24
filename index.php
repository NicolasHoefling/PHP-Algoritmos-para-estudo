<?php

    // teste
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";


    $HT = "";
    $SB = "";
    $TD = "";
    $SL = "";
    if (isset($_POST['PD']) and ($_POST['PD'] <> '')) {


        // horas trabalhadas no mês [APRESENTAR]
        $HT = $_POST["HT"];

        // valor hora trabalhada
        $VH = $_POST["VH"];

        // percentual de desconto
        $PD = $_POST['PD'];

        // salário bruto [APRESENTAR]
        $SB = $HT * $VH;

        // total de desconto [APRESENTAR]
        $TD = $SB * ($PD / 100);

        // salário líquido [APRESENTAR]
        $SL = $SB - $TD;

        // teste
        // echo "<pre>";
        // print_r($SB);
        // echo "</pre>";

        // echo "<pre>";
        // print_r($TD);
        // echo "</pre>";

        // echo "<pre>";
        // print_r($SL);
        // echo "</pre>";
    }
?>

<!doctype html>
<html lang="pt-br">

<head>
    <title>TRABAHLO - HORAS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
</head>

<body class="alert-dark" style="background-image: url(img1.jpg);background-repeat: no-repeat;background-size: cover  ;background-attachment: fixed;">

    <header>
            <nav class="navbar bg-dark navbar-dark border-bottom border-info">
                <div class="p-3 text-white rounded ml-5">
                    <h2>Algoritmo Trabalho</h2>
                </div>
                <button class="navbar-toggler mr-5" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-center " id="collapsibleNavbar">
                <ul class="navbar-nav">
                        <div class=" border-bottom item-center border-info mb-2">  
                            <div class="row">  
                                <li class="nav-item col-3 mb-3">
                                    <button type="button" class="bg-dark btn btn-dark btn-outline-info ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                                        <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z"></path>
                                        <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"></path>
                                        </svg>
                                        <a class="nav-link" href="trabalho.php">Algoritmo Trabalho</a> 
                                    </button>
                                </li>

                                <li class="nav-item col-3 mb-3">
                                    <button type="button" class="bg-dark btn btn-dark btn-outline-info ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
                                        <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"></path>
                                        <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"></path>
                                        </svg>
                                        <a class="nav-link" href="escola.php">Algoritmo Escola</a>
                                    </button>
                                </li>

                                <li class="nav-item col-3 mb-3">
                                    <button type="button" class="bg-dark btn btn-dark btn-outline-info ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sort-numeric-down" viewBox="0 0 16 16">
                                        <path d="M12.438 1.668V7H11.39V2.684h-.051l-1.211.859v-.969l1.262-.906h1.046z"></path>
                                        <path fill-rule="evenodd" d="M11.36 14.098c-1.137 0-1.708-.657-1.762-1.278h1.004c.058.223.343.45.773.45.824 0 1.164-.829 1.133-1.856h-.059c-.148.39-.57.742-1.261.742-.91 0-1.72-.613-1.72-1.758 0-1.148.848-1.835 1.973-1.835 1.09 0 2.063.636 2.063 2.687 0 1.867-.723 2.848-2.145 2.848zm.062-2.735c.504 0 .933-.336.933-.972 0-.633-.398-1.008-.94-1.008-.52 0-.927.375-.927 1 0 .64.418.98.934.98z"></path>
                                        <path d="M4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"></path>
                                        </svg>
                                        <a class="nav-link" href="valores.php">Algoritmo Valores</a>
                                    </button>
                                </li>

                                <li class="nav-item col-3 mb-3">
                                    <button type="button" class="bg-dark btn btn-dark btn-outline-info ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sort-numeric-down" viewBox="0 0 16 16">
                                        <path d="M12.438 1.668V7H11.39V2.684h-.051l-1.211.859v-.969l1.262-.906h1.046z"></path>
                                        <path fill-rule="evenodd" d="M11.36 14.098c-1.137 0-1.708-.657-1.762-1.278h1.004c.058.223.343.45.773.45.824 0 1.164-.829 1.133-1.856h-.059c-.148.39-.57.742-1.261.742-.91 0-1.72-.613-1.72-1.758 0-1.148.848-1.835 1.973-1.835 1.09 0 2.063.636 2.063 2.687 0 1.867-.723 2.848-2.145 2.848zm.062-2.735c.504 0 .933-.336.933-.972 0-.633-.398-1.008-.94-1.008-.52 0-.927.375-.927 1 0 .64.418.98.934.98z"></path>
                                        <path d="M4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"></path>
                                        </svg>
                                        <a class="nav-link" href="sorteio.php">Algoritmo Sorteio</a>
                                    </button>
                                </li>
                            </div>
                        </div>
                            <h5  class="mt-2 mb-2"> ATIVIDADE 01</h5>
                    </ul>
                       
                </div>
            </nav>
    </header>
    <div class="container mt-5 pt-5  ">

        

        

    </div>
</body>

</html>