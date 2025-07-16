<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HospitalFixture
 */
class HospitalFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'hospital';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'hospital_id' => 1,
                'hospital_name' => 1,
                'hospital_address' => 1,
                'hospital_contact' => 1,
            ],
        ];
        parent::init();
    }
}
