<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MasterStates Model
 *
 * @method \App\Model\Entity\MasterState get($primaryKey, $options = [])
 * @method \App\Model\Entity\MasterState newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MasterState[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MasterState|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MasterState patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MasterState[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MasterState findOrCreate($search, callable $callback = null, $options = [])
 */
class MasterStatesTable extends Table
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

        $this->setTable('master_states');
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
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('name');

        $validator
            ->integer('is_delete')
            ->allowEmpty('is_delete');

        return $validator;
    }
}
