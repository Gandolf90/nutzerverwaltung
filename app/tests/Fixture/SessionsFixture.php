<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SessionsFixture
 */
class SessionsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => '',
                'created' => '2021-11-17 09:45:42',
                'modified' => '2021-11-17 09:45:42',
                'data' => 'Lorem ipsum dolor sit amet',
                'expires' => 1,
            ],
        ];
        parent::init();
    }
}
