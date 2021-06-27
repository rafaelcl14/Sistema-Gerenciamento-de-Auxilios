<?php
    session_start();

    class Session {
        private $idLogin;
        private $usuario;
        private $nomeUsuario;
        private $isFuncionario;

        private static $session;

        public static function existeSession() {
            return isset($_SESSION['session']);
        }

        private function __construct($idLogin, $usuario, $nomeUsuario, $isFuncionario) {
            if(!Session::existeSession()) {
                $this->idLogin = $idLogin;
                $this->usuario = $usuario;
                $this->nomeUsuario = $nomeUsuario;
                $this->isFuncionario = $isFuncionario;
                $_SESSION['session'] = serialize($this);
            } else {
                echo "Sessão já criada!";
            }
        }

        public static function create($idLogin, $usuario, $nomeUsuario, $isFuncionario) {
            new Session($idLogin, $usuario, $nomeUsuario, $isFuncionario);
        }

        public static function destroy() {
            session_destroy();
        }

        private static function getSession(){
            if(!self::$session) {
                self::$session = unserialize($_SESSION['session']);
            }
            return Session::$session;
        }

        public static function getIdLogin() {
            return self::getSession()->idLogin;
        }

        public static function getUsuario() {
            return self::getSession()->usuario;
        }

        public static function getNomeUsuario() {
            return self::getSession()->nomeUsuario;
        }

        public static function isFuncionario() {
            return self::getSession()->isFuncionario;
        }
    }
?>
