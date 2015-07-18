<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StudentsUser Entity.
 */
class StudentsUser extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'student_id' => true,
        'user_id' => true,
        'student' => true,
        'user' => true,
    ];
}
