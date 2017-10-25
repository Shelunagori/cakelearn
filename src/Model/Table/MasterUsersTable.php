<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MasterUsers Model
 *
 * @property \App\Model\Table\CashBackDetailsTable|\Cake\ORM\Association\HasMany $CashBackDetails
 * @property \App\Model\Table\CheckInDetailsTable|\Cake\ORM\Association\HasMany $CheckInDetails
 * @property \App\Model\Table\PurchaseDetailsTable|\Cake\ORM\Association\HasMany $PurchaseDetails
 *
 * @method \App\Model\Entity\MasterUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\MasterUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MasterUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MasterUser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MasterUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MasterUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MasterUser findOrCreate($search, callable $callback = null, $options = [])
 */
class MasterUsersTable extends Table
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

        $this->setTable('master_users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('CashBackDetails', [
            'foreignKey' => 'master_user_id'
        ]);
        $this->hasMany('CheckInDetails', [
            'foreignKey' => 'master_user_id'
        ]);
        $this->hasMany('PurchaseDetails', [
            'foreignKey' => 'master_user_id'
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
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->allowEmpty('password');

        $validator
            ->allowEmpty('phoneNumber');

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
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
