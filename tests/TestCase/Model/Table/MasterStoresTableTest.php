<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MasterStoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MasterStoresTable Test Case
 */
class MasterStoresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MasterStoresTable
     */
    public $MasterStores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.master_stores',
        'app.vendors',
        'app.purchase_details'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MasterStores') ? [] : ['className' => MasterStoresTable::class];
        $this->MasterStores = TableRegistry::get('MasterStores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MasterStores);

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
