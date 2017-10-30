<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ScientificnamesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ScientificnamesTable Test Case
 */
class ScientificnamesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ScientificnamesTable
     */
    public $Scientificnames;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.scientificnames'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Scientificnames') ? [] : ['className' => ScientificnamesTable::class];
        $this->Scientificnames = TableRegistry::get('Scientificnames', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Scientificnames);

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
