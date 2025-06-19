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
</head>


<body class="container_about min-vh-100">
    <!-- Vidéo background -->
    <?php include "components/video_background.php"; ?>
    <header></header>


    <!-- navbar -->
    <?php include "components/header.php"; ?>


    <!-- début du main -->
    <main> 
    <!-- section 1 -->
    <?php include "components/section1_about.php"; ?>


        <!-- section 2 -->
    <?php include "components/section2_about.php"; ?>
    </main>
    <!-- fin du main -->

    <footer></footer>

    <!-- SCRIPT POUR BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>

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


    <!-- SCRIPT POUR CARTES -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const flipCards = document.querySelectorAll('.flip-card, .flip-card2');

            flipCards.forEach(card => {
                card.addEventListener('click', (e) => {
                    e.stopPropagation(); // Empêche le clic de se propager au body
                    const inner = card.querySelector('.flip-card-inner, .flip-card2-inner');
                    flipCards.forEach(otherCard => {
                        if (otherCard !== card) {
                            otherCard.querySelector('.flip-card-inner, .flip-card2-inner')?.classList.remove('flipped');
                        }
                    });
                    inner?.classList.toggle('flipped');
                });
            });

            document.body.addEventListener('click', () => {
                flipCards.forEach(card => {
                    card.querySelector('.flip-card-inner, .flip-card2-inner')?.classList.remove('flipped');
                });
            });
        });
    </script>




</body>

</html>