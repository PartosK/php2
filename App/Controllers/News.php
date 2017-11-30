<?php
namespace App\Controllers;

use App\Controller;

class News
extends Controller
{

    public function actionOneNews()
    {
        if (isset($_GET['id'])) {

            $Article = \App\Models\Article::findById($_GET['id']);

            if (false !== $Article) {
            $id = $_GET['id'];
            $this->view->data = $Article;
            $this->view->display(__DIR__ . '/../../App/Templates/article.php');
            }
            else{
                throw  new \App\E404('Нет такой статьи');
            }
        }
        else{
            throw  new \App\E404('Страница не найдена');
        }
    }

    public function actionAllNews()
    {

        $this->view->data = \App\Models\Article::findAll();
        $this->view->display(__DIR__ . '/../../App/Templates/allArticles.php');

    }
}