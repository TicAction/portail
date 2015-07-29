<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Homework Entity.
 */
class Homework extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'datestart' => true,
        'dateend' => true,
        'content' => true,
        'teacher_id' => true,
        'teacher' => true,
    ];
}
