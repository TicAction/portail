<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Behavior Entity.
 */
class Behavior extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'date' => true,
        'behavior' => true,
        'kid_id' => true,
        'kid' => true,
    ];
}
