<?php


/**
 * Inclui uma view
 * Crie os arquivos na pasta view
 * @param string $pasta Pasta onde está a view
 * @param string $arquivo Nome do arquivo view
 * @param int $tipo Tipo da view: '0' = Arquivo com Header e Footer, '1' = Apenas o arquivo
 */
function get_view(string $pasta, string $arquivo, int $tipo = 0)
{
    if ($tipo == 0) {
        if (file_exists(DIR_VIEWS . '/' . $pasta . '/' . $arquivo . '.php')) {
            include(DIR_VIEWS . '/header.php');
            include(DIR_VIEWS . '/' . $pasta . '/' . $arquivo . '.php');
            include(DIR_VIEWS . '/footer.php');
        } else {
            get_error('404');
        }
    } else if ($tipo == 1) {
        if (file_exists(DIR_VIEWS . '/' . $pasta . '/' . $arquivo . '.php')) {
            include(DIR_VIEWS . '/' . $pasta . '/' . $arquivo . '.php');
        }
    }
}

/**
 * Inclui uma tela de erro conforme o numero passado no parametro,
 * Crie as telas de erro na pasta views/error
 * Com o nome error-ERRORAQUI.php
 * @param string $error String com o numero do erro
 */
function get_error(string $error)
{
    include(DIR_VIEWS . '/error/error-' . $error . '.php');
}

/**
 * Retorna se o usuario está logado ou não.
 * @return boolean Retorna true caso o usuario esteja logado, se não retorna false.
 */
function logado()
{
    if (isset($_SESSION["user"])) {
        return true;
    } else {
        return false;
    }
}

/**
 * Retorna o tipo do usuario
 * @return int Retorna o tipo do usuario caso ele esteja logado, se não retorna false
 */
function usertype()
{
    if (logado()) {
        return $_SESSION["user"]->tipo_usuario;
    } else {
        return false;
    }
}

/**
 * Exibe o nome do usuario
 * @return string Retorna o nome do Usuario, se não estiver logado, retorna false
 */
function username()
{
    if (logado()) {
        return $_SESSION["user"]->nome;
    } else {
        return false;
    }
}

/** 
 * Verifica se o usuario tem permissão para acessar a view
 * @param string $view String com a view que o usuario pretende entrar
 * @return boolean Se usuario está permitido retorna 'true' caso contrario retorna false
 */
function user_permission($view)
{
    $user = usertype();

    if ($user == 1) {
        $userviews = [
            'home',
            'login',
            'logout',

            'cad-users',
            'save-users',
            'listasistema'
        ];
    } else if ($user == 2) {
        $userviews = [
            'home',
            'login',
            'logout',

            'listacoordenadoracurso',
            'cadastrocoordenadoracurso'
        ];
    } else if ($user == 3) {
        $userviews = [
            'home',
            'login',
            'logout',

            'listamedico',
            'pedido'
        ];
    } else if ($user == 4) {
        $userviews = [
            'home',
            'login',
            'logout',

            'listacoordenadora',
            'diagnostico',
            'cadastroestagiario'
        ];
    } else if ($user == 5) {
        $userviews = [
            'home',
            'login',
            'logout',

            'listaestagio',
            'mapa'
        ];
    } else if ($user == 6) {
        $userviews = [
            'home',
            'login',
            'logout',

            'listatriagem',
            'cadastro',
            'agendamento'
        ];
    } else {
        $userviews = [
            'login',
            'logout',
        ];
    }

    if (in_array($view, $userviews)) {
        return true;
    } else {
        return false;
    }
}

/**
 * Inclui o menu de acordo com o tipo de usuario
 */
function get_menu()
{
    $usertype = usertype();

    include(DIR_VIEWS . '/menu/menu-' . $usertype . '.php');
}

/**
 * Recebe o nome da view e retorna o local dela
 * 
 * @param string $view Nome da view
 * @return string $link Retorna o URL da view
 */
function localview(string $view)
{
    $link = URL_SITE . '/index.php?view=' . $view;
    return $link;
}

/**
 * Recebe a view e os parametros do erro e retorna o link com todos os parametros passados.
 * 
 * @param string $view Nome da view
 * @param string $type Tipo do erro: 'sucess', 'error', 'warning', 'info' e 'question'.
 * @param string $titulo Titulo do erro
 * @param string $msg Mensagem do erro
 * @return string $link Link com todos os parametros passados no link
 */
function returnMsg(string $view, string $type, string $titulo, string $msg)
{
    $link = URL_SITE . '/index.php?view=' . $view . '&type=' . $type . '&titulo=' . $titulo . '&msg=' . $msg;
    return $link;
}