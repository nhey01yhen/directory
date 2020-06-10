<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DirlistClientTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DirlistClientTable Test Case
 */
class DirlistClientTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DirlistClientTable
     */
    public $DirlistClient;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.DirlistClient',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DirlistClient') ? [] : ['className' => DirlistClientTable::class];
        $this->DirlistClient = TableRegistry::getTableLocator()->get('DirlistClient', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DirlistClient);

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
