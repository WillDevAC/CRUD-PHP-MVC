<?php

    class LoginController
    {
        public function index()
        {
            $loader = new \Twig\Loader\FilesystemLoader('app/views');
            $twig = new \Twig\Environment($loader, [
                'cache' => '/path/to/compilation_cache',
            ]);
            $template = $twig->load('login.html');
            return $template->render();
        }
    }
?>