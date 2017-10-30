<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BotanicalfamiliesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BotanicalfamiliesTable Test Case
 */
class BotanicalfamiliesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BotanicalfamiliesTable
     */
    public $Botanicalfamilies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.botanicalfamilies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Botanicalfamilies') ? [] : ['className' => BotanicalfamiliesTable::class];
        $this->Botanicalfamilies = TableRegistry::get('Botanicalfamilies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Botanicalfamilies);

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
