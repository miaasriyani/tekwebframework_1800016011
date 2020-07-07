<?php
namespace App\Models;
use CodeIgniter\Model;

class Personal_m extends Model
{
	protected $table = 'tb_personal';
	protected $primaryKey = 'id';
	protected $allowedFields = ['fullname', 'phone', 'email', 'password'];
}