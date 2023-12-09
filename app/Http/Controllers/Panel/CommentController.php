<?php

namespace App\Http\Controllers\Panel;

use App\Models\Comment;

class CommentController extends BaseController
{
    public function __construct()
    {
        $this->title = 'Yorumlar';
        $this->page = 'comment';
        $this->upload = 'comment';
        $this->model = new Comment();

        $this->view = (object)array(
            'breadcrumb' => array(
                'Yorumlar' => route('panel.comment_list'),
            ),
        );

        parent::__construct();
    }
}
