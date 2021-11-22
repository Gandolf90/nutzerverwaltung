<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\I18nTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\I18nTable Test Case
 */
class I18nTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\I18nTable
     */
    protected $I18n;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.I18n',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('I18n') ? [] : ['className' => I18nTable::class];
        $this->I18n = $this->getTableLocator()->get('I18n', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->I18n);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\I18nTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\I18nTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
