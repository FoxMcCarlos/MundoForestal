<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Content Entity
 *
 * @property int $IdContent
 * @property int $IdCategory
 * @property int $IdBotanicalFamily
 * @property string $Name
 * @property string $ScientificName
 * @property string $Description
 */
class Content extends Entity
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
        'IdCategory' => true,
        'IdBotanicalFamily' => true,
        'Name' => true,
        'ScientificName' => true,
        'Description' => true
    ];
}
