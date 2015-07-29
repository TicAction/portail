<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Teacher Entity.
 */
class Teacher extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'username' => true,
        'password' => true,
        'isActive' => true,
        'firstname' => true,
        'lastname' => true,
        'email' => true,
        'classrooms' => true,
        'events' => true,
        'homeworks' => true,
        'homeworks_forms' => true,
        'messages' => true,
    ];
}
