<footer>
    <div class="container-main">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-3">
                <div class="container-logo">
                    <img src="<?php printf('%s/assets/img/logo.png', get_template_directory_uri()); ?>" alt="">
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2">
                <h5 class="title-footer">Menu</h5>
                <ul>
                    <?php foreach (get_pages() as $item): ?>
                        <li>
                            <a href="<?php echo $item->guid ?>"><?php echo $item->post_title ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3">
                <h5 class="title-footer">
                    Local
                </h5>
                <p>Rio de Janeiro, Brazil</p>
                <p>Rua do Passeio, 38 - Office Spaces 1º andar - sala 101</p>
                <p>Centro / RJ, 20021-290</p>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3">
                <h5 class="title-footer">Contact</h5>
                <p>email@rafdesign.com.br</p>
                <p>Tel. +55 21 3216-1030</p>
            </div>
        </div>
    </div>
    <div class="container-main">
        <div class="row">
            <div class="col copyright">
                <p>Copyright ©<?php echo date('Y') ?> - RAFdesign. Todos os Direitos Reservados</p>
            </div>
            <div class="col social-media justify-content-end">
                <a href="https://instagram.com/rafdesign/" target="_blank">
                    <i class="icon-facebook"></i>
                </a>
                <a href="https://www.facebook.com/pages/-RAFdesign-/121837424537886" target="_blank">
                    <i class="icon-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>