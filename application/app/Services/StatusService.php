<?php

namespace App\Services;
use App\Services\BaseService;
use App\Models\Status;
use Image;

class StatusService extends BaseService
{
    private $status,$filePath;
    public function __construct(Status $status)
    {
        $this->filePath = public_path('users/files/status/');
        $this->status   = $status;
    }

    /**
     * Get status by id
     *
     * @param Integer $id
     * @return Status|boolean
     */
    public function getById($id)
    {
        return $this->status->find($id);
    }

    /**
     * Creating Status for user timeline
     *
     * @param String $status
     * @return String|boolean
     */
    public function createStatus($status,$user)
    {
        $status = $this->beforeStatusSave($status, $user);
        return $this->status->create($status);
    }

    /**
     * Creating Status for user timeline
     *
     * @param String $status
     * @return String|boolean
     */
    public function createStatusReply($reply,$user,$status_id)
    {
        $reply = $this->beforeStatusSave($reply,$user,$status_id);
        return $this->status->create($reply);
    }

    /**
     * Adapt $status data to fit your needs
     *
     * @param Array $status
     * @param User $user
     * @return Array
     */
    protected function beforeStatusSave($status,$user,$status_id = false)
    {
        $status['user_id'] = $user->id;
        if(isset($status['status']))
            $status['body'] = $status['status'];
        
        if(isset($status['reply']) && $status_id)
        {
            $status['body']      = $status['reply'];
            $status['parent_id'] = $status_id;
        }
        
        if(isset($status['file']) && ($file = $this->uploadFiles($status['file']))){
            $status['unique_file_name']  = $file['unique'];
            $status['original_file_name'] = $file['original'];
        }
        return $status;
    }

    /**
     * Deleting status by id
     *
     * @param type $id
     */
    public function deleteById($id)
    {
        $status = $this->status->find($id);
        if( $status )
        {
            if( $status->delete() )
            {
                $this->status->where('parent_id', $status->id)->delete();
                return true;
            }
        }
        return false;
    }

    /**
     * Deleting status by id
     * 
     * @param type $id
     */
    public function updateById($status,$id)
    {
        return $this->status->find($id)->update($status);
    }
    
    /**
     * Upload files
     * 
     * @param String $file
     * @param User $user
     * @return Boolean
     */
    public function uploadFiles( $file )
    {
        $newFile = $this->getFileName( $file );
        $fileName = $newFile['unique'];
        Image::make($file)->save($this->filePath.$fileName);
        return $newFile;
    }

    /**
     * Generate uniq name for file before save
     * 
     * @param String $file
     * @return Array
     */
    private function getFileName($file)
    {
        $extansion = $file->getClientOriginalExtension();
        $original  = $file->getClientOriginalName();
        $unique = uniqid().'.'.$extansion;
        return
        [
            'original' =>$original,
            'unique'  =>$unique,
        ];
    }
}