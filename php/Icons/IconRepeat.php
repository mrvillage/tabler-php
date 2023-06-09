<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRepeat extends \Tabler\Icon {
    public static function getName(): string {
        return 'repeat';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 12v-3a3 3 0 0 1 3 -3h13m-3 -3l3 3l-3 3" />   <path d="M20 12v3a3 3 0 0 1 -3 3h-13m3 3l-3 -3l3 -3" />
        SVG;
    }
}