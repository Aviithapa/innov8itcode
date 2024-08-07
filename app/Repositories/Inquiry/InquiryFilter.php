<?php

namespace App\Repositories\Inquiry;

use App\Infrastructure\Filters\BaseFilter;

class InquiryFilter extends BaseFilter
{
    /**
     * Filter is allowed with following parameters.
     *
     * @var array
     */
    protected $filters = ['keyword', 'type', 'status', 'email'];


    /**
     * keyword
     *
     * @return void
     */
    public function keyword()
    {
        if ($this->request->has('keyword')) {
            $this->builder->where('name', 'LIKE', '%' . $this->request->get('keyword') . '%');
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

    public function email()
    {
        if ($this->request->has('email')) {
            $this->builder->where('email', 'LIKE', '%' . $this->request->get('email') . '%');
        }
    }
}
