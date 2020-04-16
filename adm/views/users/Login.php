<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Administrativa - Login</title>
    <link rel="shortcut icon" href="assets/img/Logo.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="../?c=s&a=h" class="navbar-brand">AM</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="../?c=s&a=h">Home</a></li>
                <li><a href="../?c=s&a=s">Sobre</a></li>
                <li><a href="../?c=s&a=c">Contatos</a></li>
                <li><a href="../?c=c&a=lc">Lista</a></li>
            </ul>
        </div>
    </nav>
    <header>
        <img id="logo" src="assets/img/Logo.png">
        <h1 id="tit">Airiane Melo</h1>
    </header>

    <section>
        <div class="container-fluid" style="vertical-align:center">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 p-5">
                    <h1>Login no Sistema</h1>
                    <form action="?c=u&a=vl" method=POST name="formulario" id="formulario">
                        <div class="form-group">
                            <label>Login</label>
                            <input type="text" class="form-control" name="login" placeholder="Digite o usuário">
                        </div>
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" class="form-control" name="pass" placeholder="Digite sua senha">
                        </div>
                        <input class="btn btn-primary" type="submit" name="Enviar" value="Fazer Login">
                    </form>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>