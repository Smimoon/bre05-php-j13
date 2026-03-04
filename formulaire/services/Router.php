<?php
    class Router{
        public function handleRequest():void
        {
            if(isset($_GET["route"])){
                $ctrl = new AuthController();
                $ctrl-> notFound();
            }
            else{
                $ctrl = new AuthController();
                $ctrl-> login();
            }
        }
    }
?>