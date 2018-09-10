<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Offres Model
 *
 * @property \App\Model\Table\MilieuxTable|\Cake\ORM\Association\BelongsTo $Milieux
 * @property \App\Model\Table\CandidaturesTable|\Cake\ORM\Association\HasMany $Candidatures
 *
 * @method \App\Model\Entity\Offre get($primaryKey, $options = [])
 * @method \App\Model\Entity\Offre newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Offre[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Offre|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Offre|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Offre patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Offre[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Offre findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OffresTable extends Table
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

        $this->setTable('offres');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Milieux', [
            'foreignKey' => 'environment_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Candidatures', [
            'foreignKey' => 'offre_id'
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('specalisation')
            ->maxLength('specalisation', 255)
            ->requirePresence('specalisation', 'create')
            ->notEmpty('specalisation');

        $validator
            ->integer('jobs_open')
            ->requirePresence('jobs_open', 'create')
            ->notEmpty('jobs_open');

        $validator
            ->scalar('slug')
            ->maxLength('slug', 191)
            ->requirePresence('slug', 'create')
            ->notEmpty('slug');

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
        $rules->add($rules->existsIn(['environment_id'], 'Milieux'));

        return $rules;
    }
}
