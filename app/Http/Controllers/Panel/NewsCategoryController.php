<?php

namespace App\Http\Controllers\Panel;

use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsCategoryController extends BaseController
{
    use BasePattern;

    public function __construct()
    {
        $this->title = 'Haber Kategorileri';
        $this->page = 'news_category';
        $this->upload = 'news_category';
        $this->model = new NewsCategory();

        $this->view = (object)array(
            'breadcrumb' => array(
                'Haber Kategorileri' => route('panel.news_category_list'),
            ),
        );

        parent::__construct();
    }
}
