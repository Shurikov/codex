<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Base_preDispatch
{

    public function action_index()
    {
        $category = $this->request->param('category');
        $pageContent = '';

        switch ($category) {

            case 'articles' :
                $pageContent = self::articles();
                break;
            case 'users'    :
                $pageContent = self::users();
                break;
            default         :
                $pageContent = View::factory("templates/admin/dashboard");
                break;
        }


        $this->title = "Панель администрирования";
        $this->template->content = View::factory("templates/admin/wrapper",
            array("content" => $content));
    }
    
    public function action_edit()
    {
        $article_id = $this->request->param('article_id');

        $article = Model_Article::get($article_id);

        $this->view["article"] = $article;

        // $this->view["editor"] = View::factory('templates/articles/editor', array("storedNodes" => $article->text));
        $content              = View::factory('templates/admin/articles/edit', $this->view);

        $this->template->content = View::factory("templates/admin/wrapper",
            array("active" => "edit", "content" => $content));
    }

    public function articles()
    {

        $articles = Model_Article::getAllArticles(); 

        $this->view["articles"] = $articles;

        $this->view["views"] = Model_Stats::get($articles);

        $this->view["users"] = Model_User::getAllForAdmin();

        return View::factory('templates/admin/articles/list', $this->view);

    }

    public function users()
    {

        $this->view["users"] = Model_User::getAll();

        return View::factory('templates/admin/users/list', $this->view);

    }

}