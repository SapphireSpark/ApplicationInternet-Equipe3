<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Candidature Entity
 *
 * @property int $environment_id
 * @property int $user_id
 * @property string $slug
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Environment $environment
 * @property \App\Model\Entity\User $user
 */
class Candidature extends Entity
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
        'slug' => true,
        'created' => true,
        'modified' => true,
        'environment' => true,
        'user' => true
    ];
}
