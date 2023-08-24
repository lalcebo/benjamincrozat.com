<?php

namespace App\Models\Presenters;

class CategoryPresenter extends BasePresenter
{
    public function longDescription() : string
    {
        return $this->renderAsMarkdown('long_description', $this->model->long_description);
    }

    public function content() : string
    {
        return $this->renderAsMarkdown('content', $this->model->content);
    }

    public function primaryColor() : string
    {
        return $this->model->primary_color ?? 'black';
    }

    public function secondaryColor() : string
    {
        return $this->model->secondary_color ?? 'white';
    }
}