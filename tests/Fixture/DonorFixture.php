<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DonorFixture
 */
class DonorFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'donor';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'donor_ID' => 1,
                'donor_name' => 1,
                'donor_contact' => 1,
                'donor_address' => 1,
            ],
        ];
        parent::init();
    }
}
