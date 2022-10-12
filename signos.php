<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seu Signo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
<nav id="menu-h">
        
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
              <li>
                <a href="https://www.unopar.com.br/">Unopar</a>
            </li>
              <li>
                <a href="https://www.personare.com.br/signos">Saiba mais dos signos</a>
            </li>
            
        </ul>

    </nav>
    <style>
        
        #menu-h ul{

        list-style: none;
        padding: 0;
        background-color: rgb(90, 83, 83);

                }

        #menu-h ul li{

            display: inline;


                    }

        #menu-h ul li a{

            color: #fff;
            padding: 20px;
            display: inline-block;
            text-decoration: none;
            transition: background .4s;
            margin: right;

                        }

        #menu-h ul li a:hover{

            background-color: rgb(34, 9, 172);


                            }
    </style>
</body>

<body class="bg-light">
    <div class="container shadow rounded-3 my-5">
        <div class="row row-cols-1 py-3">
            <div class="col text-center">
                <?php
                $nome = $_POST['nomePess'];
                $data = $_POST['dataNasc'];
                $date = new DateTime($data);
                $dateSig = $date->format('m-d');
                // Transformando arquivo XML em Objeto
                $xml = simplexml_load_file('signos.xml');

                // Exibe as informações do XML
                echo '<h4 class="text-center fw-bold mt-5">' . $xml->titulo . '</h4>';
                echo '<p class="text-center fw-bold"> Horoscopo dia ' . $hoje = date('d/m/Y') . '.</p>';
                echo '<h1 class="fw-bold">' . $nome .' seu signo é ';
                foreach ($xml->signo as $registro) :
                    if ($dateSig >= $registro->data_signo_ini and $dateSig <= $registro->data_signo_fim) {
                        echo $registro->nome_signo . '</h1>';
                        echo '<p class="my-3">' . $registro->horoscopo . '<p>';
                    }
                endforeach;
                ?>
            </div>
            <div class="col">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a class="btn btn-primary" href="./index.php">Voltar</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>