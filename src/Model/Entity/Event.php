<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity.
 */
class Event extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'datestart' => true,
        'dateend' => true,
        'comment' => true,
        'teacher_id' => true,
        'teacher' => true,
    ];
}
