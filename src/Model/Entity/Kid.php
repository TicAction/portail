<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Kid Entity.
 */
class Kid extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'firstname' => true,
        'lastname' => true,
        'birthday' => true,
        'code' => true,
        'guardian_id' => true,
        'guardian' => true,
        'behaviors' => true,
        'classrooms' => true,
    ];
}
