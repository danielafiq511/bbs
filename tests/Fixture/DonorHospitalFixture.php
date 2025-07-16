<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DonorHospitalFixture
 */
class DonorHospitalFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'donor_hospital';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'donorhospital_id' => 1,
                'donor_id' => 1,
                'hospital_id' => 1,
                'appointment' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
