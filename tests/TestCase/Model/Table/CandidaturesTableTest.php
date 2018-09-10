<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CandidaturesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CandidaturesTable Test Case
 */
class CandidaturesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CandidaturesTable
     */
    public $Candidatures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.candidatures',
        'app.offres',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Candidatures') ? [] : ['className' => CandidaturesTable::class];
        $this->Candidatures = TableRegistry::getTableLocator()->get('Candidatures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Candidatures);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
