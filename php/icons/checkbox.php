<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCheckbox extends Tabler\Icon {
    public static function getName(): string {
        return 'checkbox';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 11l3 3l8 -8" />   <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
        SVG;
    }
}