<?php

namespace App\Repositories;

use App\Models\Proffessions;
use InfyOm\Generator\Common\BaseRepository;

class ProffessionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'proffession_type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Proffessions::class;
    }

    public function checkExistData($p_type, $id='')
    {
        if($id==''){
             return $this->model->where('proffession_type', $p_type)->count();
        }else{
            return $this->model->where('proffession_type', $p_type)->where('id', '!=', $id)->count();
        }
       
    }
	
	/*-------------- api functions ---------------*/
	public function proffessionDataApi()
    {
        return $this->model->all(); 
    }
	
	public function proffessionDataOnIdApi($id)
    {
        return $this->model->with(['Peoples.people','Peoples.movie'])->find($id); 
    }
	
	public function proffessionDataOnApiSearch($searchstr)
    {
        return $this->model->where('proffession_type', 'like', '%'.$searchstr.'%')->get(); 
    }


    /*-------------- end api functions ---------------*/
}
