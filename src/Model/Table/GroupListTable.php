<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GroupList Model
 *
 * @method \App\Model\Entity\GroupList get($primaryKey, $options = [])
 * @method \App\Model\Entity\GroupList newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GroupList[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GroupList|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GroupList saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GroupList patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GroupList[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GroupList findOrCreate($search, callable $callback = null, $options = [])
 */
class GroupListTable extends Table
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

        $this->setTable('group_list');
        $this->setDisplayField('name');
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        return $validator;
    }
}
