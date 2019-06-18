<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CoverFixture
 *
 */
class CoverFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'cover';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idCover' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'idAlbum' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Cover' => ['type' => 'string', 'length' => 200, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'idAlbum' => ['type' => 'index', 'columns' => ['idAlbum'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idCover'], 'length' => []],
            'cover_ibfk_1' => ['type' => 'foreign', 'columns' => ['idAlbum'], 'references' => ['albums', 'IdAlbum'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_spanish_ci'
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
                'idCover' => 1,
                'idAlbum' => 1,
                'Cover' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
