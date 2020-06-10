<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Featuredcode Model
 *
 * @method \App\Model\Entity\Featuredcode get($primaryKey, $options = [])
 * @method \App\Model\Entity\Featuredcode newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Featuredcode[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Featuredcode|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Featuredcode saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Featuredcode patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Featuredcode[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Featuredcode findOrCreate($search, callable $callback = null, $options = [])
 */
class FeaturedcodeTable extends Table
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

        $this->setTable('featuredcode');
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
            ->scalar('featured_code')
            ->maxLength('featured_code', 100)
            ->requirePresence('featured_code', 'create')
            ->notEmptyString('featured_code');

        $validator
            ->scalar('action')
            ->maxLength('action', 255)
            ->requirePresence('action', 'create')
            ->notEmptyString('action');

        return $validator;
    }
}
