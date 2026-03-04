<?php
    class Router {
        public function handleRequest():void
        {
            if(isset($_GET["route"])){
                if($_GET["route"] === "article"){
                    $article = $_GET["id"];
                    $blog = new BlogController();
                    $blog->article($article);
                }
                else{
                    $blog=new BlogController();
                    $blog->notFound();
                }
            }
            else{
                $blog=new BlogController();
                $blog->index();
            }
        }
    }
?>