<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MasterCaratsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MasterCaratsTable Test Case
 */
class MasterCaratsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MasterCaratsTable
     */
    public $MasterCarats;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.master_carats'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MasterCarats') ? [] : ['className' => MasterCaratsTable::class];
        $this->MasterCarats = TableRegistry::get('MasterCarats', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MasterCarats);

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
