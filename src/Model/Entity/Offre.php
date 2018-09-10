<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Offre Entity
 *
 * @property int $id
 * @property int $milieu_id
 * @property string $name
 * @property string $specalisation
 * @property int $jobs_open
 * @property string $slug
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Milieux $milieux
 * @property \App\Model\Entity\Candidature[] $candidatures
 */
class Offre extends Entity
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
        'milieu_id' => true,
        'name' => true,
        'specalisation' => true,
        'jobs_open' => true,
        'slug' => true,
        'created' => true,
        'modified' => true,
        'milieux' => true,
        'candidatures' => true
    ];
}
