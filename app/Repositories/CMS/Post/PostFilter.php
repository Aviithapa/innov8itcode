<?php

namespace App\Repositories\CMS\Post;

use App\Infrastructure\Filters\BaseFilter;

class PostFilter extends BaseFilter
{
    /**
     * Filter is allowed with following parameters.
     *
     * @var array
     */
    protected $filters = ['keyword', 'type', 'status'];


    /**
     * keyword
     *
     * @return void
     */
    public function keyword()
    {
        if ($this->request->has('keyword')) {
            $this->builder->where('title', 'LIKE', '%' . $this->request->get('keyword') . '%');
        }
    }


    public function type()
    {
        if ($this->request->has('type')) {
            $this->builder->where('type', $this->request->get('type'));
        }
    }

    public function status()
    {
        if ($this->request->has('status')) {
            $this->builder->where('status', $this->request->get('status'));
        }
    }
}
