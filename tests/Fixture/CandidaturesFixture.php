<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CandidaturesFixture
 *
 */
class CandidaturesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'environment_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'slug' => ['type' => 'string', 'length' => 191, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['environment_id', 'user_id'], 'length' => []],
            'user_id_2' => ['type' => 'unique', 'columns' => ['user_id'], 'length' => []],
            'environements_ibfk_3' => ['type' => 'foreign', 'columns' => ['environment_id'], 'references' => ['Environments', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'users_ibfk_3' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['Users', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'environment_id' => 1,
                'user_id' => 1,
                'slug' => 'Lorem ipsum dolor sit amet',
                'created' => '2018-09-24 19:26:38',
                'modified' => '2018-09-24 19:26:38'
            ],
        ];
        parent::init();
    }
}
