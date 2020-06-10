<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dialpattern Entity
 *
 * @property int $id
 * @property string $country
 * @property string $dialing_code
 * @property string $mobile_pattern
 * @property string $mobile_comment
 * @property string $landline_pattern
 * @property string $landline_comment
 */
class Dialpattern extends Entity
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
        'country' => true,
        'dialing_code' => true,
        'mobile_pattern' => true,
        'mobile_comment' => true,
        'landline_pattern' => true,
        'landline_comment' => true,
    ];
}
