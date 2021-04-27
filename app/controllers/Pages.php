<?php


class Pages extends Controller
{

    /**
     * Pages constructor.
     */
    public function __construct()
    {
        $this->pagesModel = $this->model('Page');
    }

    public function index(){
        $data = array(
            'title' => 'Welcome to Pages',
        'content' => 'Pages index view is loaded by MVC'
    );
        $this->view('pages/index', $data);
    }
    public function about(){
        $usersCount = $this->pagesModel->usersCount();
        echo 'Users in db - '.$usersCount.'<br>';
        // echo 'about method is loaded<br>';
        $data = array('content' => 'Pages about view is loaded by MVC');
        $this->view('pages/about', $data);
    }
}