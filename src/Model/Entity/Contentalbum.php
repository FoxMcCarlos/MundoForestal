<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contentalbum Entity
 *
 * @property int $IdAlbumContent
 * @property int $IdAlbum
 * @property int $IdContent
 */
class Contentalbum extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'IdAlbum' => true,
        'IdContent' => true
    ];
}
