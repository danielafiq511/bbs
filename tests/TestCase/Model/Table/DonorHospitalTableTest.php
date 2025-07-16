<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DonorHospitalTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DonorHospitalTable Test Case
 */
class DonorHospitalTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DonorHospitalTable
     */
    protected $DonorHospital;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.DonorHospital',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DonorHospital') ? [] : ['className' => DonorHospitalTable::class];
        $this->DonorHospital = $this->getTableLocator()->get('DonorHospital', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DonorHospital);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\DonorHospitalTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
