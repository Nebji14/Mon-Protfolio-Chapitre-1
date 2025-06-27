<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | DAVID Benjamin</title>
    <meta name="description" content="Portfolio | DAVID Benjamin">
    <meta name="author" content="DAVID Benjamin">
    <meta name="robots" content="">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/png" href="media/logo2_small.png">
    <!-- Ce script pour lié à la page fontawesome pour voir les logos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome-animation@1.1.1/css/font-awesome-animation.min.css">
    <!-- LINK POUR BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>



<body class="gradient-background">
   

    <header></header>


    <!-- main -->
    <?php include "components/main_welcome.php"; ?>
    

    <footer></footer>

    <!-- SCRIPT POUR BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>


        <script>
        // création de la fonction
        function animation(){
          
            // timer 1000ms avant apparition
            setTimeout(function(){
                document.getElementById("block_ben").style.marginTop = "0";
            }, 1000);


            setTimeout(function(){
                document.getElementById("title").style.display = "none";
                document.getElementById("subtitle").classList.add("text-focus-in");
                document.getElementById("subtitle").innerHTML = "N'hésitez pas à me recontacter";
            }, 3000);


            setTimeout(function(){
                document.getElementById("subtitle").innerHTML = "<i class='fa-regular fa-face-smile-wink fa-bounce fa-4x' style='color:rgb(255, 255, 255);'></i>";
            }, 6000);


            setTimeout(function(){
                document.getElementById("block_ben").style.marginTop = "-200vh"
            }, 9500);


            setTimeout(function(){
                document.getElementById("subtitle").innerHTML = "<i class='fa-solid fa-spinner fa-spin-pulse' style='color:rgb(255, 255, 255);'></i>";
                document.getElementById("block_ben").style.marginTop = "0";
            }, 10000);

            setTimeout(function(){
                window.location.href = "index.php"
            }, 11500);



            /* pour lancer en boucle à la place de windows etc.

            animation();*/



               }

              animation(); 

    </script>
    
</body>

</html>