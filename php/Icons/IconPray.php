<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPray extends \Tabler\Icon {
    public static function getName(): string {
        return 'pray';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M7 20h8l-4 -4v-7l4 3l2 -2" />
        SVG;
    }
}