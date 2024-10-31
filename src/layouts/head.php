<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="src/assets/css/output.css">
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <!--
        <link rel="stylesheet" href="../src/css/base.css">
        -->
    </head>
    <body>
        <nav id="nav-logo" class="z-50 flex absolute top-0 w-full items-center min-h-20">
            <div class="flex mx-auto justify-between w-5/6 lg:w-8/12">
                <!--<img class="h-14 col-span-2" src="./src/assets/img/logo-agro-e-solar-2.png" alt="">-->
                <ul class="justify-between items-center w-full hidden lg:flex">
                    <!--<li><a href="/">Inicio</a></li>-->
                    <li><a class="nav-link" href="#banner">Home</a></li>
                    <li><a class="nav-link" href="#pesquisa">Pesquisa</a></li>
                    <li><a class="nav-link" href="#precos">Faça seu Orçamento</a></li>
                    <li><a class="nav-link" href="#equipe">Equipe</a></li>
                    <li><a class="nav-link" href="#contato">Fale Conosco</a></li>
                </ul>
                <ul class="justify-between items-center w-full flex lg:hidden">
                    <!--<li><a href="/">Inicio</a></li>-->
                    <span onclick="abrirMenuMobile()" id="btn-menu-mobile" class="cursor-pointer flex items-center text-branco h-6">
                        <iconify-icon icon="ion:menu" class="mr-2 text-branco " width="100%"></iconify-icon>
                        Menu
                    </span>
                </ul>
            </div>
        </nav>
        <div id="menu-mobile" class="fixed w-full h-dvh bg-branco z-50 transition-all duration-100" style="transform: translateX(100%);">
            <iconify-icon icon="ri:close-fill" class="text-preto m-4" width="2rem" onclick="fecharMenuMobile()"></iconify-icon>
            <li class="list-none p-4"><a class="" href="#banner" onclick="fecharMenuMobile()">Home</a></li>
            <li class="list-none p-4"><a class="" href="#pesquisa" onclick="fecharMenuMobile()">Pesquisa</a></li>
            <li class="list-none p-4"><a class="" href="#precos" onclick="fecharMenuMobile()">Faça seu Orçamento</a></li>
            <li class="list-none p-4"><a class="" href="#equipe" onclick="fecharMenuMobile()">Equipe</a></li>
            <li class="list-none p-4"><a class="" href="#contato" onclick="fecharMenuMobile()">Fale Conosco</a></li>
        </div>
        <main>
            <a href="/agroesolar/#banner" class="z-50 fixed flex bottom-8 right-8 w-10 aspect-square">
                <iconify-icon icon="lucide:circle-arrow-up" class="text-verde" width="100%"></iconify-icon>
            </a>