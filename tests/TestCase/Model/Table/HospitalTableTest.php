<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HospitalTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HospitalTable Test Case
 */
class HospitalTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HospitalTable
     */
    protected $Hospital;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Hospital',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Hospital') ? [] : ['className' => HospitalTable::class];
        $this->Hospital = $this->getTableLocator()->get('Hospital', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Hospital);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\HospitalTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
