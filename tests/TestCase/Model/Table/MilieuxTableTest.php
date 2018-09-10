<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MilieuxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MilieuxTable Test Case
 */
class MilieuxTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MilieuxTable
     */
    public $Milieux;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.milieux'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Milieux') ? [] : ['className' => MilieuxTable::class];
        $this->Milieux = TableRegistry::getTableLocator()->get('Milieux', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Milieux);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
