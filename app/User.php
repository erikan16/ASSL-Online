<?php

namespace App;

use Doctrine\Instantiator\Exception\UnexpectedValueException;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'userType', 'teacher_link'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

//    public function getTeachers()
//    {
//        $query =  $this
//            ->newBaseQueryBuilder()
//            ->select(array('id, name'))
//            ->from($this)
//            ->where('userType = 0');
//        return $query;
//    }


// tried to create a login for both types of users
//    public function roles() {
//        return $this->belongsToMany('App\Role');
//    }
//
//    public function isUser() {
//        return ($this->roles()->count()) ? true : false;
//    }
//
//    public function hasRole ($role) {
//        return in_array($this->roles->pluck('name'), $role);
//    }
//
//    private function getIdInArray($array, $term) {
//        foreach ($array as $key => $value) {
//            if ($value == $term) {
//                return $key;
//            }
//        }
//        throw new UnexpectedValueException;
//    }
//
//    public function makeUser($title) {
//        $assigned_roles = array();
//
//        $roles = Role::all()->pluck('name', 'id');
//
//        switch ($title) {
//            case 'teacher':
//                $assigned_roles[] = $this->getIdInArray($roles, 'teacherRoles');
//
//            case 'parent':
//                $assigned_roles[] = $this->getIdInArray($roles, 'parentRoles');
//
//            case 'admin':
//                $assigned_roles[] = $this->getIdInArray($roles, 'adminRoles');
//                break;
//            default:
//                throw new \Exception('Your user is not allowed to do this');
//        }
//        $this->roles()->sync($assigned_roles);
//    }
}
