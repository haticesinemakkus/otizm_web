<?php

namespace App\Http\Controllers\Panel;

use App\Models\Demand;

class DemandController extends BaseController
{
    use BasePattern;

    public function __construct()
    {
        $this->title = 'İstek/Öneri';
        $this->page = 'demand';
        $this->model = new Demand();

        $this->view = (object)array(
            'breadcrumb' => array(
                'İstek/Öneri' => route('panel.demand_list'),
            ),
        );

        parent::__construct();
    }
}
