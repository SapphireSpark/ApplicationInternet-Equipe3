<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Milieux Model
 *
 * @method \App\Model\Entity\Milieux get($primaryKey, $options = [])
 * @method \App\Model\Entity\Milieux newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Milieux[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Milieux|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Milieux|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Milieux patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Milieux[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Milieux findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MilieuxTable extends Table
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

        $this->setTable('milieux');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('slug')
            ->maxLength('slug', 191)
            ->requirePresence('slug', 'create')
            ->notEmpty('slug');

        $validator
            ->scalar('adress')
            ->maxLength('adress', 255)
            ->requirePresence('adress', 'create')
            ->notEmpty('adress');

        $validator
            ->scalar('city')
            ->maxLength('city', 50)
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->scalar('province')
            ->maxLength('province', 50)
            ->requirePresence('province', 'create')
            ->notEmpty('province');

        $validator
            ->scalar('zipcode')
            ->maxLength('zipcode', 6)
            ->requirePresence('zipcode', 'create')
            ->notEmpty('zipcode');

        $validator
            ->scalar('expectations')
            ->maxLength('expectations', 255)
            ->requirePresence('expectations', 'create')
            ->notEmpty('expectations');

        $validator
            ->scalar('name_admin')
            ->maxLength('name_admin', 255)
            ->requirePresence('name_admin', 'create')
            ->notEmpty('name_admin');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->integer('telephone')
            ->requirePresence('telephone', 'create')
            ->notEmpty('telephone');

        $validator
            ->integer('fax')
            ->requirePresence('fax', 'create')
            ->notEmpty('fax');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('adress_admin')
            ->maxLength('adress_admin', 255)
            ->requirePresence('adress_admin', 'create')
            ->notEmpty('adress_admin');

        $validator
            ->scalar('city_admin')
            ->maxLength('city_admin', 50)
            ->requirePresence('city_admin', 'create')
            ->notEmpty('city_admin');

        $validator
            ->scalar('province_admin')
            ->maxLength('province_admin', 50)
            ->requirePresence('province_admin', 'create')
            ->notEmpty('province_admin');

        $validator
            ->scalar('zipcode_admin')
            ->maxLength('zipcode_admin', 6)
            ->requirePresence('zipcode_admin', 'create')
            ->notEmpty('zipcode_admin');

        $validator
            ->scalar('region')
            ->requirePresence('region', 'create')
            ->notEmpty('region');

        $validator
            ->scalar('precision_facilities')
            ->maxLength('precision_facilities', 255)
            ->requirePresence('precision_facilities', 'create')
            ->notEmpty('precision_facilities');

        $validator
            ->scalar('precision_task')
            ->maxLength('precision_task', 255)
            ->requirePresence('precision_task', 'create')
            ->notEmpty('precision_task');

        $validator
            ->scalar('other_remark')
            ->maxLength('other_remark', 255)
            ->requirePresence('other_remark', 'create')
            ->notEmpty('other_remark');

        $validator
            ->scalar('type_milieux')
            ->requirePresence('type_milieux', 'create')
            ->notEmpty('type_milieux');

        $validator
            ->scalar('type_family')
            ->requirePresence('type_family', 'create')
            ->notEmpty('type_family');

        $validator
            ->scalar('profile')
            ->maxLength('profile', 255)
            ->requirePresence('profile', 'create')
            ->notEmpty('profile');

        $validator
            ->scalar('info_solicitation')
            ->maxLength('info_solicitation', 255)
            ->requirePresence('info_solicitation', 'create')
            ->notEmpty('info_solicitation');

        $validator
            ->scalar('info_contract')
            ->maxLength('info_contract', 255)
            ->requirePresence('info_contract', 'create')
            ->notEmpty('info_contract');

        $validator
            ->scalar('remark')
            ->maxLength('remark', 255)
            ->requirePresence('remark', 'create')
            ->notEmpty('remark');

        $validator
            ->scalar('other_info')
            ->maxLength('other_info', 255)
            ->requirePresence('other_info', 'create')
            ->notEmpty('other_info');

        $validator
            ->date('date_invitation')
            ->requirePresence('date_invitation', 'create')
            ->notEmpty('date_invitation');

        $validator
            ->date('date_lastcall')
            ->requirePresence('date_lastcall', 'create')
            ->notEmpty('date_lastcall');

        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        $validator
            ->integer('number_application')
            ->requirePresence('number_application', 'create')
            ->notEmpty('number_application');

        $validator
            ->boolean('other_cegep')
            ->requirePresence('other_cegep', 'create')
            ->notEmpty('other_cegep');

        $validator
            ->scalar('type_establishment')
            ->requirePresence('type_establishment', 'create')
            ->notEmpty('type_establishment');

        $validator
            ->scalar('type_client')
            ->requirePresence('type_client', 'create')
            ->notEmpty('type_client');

        $validator
            ->scalar('missions')
            ->requirePresence('missions', 'create')
            ->notEmpty('missions');

        $validator
            ->scalar('trp')
            ->maxLength('trp', 255)
            ->requirePresence('trp', 'create')
            ->notEmpty('trp');

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
