<?php
/**
 * Created by PhpStorm.
 * User: oculus
 * Date: 17.07.19
 * Time: 20:34
 */

class ArticleController extends Controller
{

    public function actionIndex()
    {
        $articles = Article::readAllArticles();
        $this->view->render(
            'article/index',
            ['articles' => $articles]
        );
    }

    public function actionArticle($id = 0)
    {
        $article = Article::findOneArticle((int) $id);
        $this->view->render('article/article', ['articles' => $article]);
    }
}