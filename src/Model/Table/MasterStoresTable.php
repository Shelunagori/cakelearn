<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MasterStores Model
 *
 * @property \App\Model\Table\VendorsTable|\Cake\ORM\Association\BelongsTo $Vendors
 * @property \App\Model\Table\PurchaseDetailsTable|\Cake\ORM\Association\HasMany $PurchaseDetails
 *
 * @method \App\Model\Entity\MasterStore get($primaryKey, $options = [])
 * @method \App\Model\Entity\MasterStore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MasterStore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MasterStore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MasterStore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MasterStore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MasterStore findOrCreate($search, callable $callback = null, $options = [])
 */
class MasterStoresTable extends Table
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

        $this->setTable('master_stores');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Vendors', [
            'foreignKey' => 'vendor_id'
        ]);
        $this->hasMany('PurchaseDetails', [
            'foreignKey' => 'master_store_id'
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
            ->allowEmpty('logo');

        $validator
            ->allowEmpty('address');

        $validator
            ->numeric('rating')
            ->allowEmpty('rating');

        $validator
            ->decimal('discount')
            ->allowEmpty('discount');

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
        $rules->add($rules->existsIn(['vendor_id'], 'Vendors'));

        return $rules;
    }
}
