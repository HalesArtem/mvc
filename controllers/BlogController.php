<?php
/**
 * Created by PhpStorm.
 * User: oculus
 * Date: 17.07.19
 * Time: 20:34
 */

class BlogController extends Controller
{

    public function actionIndex()
    {
        $posts = Post::readAllPosts();
        $this->view->render(
            'blog/index',
            ['posts' => $posts]
        );
    }

    public function actionPost($id = 0)
    {
        $post = Post::findOnePost((int) $id);
        $this->view->render('blog/post', ['post' => $post]);
    }
}