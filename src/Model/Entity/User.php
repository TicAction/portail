<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'username' => true,
        'password' => true,
        'email' => true,
        'firstname' => true,
        'lastname' => true,
        "role"     =>true,
        'code' => true,
    ];

    public function _setRole($role , $code)
    {

        $firstLetter = $this->code;;
        if(empty($role) and $firstLetter[0]=="P"){
            $userRole ="Role_Father";
            return $userRole;
        }elseif(empty($role) and $firstLetter[0]=="M"){
            $userRole = "Role_Mother";
            return $userRole;
        }elseif(empty($role) and $firstLetter[0]=="E"){
            $userRole = "Role_Teacher";
            return $userRole;
        }elseif(empty($role) and $firstLetter[0] =="A"){
            $userRole ="Role_Admin";
            return $userRole;
        }
    }

    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher())->hash($password);
    }


}
