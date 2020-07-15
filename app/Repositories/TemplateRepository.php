<?php

namespace App\Repositories;

use App\Models\Template;
use App\Repositories\BaseRepository;

/**
 * Class TemplateRepository
 * @package App\Repositories
 * @version July 15, 2020, 4:22 pm UTC
*/

class TemplateRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'folderName',
        'active'
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
        return Template::class;
    }
}
