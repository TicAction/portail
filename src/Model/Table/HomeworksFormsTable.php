<?php
namespace App\Model\Table;

use App\Model\Entity\HomeworksForm;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HomeworksForms Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Teachers
 */
class HomeworksFormsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('homeworks_forms');
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
            ->requirePresence('reading', 'create')
            ->notEmpty('reading');
            
        $validator
            ->requirePresence('grammaire', 'create')
            ->notEmpty('grammaire');
            
        $validator
            ->requirePresence('mathematique', 'create')
            ->notEmpty('mathematique');
            
        $validator
            ->requirePresence('verbe', 'create')
            ->notEmpty('verbe');
            
        $validator
            ->requirePresence('us', 'create')
            ->notEmpty('us');
            
        $validator
            ->requirePresence('art', 'create')
            ->notEmpty('art');
            
        $validator
            ->requirePresence('mathhomework', 'create')
            ->notEmpty('mathhomework');
            
        $validator
            ->requirePresence('other', 'create')
            ->notEmpty('other');
            
        $validator
            ->add('datastart', 'valid', ['rule' => 'date'])
            ->requirePresence('datastart', 'create')
            ->notEmpty('datastart');
            
        $validator
            ->requirePresence('dateend', 'create')
            ->notEmpty('dateend');

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
