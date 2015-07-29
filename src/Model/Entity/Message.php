<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Message Entity.
 */
class Message extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'datesend' => true,
        'object' => true,
        'email' => true,
        'content' => true,
        'teacher_id' => true,
        'guardian_id' => true,
        'teacher' => true,
        'guardian' => true,
    ];
}
