<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContentalbumsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContentalbumsTable Test Case
 */
class ContentalbumsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ContentalbumsTable
     */
    public $Contentalbums;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.contentalbums'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Contentalbums') ? [] : ['className' => ContentalbumsTable::class];
        $this->Contentalbums = TableRegistry::get('Contentalbums', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Contentalbums);

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
