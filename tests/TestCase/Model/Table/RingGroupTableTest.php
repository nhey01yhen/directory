<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RingGroupTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RingGroupTable Test Case
 */
class RingGroupTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RingGroupTable
     */
    public $RingGroup;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.RingGroup',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RingGroup') ? [] : ['className' => RingGroupTable::class];
        $this->RingGroup = TableRegistry::getTableLocator()->get('RingGroup', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RingGroup);

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
