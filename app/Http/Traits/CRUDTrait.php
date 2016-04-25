<?php
namespace App\Http\Traits;
trait CRUDTrait
{
    
    /**
     * Insert data into table
     * 
     * @param array $data
     * @return Model
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }
    
    /**
     * Get All from table
     * 
     * @return Model
     */
    public function read()
    {
        return $this->model->all();
    }
    
    /**
     * Update by id
     * 
     * @param int $id
     * @param array $data
     * @return Boolean
     */
    public function update($id, array $data)
    {
        return $this->model->whereId($id)->update($data);
    }

    /**
     * Delete by id
     * 
     * @param int $id
     * @return Boolean
     */
    public function delete($id)
    {
        return $this->model->whereId($id)->delete();
    }
}