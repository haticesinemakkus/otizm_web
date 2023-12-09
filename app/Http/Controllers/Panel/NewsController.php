<?php

namespace App\Http\Controllers\Panel;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsController extends BaseController
{
   use BasePattern;

    public function __construct()
    {
        $this->title = 'Haberler';
        $this->page = 'news';
        $this->upload = 'news';
        $this->model = new News();

        $this->view = (object)array(
            'breadcrumb' => array(
                'Haberler' => route('panel.news_list'),
            ),
        );

        view()->share('categories',NewsCategory::orderBy('name','asc')->get());
        parent::__construct();
    }

    protected function datatableHook($obj)
    {
        return $obj
            ->editColumn('category_id', function ($item) {
                return $item->category->name;
            });
    }
}
