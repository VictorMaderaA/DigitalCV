<?php

namespace App\Repositories;

use App\Models\Resume;
use App\Repositories\BaseRepository;

/**
 * Class ResumeRepository
 * @package App\Repositories
 * @version July 15, 2020, 5:01 pm UTC
*/

class ResumeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'template_id',
        'content',
        'main'
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
        return Resume::class;
    }
}
