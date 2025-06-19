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
    <script src="https://kit.fontawesome.com/975032478f.js" crossorigin="anonymous"></script>
    <!-- LINK POUR BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <!-- SCRIPT JQUERRY POUR AGRANDIR LES IMAGES -->
    <script src="https://code.jquery.com/jquery-latest.js"></script>
</head>


<body class="container_portfolio min-vh-100 ">
    <!-- Vidéo background -->
    <?php include "components/video_background.php"; ?>

    <!-- header -->
<?php include "components/header_portfolio.php"; ?>

        <!-- navbar -->
   <?php include "components/header.php"; ?>


   <!-- début du main -->
    <main>
       
    <!-- section 1  -->
   <?php include "components/section1_portfolio.php"; ?>
    <!-- section 2 -->
   <?php include "components/section2_portfolio.php"; ?>
    <!-- section 3 -->
   <?php include "components/section3_portfolio.php"; ?>

        <div class="grande"></div>

    </main>
    <!-- fin du main -->


    <footer></footer>

    <!-- SCRIPT POUR BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
    <!--  FIN DU SCRIPT POUR BOOTSTRAP -->


    <!-- SCRIPT POUR AGRANDIR LES IMAGES -->
    <script>
        $(function () {

            $(".miniature").click(function () {
                var SourcePetiteImage = $(this).attr('src');
                var SourceGrandeImage = SourcePetiteImage.replace("petites", "grandes");
                $(".grande").html("<img src='" + SourceGrandeImage + "'>");
                $(".grande").fadeIn("slow").css("display", "flex");
            });

            $(".grande").click(function () {
                $(".grande").fadeOut("fast");
            });

        });
    </script>
    <!-- FIN DU SCRIPT POUR AGRANDIR LES IMAGES -->

    <!-- Script pour ouvrir/fermer le menu burger -->
    <script>
        const burgerBtn = document.getElementById('burger-btn');
        const navMenu = document.getElementById('nav-menu');
        const closeBtn = document.getElementById('close-btn');

        burgerBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });

        closeBtn.addEventListener('click', () => {
            navMenu.classList.remove('active');
        });
    </script>


<script>
  // Récupère la partie finale de l'URL (ex: "index.php", "about.php")
  let currentPage = window.location.pathname.split("/").pop();

  // Si aucune page n'est indiquée (ex: "/"), on considère que c'est "index.php"
  if (currentPage === "") {
    currentPage = "index.php";
  }

  // Sélectionne tous les liens de navigation
  const navLinks = document.querySelectorAll("nav a");

  // Compare et ajoute la classe "active" si le lien correspond
  navLinks.forEach(link => {
    if (link.getAttribute("href") === currentPage) {
      link.classList.add("active");
    }
  });
</script>
</body>

</html>