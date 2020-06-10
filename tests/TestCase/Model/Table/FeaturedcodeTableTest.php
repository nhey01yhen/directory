<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FeaturedcodeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FeaturedcodeTable Test Case
 */
class FeaturedcodeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FeaturedcodeTable
     */
    public $Featuredcode;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Featuredcode',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Featuredcode') ? [] : ['className' => FeaturedcodeTable::class];
        $this->Featuredcode = TableRegistry::getTableLocator()->get('Featuredcode', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Featuredcode);

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
