<?php

namespace App\Http\Controllers\Panel;

use App\Models\Plan;
use Illuminate\Http\Request;
use Validator,Storage;

class PlanController extends BaseController
{
    use BasePattern;

    public function __construct()
    {
        $this->title = 'Planlarımız';
        $this->page = 'plan';
        $this->model = new Plan();

        $this->view = (object)array(
            'breadcrumb' => array(
                'Planlarımız' => route('panel.plan_list'),
            ),
        );

        parent::__construct();
    }

    public function save(Request $request, $unique = NULL)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $params = $request->all();

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $icon = md5(rand(1, 999999) . date('ymdhis')) . '.' . strtolower($file->getClientOriginalExtension());

            Storage::disk('public_path')->put("upload/" . "$this->upload/" . $icon, fopen($file, 'r+'));
            $params['icon'] = $icon;
        }
        $planCount = Plan::count();
        if(is_null($unique))
        {
            if ($planCount > 4) {
                return redirect()->back()->withErrors('Plan sayısı 4\'ten fazla olamaz.')->withInput();
            }
        }

        if (is_null($unique))
        {
            $this->model->create($params);
        }
        else
        {
            $this->model->where('unique', $unique)->update($params);
        }

        return redirect()->route('panel.plan_list')->with('success', 'Plan kaydedildi.');
    }
}
