<?php 
  $page_title = "Inicio - FrontendStudio";
  include 'includes/header.php'; 
?>

<main class="container my-5">
    <!-- Hero Banner -->
    <div class="p-5 mb-5 bg-white rounded-4 shadow-sm border text-center text-lg-start">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="badge bg-primary-subtle text-primary mb-2 px-3 py-2 rounded-pill">Maquetado Prototipo</span>
                <h1 class="display-5 fw-bold text-dark">Plantilla Base de Prototipado</h1>
                <p class="fs-5 text-muted">
                    Estructura web flexible creada con componentes modulares en PHP, HTML5, CSS3 y Bootstrap 5.
                </p>
                <div class="d-flex gap-2 justify-content-center justify-content-lg-start">
                    <button class="btn btn-primary btn-lg"><i class="bi bi-rocket me-2"></i>Comenzar</button>
                    <button class="btn btn-outline-secondary btn-lg">Saber más</button>
                </div>
            </div>
            <div class="col-lg-4 text-center mt-4 mt-lg-0">
                <i class="bi bi-window-stack text-primary display-1"></i>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>