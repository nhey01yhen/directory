<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RingGroup Model
 *
 * @method \App\Model\Entity\RingGroup get($primaryKey, $options = [])
 * @method \App\Model\Entity\RingGroup newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RingGroup[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RingGroup|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RingGroup saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RingGroup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RingGroup[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RingGroup findOrCreate($search, callable $callback = null, $options = [])
 */
class RingGroupTable extends Table
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

        $this->setTable('ring_group');
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
            ->scalar('id_group')
            ->maxLength('id_group', 100)
            ->requirePresence('id_group', 'create')
            ->notEmptyString('id_group');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        return $validator;
    }
}
