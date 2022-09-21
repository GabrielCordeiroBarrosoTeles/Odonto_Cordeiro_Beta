<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/footer.css"/>
        <link rel="stylesheet" href="css/icons.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"><!--CSS do Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"><!--Importante, faz os icons aparecerem no footrer-->
        <style>
            ::-webkit-scrollbar{
                width: 10px;
            }::-webkit-scrollbar-track{
                background: #FFFF;
                border-radius: 30px;
            }::-webkit-scrollbar-thumb{
                background: #000000;
                border-radius: 30px;
            }
        </style>
    </head>
    <body>
        <!--Navbar-->
        <span id="home"></span>
            <?php include "includes/navbar.php";?>    
        <!--Termino do Navbar-->
        <br>
        <br>
        <!--Carosel-->
        <?php include "includes/carousel.php";?>  
        <!--Termino do Carosel-->
        <br>
        <br>
        <br>
        <!--Cards-->
        <h1 id="nossos_profissionais" style="text-align: center;">Nossos Profissionais:</h1>
        <?php include "includes/cards.php";?>     
        <!--Termino Cards-->
        <br>
        <br>
        <!--Card agendamento-->
        <span id="agendamento"></span>
        <?php include "includes/cardagendamento.php";?>     
        <!--Termino Card agendamento-->
        <br>
        <!--Accordion-->
        <?php include "includes/accordion.php";?>    
        <!--Termino do Accordion-->
        <br>
        <br>
         <br>
        <!--Footer-->
        <span id="contatos"></span>
        <?php include "includes/footer.php";?>  
        <!--Termino do Footer-->
        
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
  </html>
