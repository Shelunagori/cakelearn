<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GoldCalculators Model
 *
 * @property \App\Model\Table\StatesTable|\Cake\ORM\Association\BelongsTo $States
 * @property \App\Model\Table\CitiesTable|\Cake\ORM\Association\BelongsTo $Cities
 * @property \App\Model\Table\CaratsTable|\Cake\ORM\Association\BelongsTo $Carats
 *
 * @method \App\Model\Entity\GoldCalculator get($primaryKey, $options = [])
 * @method \App\Model\Entity\GoldCalculator newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GoldCalculator[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GoldCalculator|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GoldCalculator patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GoldCalculator[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GoldCalculator findOrCreate($search, callable $callback = null, $options = [])
 */
class GoldCalculatorsTable extends Table
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

        $this->setTable('gold_calculators');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('States', [
            'foreignKey' => 'state_id'
        ]);
        $this->belongsTo('Cities', [
            'foreignKey' => 'city_id'
        ]);
        $this->belongsTo('Carats', [
            'foreignKey' => 'carat_id'
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
            ->numeric('price')
            ->allowEmpty('price');

        $validator
            ->allowEmpty('mcx_price');

        $validator
            ->dateTime('currenttime')
            ->requirePresence('currenttime', 'create')
            ->notEmpty('currenttime');

        $validator
            ->date('currentdate')
            ->allowEmpty('currentdate');

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
        $rules->add($rules->existsIn(['state_id'], 'States'));
        $rules->add($rules->existsIn(['city_id'], 'Cities'));
        $rules->add($rules->existsIn(['carat_id'], 'Carats'));

        return $rules;
    }
}
