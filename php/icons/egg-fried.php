<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconEggFried extends \Tabler\Icon {
    public static function getName(): string {
        return 'egg-fried';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M14 3a5 5 0 0 1 4.872 6.13a3 3 0 0 1 .178 5.681a3 3 0 1 1 -4.684 3.626a5 5 0 1 1 -8.662 -5a5 5 0 1 1 4.645 -8.856a4.982 4.982 0 0 1 3.651 -1.585z" />
        SVG;
    }
}