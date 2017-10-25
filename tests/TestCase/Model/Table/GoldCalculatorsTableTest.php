<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GoldCalculatorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GoldCalculatorsTable Test Case
 */
class GoldCalculatorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GoldCalculatorsTable
     */
    public $GoldCalculators;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.gold_calculators',
        'app.states',
        'app.cities',
        'app.carats'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GoldCalculators') ? [] : ['className' => GoldCalculatorsTable::class];
        $this->GoldCalculators = TableRegistry::get('GoldCalculators', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GoldCalculators);

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
