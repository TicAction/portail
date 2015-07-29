<?php
namespace App\Model\Table;

use App\Model\Entity\Teacher;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Teachers Model
 *
 * @property \Cake\ORM\Association\HasMany $Classrooms
 * @property \Cake\ORM\Association\HasMany $Events
 * @property \Cake\ORM\Association\HasMany $Homeworks
 * @property \Cake\ORM\Association\HasMany $HomeworksForms
 * @property \Cake\ORM\Association\HasMany $Messages
 */
class TeachersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('teachers');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->hasMany('Classrooms', [
            'foreignKey' => 'teacher_id'
        ]);
        $this->hasMany('Events', [
            'foreignKey' => 'teacher_id'
        ]);
        $this->hasMany('Homeworks', [
            'foreignKey' => 'teacher_id'
        ]);
        $this->hasMany('HomeworksForms', [
            'foreignKey' => 'teacher_id'
        ]);
        $this->hasMany('Messages', [
            'foreignKey' => 'teacher_id'
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
            ->requirePresence('username', 'create')
            ->notEmpty('username');
            
        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');
            
        $validator
            ->add('isActive', 'valid', ['rule' => 'boolean'])
            ->requirePresence('isActive', 'create')
            ->notEmpty('isActive');
            
        $validator
            ->requirePresence('firstname', 'create')
            ->notEmpty('firstname');
            
        $validator
            ->requirePresence('lastname', 'create')
            ->notEmpty('lastname');
            
        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
