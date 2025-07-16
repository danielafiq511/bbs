<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DonorHospital Entity
 *
 * @property int $donorhospital_id
 * @property int $donor_id
 * @property int $hospital_id
 * @property string $appointment
 */
class DonorHospital extends Entity
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
        'donor_id' => true,
        'hospital_id' => true,
        'appointment' => true,
    ];
}
