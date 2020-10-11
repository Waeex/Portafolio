<!DOCTYPE html>
<html>+
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>PhpMail envio email</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
</head>
<body class="bg-dark">

    <div>
    
        <a href="../../"  class="btn btn-primary btn-block">Regresar</a>

     </div>


        <?php

        if(isset($_POST['enviar'])){
            $Usuario = $_POST["receptor"]; 
            $headers  = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
            $headers .= "From:  xd <test7u7xddd@gmail.com>\r\n";
            $headers .="Reply-To:test7u7xddd@gmail.com \r\n";
            $subject = "Gracias por tu registro"." :".$Usuario;
            $message = '<html>
            <head>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
            <title>Enviar email</title>
            </head>
            |
            <body>
            <h2>Daremos buen uso de su información bancaria</h2>

            <img src="https://img.chilango.com/2019/05/temporada-4-de-rick-y-morty.jpg"> <br>
            <a href="http://miguelperezramirez.000webhostapp.com"> Rep0i0s </a>
            </body>
            </html>';
            if(mail($_POST['receptor'],$subject,$message,$headers)){
var_dump($_post);

            }else{
                echo "<script>alert('ha ocurrido un error. Intente más tarde');</script>";
            }
        }
        ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 mt-5 bg-light rounded">
                    <h1 class="text-center font-weight-bold text-primary">Formulario</h1>
                    <hr class="bg-light">
                    <h5 class="text-center text-success"></h5>
                    <form method="post" id="form-box" class="p-2">
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email"  name="receptor"  placeholder="alguien@example.com" class="form-control" required>
                        </div>
                        <div class="form-group input-group">    
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="password"  name="password" value="123"  placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="enviar" value="Enviar" id="submit" class="btn btn-primary btn-block" > 
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
    </html>