<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GoldCalculator Entity
 *
 * @property int $id
 * @property int $state_id
 * @property int $city_id
 * @property int $carat_id
 * @property float $price
 * @property string $mcx_price
 * @property \Cake\I18n\FrozenTime $currenttime
 * @property \Cake\I18n\FrozenDate $currentdate
 * @property int $is_deleted
 *
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\City $city
 * @property \App\Model\Entity\Carat $carat
 */
class GoldCalculator extends Entity
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
        '*' => true,
        'id' => false
    ];
}
