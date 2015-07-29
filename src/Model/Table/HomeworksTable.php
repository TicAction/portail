<?php
namespace App\Model\Table;

use App\Model\Entity\Homework;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Homeworks Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Teachers
 */
class HomeworksTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('homeworks');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Teachers', [
            'foreignKey' => 'teacher_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->add('datestart', 'valid', ['rule' => 'date'])
            ->requirePresence('datestart', 'create')
            ->notEmpty('datestart');
            
        $validator
            ->add('dateend', 'valid', ['rule' => 'date'])
            ->requirePresence('dateend', 'create')
            ->notEmpty('dateend');
            
        $validator
            ->requirePresence('content', 'create')
            ->notEmpty('content');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['teacher_id'], 'Teachers'));
        return $rules;
    }
}
