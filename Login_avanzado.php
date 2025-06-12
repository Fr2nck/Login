<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Avanzado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">           
        <div class="row py-2">
            <div class="col-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-header bg-primary text-black">    
                        Contenedor 01
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>    
            <div class="col-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-header bg-info text-black text-center">    
                        LOGIN DE ACCESO
                    </div>
                    <div class="card-body">
                        <form action="funciones/PHP_login_basico.php" method="POST">
                            <div class="text-center py-2">
                                <label>Usuario: </label>
                                <input type="text" name="user" class="form-control" placeholder="Usuario" required>
                            </div>
                            <div class="text-center py-2">
                                <label>Contraseña: </label>
                                <input type="password" name="pass" class="form-control" placeholder="Contraseña" required>
                            </div>
                            <div class="text-center py-2">
                                <button type="submit" class="btn btn-info">Iniciar Sesion</button>
                            </div>                            
                        </form>
                    </div>
                </div>
            </div>    
            <div class="col-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-header bg-success text-black">    
                        Contenedor 03
                    </div>
                    <div class="card-body">
                    </div>
                </div>                
            </div>
        </div>
    <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></scrip>
</body>
</html>

