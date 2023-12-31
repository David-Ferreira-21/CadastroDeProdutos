<?php if (isset($_SESSION['usuario_id'])) : ?>
<header class="bg-primary">
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-dark">
            <a class="navbar-brand" href="<?= URL ?>">David</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL ?>" data-tooltip="tooltip" title="Página Inicial">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL ?>/produtos/index" data-tooltip="tooltip" title="Sobre nós">Página de Produtos</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                    <p>Olá, <?= $_SESSION['usuario_nome'] ?>, Seja bem vindo(a)!</p> 
                    <a class="btn btn-sm btn-danger" href="<?= URL ?>/usuarios/sair" data-tooltip="tooltip" title="Sair do Sistema">Sair</a>
                    </span>
            </div>
        </nav>
    </div>
</header>
<?php else: ?>
<header class="bg-dark">
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-dark">
            <a class="navbar-brand" href="<?= URL ?>">David</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL ?>" data-tooltip="tooltip" title="Página Inicial">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL ?>/paginas/sobre" data-tooltip="tooltip" title="Sobre nós">Sobre Nós</a>
                        </li>
                    </ul>

                    <span class="navbar-text">
                        <a class="btn btn-info" href="<?= URL ?>/usuarios/cadastrar" data-tooltip="tooltip" title="Não tem uma conta? Cadastre-se">Cadastre-se</a>
                        <a class="btn btn-info" href="<?= URL ?>/usuarios/login" data-tooltip="tooltip" title="Tem uma conta? Faça login">Entrar</a>
                    </span>
            </div>
        </nav>
    </div>
</header>
<?php endif; ?>