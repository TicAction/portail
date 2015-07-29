<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Guardian Entity.
 */
class Guardian extends Entity
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
        'kids' => true,
        'messages' => true,
    ];
}
