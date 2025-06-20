<!DOCTYPE html>
<html lang="fr">

<!-- head -->
    <?php include "components/head.php"; ?>


<body class="container_contact min-vh-100">
    <!-- Vidéo background -->
    <?php include "components/video_background.php"; ?>
    <header></header>

        <!-- navbar -->
    <?php include "components/header.php"; ?>

    <!-- Main -->
    <?php include "components/main_contact.php"; ?>

    <!-- footer -->
    <?php include "components/footer_contact.php"; ?>

   
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


<!-- API Captcha -->
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script>
   function onSubmit(token) {
     document.getElementById("formportfolio").submit();
   }
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