<?php if (isset($_SESSION['usuario_id'])) : ?>
<footer class="bg-primary p-5 text-light">
    <div class="container">
        <small>
            Teste de PHP 7 Orientado a Objetos e MVC. Versão: <?= APP_VERSAO ?>
            <div class="border-top mt-3">
                &COPY; 2023 - <?= date('Y') ?> silvaa.david97@gmail.com
            </div>
        </small>
    </div>
</footer>
<?php else: ?>
<footer class="bg-dark p-5 text-light">
    <div class="container">
        <small>
            Teste de PHP 7 Orientado a Objetos e MVC. Versão: <?= APP_VERSAO ?>
            <div class="border-top mt-3">
                &COPY; 2023 - <?= date('Y') ?> silvaa.david97@gmail.com
            </div>
        </small>
    </div>
</footer>
<?php endif; ?>