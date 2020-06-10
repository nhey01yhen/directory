<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DialpatternTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DialpatternTable Test Case
 */
class DialpatternTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DialpatternTable
     */
    public $Dialpattern;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Dialpattern',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Dialpattern') ? [] : ['className' => DialpatternTable::class];
        $this->Dialpattern = TableRegistry::getTableLocator()->get('Dialpattern', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Dialpattern);

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
