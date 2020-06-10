<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GroupListTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GroupListTable Test Case
 */
class GroupListTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GroupListTable
     */
    public $GroupList;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GroupList',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GroupList') ? [] : ['className' => GroupListTable::class];
        $this->GroupList = TableRegistry::getTableLocator()->get('GroupList', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GroupList);

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
