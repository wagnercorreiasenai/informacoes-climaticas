<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
        <script src="js/clima.js"></script>

    </head>
    <body>

        <div class="row">

            
            
            <div class="col-md-12">
                
                <div class="alert alert-success" style="margin: 20px;">Alerta!</div>
                            
                <div class="jumbotron">
                    <h1>Tempo para Brusque-SC | <span id="temperatura"></span>  <span class="badge badge-danger">Danger</span></h1>
                    
                    <p>
                        <span id="situacao"></span>
                        <img id="icone" src="img/icones/02d.png"/>
                    </p>
                    
                    <p>
                        Pressão do ar: <span id="pressaoAr">10</span>
                    </p>
                    
                    <p>Umidade: <span id="umidade">80</span>%</p>
                    
                    <h2>Amanhecer: <span id="amanhacer">0</span></h2>
                    <h2>Por do sol <span id="pordosol">0</span></h2>
                    
                </div>

            </div>

        </div>

    </body>
</html>
