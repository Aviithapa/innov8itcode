<?php

namespace App\Repositories\Advisor;

use App\Models\Advisor;
use App\Repositories\Repository;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class AdvisorRepository extends Repository
{

    /**
     * AdvisorRepository constructor.
     * @param Advisor $Advisor
     */
    public function __construct(Advisor $Advisor)
    {
        parent::__construct($Advisor);
    }

    /**
     * @param Request $request
     * @param array $columns
     * @return LengthAwarePaginator
     */
    public function getPaginatedList(Request $request, $type = null, array $columns = array('*')): LengthAwarePaginator
    {
        $limit = $request->get('limit', config('app.per_page'));
        return $this->model->newQuery()
            ->latest()
            ->paginate($limit);
    }

    /**
     * @param String $name
     * @return 
     */
    public function findByName($name)
    {
        $data = $this->model->where('name', $name)->first();
        return $data;
    }
}
