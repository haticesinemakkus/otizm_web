<?php

namespace App\Http\Controllers\Panel;

use App\Models\Project;
use App\Models\ProjectCategory;
use View;

class ProjectController extends BaseController
{
    use BasePattern;

    public function __construct()
    {
        $this->title = 'Projelerimiz';
        $this->page = 'project';
        $this->upload = 'project';
        $this->model = new Project();

        $this->view = (object)array(
            'breadcrumb' => array(
                'Projelerimiz' => route('panel.project_list'),
            ),
        );

        View::share('categories', ProjectCategory::all());
        parent::__construct();
    }

    protected function datatableHook($obj)
    {
        return $obj
            ->editColumn('category_id', function ($item) {
                return $item->category->title;
            });
    }

}
