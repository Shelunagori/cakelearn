<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MasterUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MasterUsersTable Test Case
 */
class MasterUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MasterUsersTable
     */
    public $MasterUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.master_users',
        'app.cash_back_details',
        'app.check_in_details',
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
        $config = TableRegistry::exists('MasterUsers') ? [] : ['className' => MasterUsersTable::class];
        $this->MasterUsers = TableRegistry::get('MasterUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MasterUsers);

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
