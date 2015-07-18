<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity.
 */
class Student extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'firstname' => true,
        'lastname' => true,
        'mcode' => true,
        'fcode' => true,
        'users' => true,
    ];

    protected function _setUsers($users)
    {
        if (empty($users)){
            $users["_ids"] = 12;

        }
        return $users;
    }

    protected function _setMcode($mcode)
    {
        if(empty($mcode)){
            return uniqid($mcode);
        }

    }

    protected function _setFcode($fcode)
    {
        if(empty($mcode)){
            return uniqid($fcode);
        }

    }

}
