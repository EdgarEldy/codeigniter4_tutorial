<?php


namespace App\Models;


use CodeIgniter\Model;

class Profile extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'profiles';
    protected $primaryKey = 'Id';
    protected $returnType = 'array';

}