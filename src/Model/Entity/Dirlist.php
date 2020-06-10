<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dirlist Entity
 *
 * @property int $id
 * @property string $did_number
 * @property string $ext_number
 * @property string $dept
 * @property string $username
 * @property string $group_list
 */
class Dirlist extends Entity
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
        'did_number' => true,
        'ext_number' => true,
        'dept' => true,
        'username' => true,
        'group_list' => true,
    ];
}
