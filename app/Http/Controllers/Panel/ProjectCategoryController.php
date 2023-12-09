<?php

namespace App\Http\Controllers\Panel;

use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectCategoryController extends BaseController
{
    use BasePattern;

    public function __construct()
    {
        $this->title = 'Proje Kategorileri';
        $this->page = 'project_category';
        $this->model = new ProjectCategory();

        $this->view = (object)array(
            'breadcrumb' => array(
                'Proje Kategorileri' => route('panel.project_category_list'),
            ),
        );

        parent::__construct();
    }
}
