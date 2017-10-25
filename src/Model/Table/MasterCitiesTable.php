<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MasterCities Model
 *
 * @property \App\Model\Table\MasterStatesTable|\Cake\ORM\Association\BelongsTo $MasterStates
 *
 * @method \App\Model\Entity\MasterCity get($primaryKey, $options = [])
 * @method \App\Model\Entity\MasterCity newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MasterCity[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MasterCity|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MasterCity patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MasterCity[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MasterCity findOrCreate($search, callable $callback = null, $options = [])
 */
class MasterCitiesTable extends Table
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

        $this->setTable('master_cities');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('MasterStates', [
            'foreignKey' => 'master_state_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('name');

        $validator
            ->integer('is_deleted')
            ->allowEmpty('is_deleted');

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
        $rules->add($rules->existsIn(['master_state_id'], 'MasterStates'));

        return $rules;
    }
}
