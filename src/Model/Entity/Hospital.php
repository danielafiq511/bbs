<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Hospital Entity
 *
 * @property int $hospital_id
 * @property int $hospital_name
 * @property int $hospital_address
 * @property int $hospital_contact
 *
 * @property \App\Model\Entity\Hospital[] $hospital
 */
class Hospital extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'hospital_name' => true,
        'hospital_address' => true,
        'hospital_contact' => true,
        'hospital' => true,
    ];
}
