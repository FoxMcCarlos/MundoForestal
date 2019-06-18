<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoverTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoverTable Test Case
 */
class CoverTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CoverTable
     */
    public $Cover;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cover'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cover') ? [] : ['className' => CoverTable::class];
        $this->Cover = TableRegistry::get('Cover', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cover);

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
