<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dirlist Model
 *
 * @method \App\Model\Entity\Dirlist get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dirlist newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Dirlist[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dirlist|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dirlist saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dirlist patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dirlist[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dirlist findOrCreate($search, callable $callback = null, $options = [])
 */
class DirlistTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('dirlist');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('did_number')
            ->maxLength('did_number', 100)
            ->requirePresence('did_number', 'create')
            ->notEmptyString('did_number');

        $validator
            ->scalar('ext_number')
            ->maxLength('ext_number', 100)
            ->requirePresence('ext_number', 'create')
            ->notEmptyString('ext_number');

        $validator
            ->scalar('dept')
            ->maxLength('dept', 255)
            ->requirePresence('dept', 'create')
            ->notEmptyString('dept');

        $validator
            ->scalar('username')
            ->maxLength('username', 100)
            ->requirePresence('username', 'create')
            ->notEmptyString('username');

        $validator
            ->scalar('group_list')
            ->maxLength('group_list', 100)
            ->requirePresence('group_list', 'create')
            ->notEmptyString('group_list');

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

        return $rules;
    }
}
