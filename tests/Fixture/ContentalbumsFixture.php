<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContentalbumsFixture
 *
 */
class ContentalbumsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'IdAlbumContent' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'IdAlbum' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'IdContent' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'albumId' => ['type' => 'index', 'columns' => ['IdAlbum'], 'length' => []],
            'contentId' => ['type' => 'index', 'columns' => ['IdContent'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['IdAlbumContent'], 'length' => []],
            'albumId' => ['type' => 'foreign', 'columns' => ['IdAlbum'], 'references' => ['albums', 'IdAlbum'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'contentId' => ['type' => 'foreign', 'columns' => ['IdContent'], 'references' => ['contents', 'IdContent'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'IdAlbumContent' => 1,
            'IdAlbum' => 1,
            'IdContent' => 1
        ],
    ];
}
