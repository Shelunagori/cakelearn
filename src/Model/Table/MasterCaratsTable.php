<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MasterCarats Model
 *
 * @method \App\Model\Entity\MasterCarat get($primaryKey, $options = [])
 * @method \App\Model\Entity\MasterCarat newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MasterCarat[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MasterCarat|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MasterCarat patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MasterCarat[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MasterCarat findOrCreate($search, callable $callback = null, $options = [])
 */
class MasterCaratsTable extends Table
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

        $this->setTable('master_carats');
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
            ->integer('is_deleted')
            ->allowEmpty('is_deleted');

        return $validator;
    }
}
