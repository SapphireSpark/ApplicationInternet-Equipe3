<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Establishments Model
 *
 * @property \App\Model\Table\EnvironmentsTable|\Cake\ORM\Association\HasMany $Environments
 *
 * @method \App\Model\Entity\Establishment get($primaryKey, $options = [])
 * @method \App\Model\Entity\Establishment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Establishment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Establishment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Establishment|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Establishment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Establishment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Establishment findOrCreate($search, callable $callback = null, $options = [])
 */
class EstablishmentsTable extends Table
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

        $this->setTable('establishments');
        $this->setDisplayField('type');
        $this->setPrimaryKey('id');

        $this->hasMany('Environments', [
            'foreignKey' => 'establishment_id'
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
            ->scalar('type')
            ->maxLength('type', 255)
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        return $validator;
    }
}
