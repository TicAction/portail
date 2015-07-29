<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Classroom Entity.
 */
class Classroom extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'grade' => true,
        'cycle' => true,
        'teacher_id' => true,
        'kid_id' => true,
        'teacher' => true,
        'kid' => true,
    ];
}
