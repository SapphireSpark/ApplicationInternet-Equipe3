<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Candidatures Model
 *
 * @property \App\Model\Table\OffresTable|\Cake\ORM\Association\BelongsTo $Offres
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Candidature get($primaryKey, $options = [])
 * @method \App\Model\Entity\Candidature newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Candidature[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Candidature|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Candidature|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Candidature patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Candidature[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Candidature findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CandidaturesTable extends Table
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

        $this->setTable('candidatures');
        $this->setDisplayField('offre_id');
        $this->setPrimaryKey(['offre_id', 'user_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Offres', [
            'foreignKey' => 'offre_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
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
        $rules->add($rules->existsIn(['offre_id'], 'Offres'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
