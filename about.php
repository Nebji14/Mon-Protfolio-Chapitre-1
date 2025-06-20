<!DOCTYPE html>
<html lang="fr">

<!-- head -->
    <?php include "components/head.php"; ?>


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