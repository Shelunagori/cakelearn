<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MasterStatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MasterStatesTable Test Case
 */
class MasterStatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MasterStatesTable
     */
    public $MasterStates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.master_states'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MasterStates') ? [] : ['className' => MasterStatesTable::class];
        $this->MasterStates = TableRegistry::get('MasterStates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MasterStates);

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
