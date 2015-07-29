<?php
namespace App\Test\TestCase\Controller;

use App\Controller\TeachersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\TeachersController Test Case
 */
class TeachersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.teachers',
        'app.classrooms',
        'app.kids',
        'app.guardians',
        'app.messages',
        'app.behaviors',
        'app.events',
        'app.homeworks',
        'app.homeworks_forms'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
