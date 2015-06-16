<?php
namespace App\Model\Entity;

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
        'role'     => true,
        'code' => true,
    ];

    public function _setRole($role)
    {

    }
}
