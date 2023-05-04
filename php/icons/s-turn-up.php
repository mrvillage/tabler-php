<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSTurnUp extends Tabler\Icon {
    public static function getName(): string {
        return 's-turn-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 19a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M5 17v-9.5a3.5 3.5 0 0 1 7 0v9a3.5 3.5 0 0 0 7 0v-13.5" />   <path d="M16 6l3 -3l3 3" />
        SVG;
    }
}