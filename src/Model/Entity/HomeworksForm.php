<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HomeworksForm Entity.
 */
class HomeworksForm extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'reading' => true,
        'grammaire' => true,
        'mathematique' => true,
        'verbe' => true,
        'us' => true,
        'art' => true,
        'mathhomework' => true,
        'other' => true,
        'datastart' => true,
        'dateend' => true,
        'teacher_id' => true,
        'teacher' => true,
    ];
}
