<?php

include('bootstrap.php');

if (isset($_GET['view'])) {
    $view = strip_tags($_GET['view']);
} else if (!logado()) {
    header("Location: " . URL_SITE . '/login.php');
} else {
    $view = 'home';
}
if (user_permission($view)) {
    switch ($view) {
        case 'home':
            get_view('', 'index');
            break;
        case 'login':
            include(DIR_VIEWS . '/system/login.php');
            break;
        case 'logout':
            include(DIR_VIEWS . '/system/logout.php');
            break;

        //Adicione telas aqui
        
        //Telas coordenador do sistema

        case 'cad-users':
            get_view('cad-users', 'cadastro');
            break;
        case 'save-users':
            get_view('cad-users', 'save-users', 1);
            break;
        case 'listasistema':
            get_view('cad-users', 'listasistema');
            break;

        //Telas medico

        case 'listamedico':
            get_view('medico', 'listamedico');
            break;
        case 'pedido':
            get_view('medico', 'pedido');
            break;

        //Telas triagem

        case 'listatriagem':
            get_view('triagem', 'listatriagem');
            break;
        case 'cadastro':
            get_view('triagem', 'cadastro');
            break;
        case 'agendamento':
            get_view('triagem', 'agendamento');
            break;

         //Telas coordenadora do curso

        case 'listacoordenadoracurso':
            get_view('cod-curso', 'listacurso');
            break;
        case 'cadastrocoordenadoracurso':
            get_view('cod-curso', 'cadastrocurso');
            break;

        //Telas coordenadora do estagio

        case 'listacoordenadora':
            get_view('cod-estagio', 'listacoordenadora');
            break;
        case 'diagnostico':
            get_view('cod-estagio', 'diagnostico');
            break;
        case 'cadastroestagiario':
            get_view('cod-estagio', 'cadastroestagiario');
            break;

        //Telas estagiarios

        case 'listaestagio':
            get_view('estagio', 'listaestagio');
            break;
        case 'mapa':
            get_view('estagio', 'mapa');
            break;

        //Final telas
        default:
            get_error('404');
            break;
    }
} else {
    get_error('404');
}