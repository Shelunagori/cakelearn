<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MasterUser Entity
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $phoneNumber
 * @property int $is_deleted
 *
 * @property \App\Model\Entity\CashBackDetail[] $cash_back_details
 * @property \App\Model\Entity\CheckInDetail[] $check_in_details
 * @property \App\Model\Entity\PurchaseDetail[] $purchase_details
 */
class MasterUser extends Entity
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
