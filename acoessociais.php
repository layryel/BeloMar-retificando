<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="CSS/acoessociais.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Ações Sociais</title>
</head>

<body>

    <!-- Navbar da página: -->
    <?php include("navbar.php"); ?>

    <br>

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h3 class="ong">ONGS associadas</h3>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="ongass">
                    Nessa página, temos cards que falam sobre as ONGs que ajudamos. Com sua compra, além de garantir sua 
                    belíssima flor, você também contribui para um mundo melhor e maus limpo. Cada uma dessas ONGs foram 
                    escolhidas a dedo para que estivesses condizentes com nossos ideais e pensamentos, saiba um pouco mais 
                    sobre cada uma!
                </p>
                <br>
            </div>
        </div>
        

        <div class="row">
            <div class="col">
                <div class="card">
                    <img src="img/img_AcoesSociais/ong1.jfif" class="card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">SOS Amazonia</h5>
                        <a id="ongbtn" href="https://sosamazonia.org.br/" class="btn btn-primary">+</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/img_AcoesSociais/ong2.jfif" class="card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Desengarrafando mentes</h5>
                        <a id="ongbtn" href="https://desengarrafandomentes.wordpress.com" class="btn btn-primary">+</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/img_AcoesSociais/ong3.jfif" class="card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ibirapuera conservação</h5>
                        <a id="ongbtn" href="https://www.atados.com.br/ong/ibiraconservacao" class="btn btn-primary">+</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <hr>

    <!-- Footer da página: -->
    <?php include("footer.php"); ?>

</body>

</html>