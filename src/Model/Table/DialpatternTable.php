<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dialpattern Model
 *
 * @method \App\Model\Entity\Dialpattern get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dialpattern newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Dialpattern[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dialpattern|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dialpattern saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dialpattern patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dialpattern[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dialpattern findOrCreate($search, callable $callback = null, $options = [])
 */
class DialpatternTable extends Table
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

        $this->setTable('dialpattern');
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
            ->scalar('country')
            ->maxLength('country', 100)
            ->requirePresence('country', 'create')
            ->notEmptyString('country');

        $validator
            ->scalar('dialing_code')
            ->maxLength('dialing_code', 255)
            ->requirePresence('dialing_code', 'create')
            ->notEmptyString('dialing_code');

        $validator
            ->scalar('mobile_pattern')
            ->maxLength('mobile_pattern', 255)
            ->requirePresence('mobile_pattern', 'create')
            ->notEmptyString('mobile_pattern');

        $validator
            ->scalar('mobile_comment')
            ->maxLength('mobile_comment', 255)
            ->requirePresence('mobile_comment', 'create')
            ->notEmptyString('mobile_comment');

        $validator
            ->scalar('landline_pattern')
            ->maxLength('landline_pattern', 255)
            ->requirePresence('landline_pattern', 'create')
            ->notEmptyString('landline_pattern');

        $validator
            ->scalar('landline_comment')
            ->maxLength('landline_comment', 255)
            ->requirePresence('landline_comment', 'create')
            ->notEmptyString('landline_comment');

        return $validator;
    }
}
