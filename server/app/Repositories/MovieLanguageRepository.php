<?php

namespace App\Repositories;

use App\Models\MovieLanguage;
use InfyOm\Generator\Common\BaseRepository;

class MovieLanguageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'lang_name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MovieLanguage::class;
    }
}
