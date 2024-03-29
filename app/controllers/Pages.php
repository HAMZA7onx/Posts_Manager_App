<?php
class Pages extends Controller {
    public $categoryModel;
    public function __construct() {
        $this->categoryModel = $this->model('Category');
    }

    public function index() {
        if(isLoggedIn()) {
            redirect('posts/index');
        }

        $data = [
            'title' => 'Share Posts', 
            'description' => 'Simple social network built on the TraversyMVC PHP framework'
        ];

        $this->view('pages/index', $data);
    }

    public function about() {
        $data = [
            'title' => 'Welcome about', 
            'description' => 'App to share Posts with other users'
        ];
        $this->view('pages/about', $data);
    }

    public function categories() {
        $categories = $this->categoryModel->get_categories_with_posts_nmb();
        $data = [
            'categories' => $categories
        ];
        $this->view('pages/categories', $data);
    }

}
?>
