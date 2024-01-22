<?php include "views/partials/head.php"; ?>
<body>
    <?php include "views/partials/header.html"; ?>
    <main>
        <section class="hero">
           <div class="hero_content">               
                <div class="hero_text">
                    <h1>Af pictures</h1>
                    <h2>Distribuidora audiovisual</h2>
                    <a href="catalogo.php"class="button hero_button">Ver catálogo</a>
                </div>
           </div>          
        </section>
        <section class="home_catalogue">
            <div class="home_catalogue_wraper">
                <article>
                    <a class="home_article" href="">
                        <img class="home_img" src="./images/cartel_mientras_cupido_no_esta.jpg" alt="cartel de Mientras Cupido no está">
                        <h3 class="home_h3 title">Mientras Cupido no está</h3>
                    </a>
                </article>
                <article>
                    <a class="home_article" href="canta_y_no_llores.php">
                        <img class="home_img" src="./images/cartel_canta_y_no_llores.jpg" alt="cartel de canta y no llores">
                        <h3 class="home_h3 title">Canta y no llores</h3>
                    </a>
                </article>
                <article>
                    <a class="home_article" href="">
                        <img class="home_img" src="./images/foto_v_de_victor.jpg" alt="fotograma de la película v de Víctor">
                        <h3 class="home_h3 title">V de Víctor</h3>
                    </a>
                </article>
            </div>
            <a class="button home_button" href="catalogo.php">Ver catálogo</a>
        </section>
    </main>
    <?php include "views/partials/footer.html"; ?> 
    <script src="./js/header_menu.js"></script>   
</body>
</html>