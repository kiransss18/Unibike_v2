<?php

namespace App\Controllers;

use App\Models\FeedbacksModel;

class Feedback extends BaseController
{

    public function index()
    {
        $data['title'] = "List Feedback";
        $data['activeMenu'] = "List Feedback";

        $feedback = new FeedbacksModel();
        $data['feedbacks'] = $feedback->findAll();

        echo view("layout/header", $data);
        echo view("layout/sidebar", $data);
        echo view('user/feedback');
        echo view("layout/footer");

    }
}