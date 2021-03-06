<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MasterStore Entity
 *
 * @property int $id
 * @property int $vendor_id
 * @property string $name
 * @property string $logo
 * @property string $address
 * @property float $rating
 * @property float $discount
 * @property int $is_deleted
 *
 * @property \App\Model\Entity\Vendor $vendor
 * @property \App\Model\Entity\PurchaseDetail[] $purchase_details
 */
class MasterStore extends Entity
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
