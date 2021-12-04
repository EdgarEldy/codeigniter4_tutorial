<?php


namespace App\Models;


use CodeIgniter\Model;

class Profile extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'profiles';
    protected $primaryKey = 'Id';
    protected $returnType = 'array';

    // Set use soft delete to false
    protected $useSoftDeletes = false;

    protected $useTimestamps = false;

    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';


}