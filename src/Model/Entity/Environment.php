<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Environment Entity
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $adress
 * @property string $city
 * @property string $province
 * @property string $zipcode
 * @property string $expectations
 * @property string $name_admin
 * @property string $title
 * @property int $telephone
 * @property int $fax
 * @property string $email
 * @property string $adress_admin
 * @property string $city_admin
 * @property string $province_admin
 * @property string $zipcode_admin
 * @property string $precision_facilities
 * @property string $precision_task
 * @property string $other_remark
 * @property string $profile
 * @property string $info_solicitation
 * @property string $info_contract
 * @property string $remark
 * @property string $other_info
 * @property \Cake\I18n\FrozenDate $date_invitation
 * @property \Cake\I18n\FrozenDate $date_lastcall
 * @property bool $active
 * @property int $number_application
 * @property bool $other_cegep
 * @property int $establishment_id
 * @property string $trp
 * @property int $region_id
 *
 * @property \App\Model\Entity\Establishment $establishment
 * @property \App\Model\Entity\Region $region
 * @property \App\Model\Entity\Candidature[] $candidatures
 * @property \App\Model\Entity\Offer[] $offers
 */
class Environment extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'slug' => true,
        'created' => true,
        'modified' => true,
        'adress' => true,
        'city' => true,
        'province' => true,
        'zipcode' => true,
        'expectations' => true,
        'name_admin' => true,
        'title' => true,
        'telephone' => true,
        'fax' => true,
        'email' => true,
        'adress_admin' => true,
        'city_admin' => true,
        'province_admin' => true,
        'zipcode_admin' => true,
        'precision_facilities' => true,
        'precision_task' => true,
        'other_remark' => true,
        'profile' => true,
        'info_solicitation' => true,
        'info_contract' => true,
        'remark' => true,
        'other_info' => true,
        'date_invitation' => true,
        'date_lastcall' => true,
        'active' => true,
        'number_application' => true,
        'other_cegep' => true,
        'establishment_id' => true,
        'trp' => true,
        'region_id' => true,
        'establishment' => true,
        'region' => true,
        'candidatures' => true,
        'offers' => true
    ];
}
