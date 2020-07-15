<?php

namespace App\Repositories;

use App\Models\TemplateViewHistory;
use App\Repositories\BaseRepository;

/**
 * Class TemplateViewHistoryRepository
 * @package App\Repositories
 * @version July 15, 2020, 4:48 pm UTC
*/

class TemplateViewHistoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'template_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TemplateViewHistory::class;
    }
}
