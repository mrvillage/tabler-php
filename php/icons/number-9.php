<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconNumber9 extends Tabler\Icon {
    public static function getName(): string {
        return 'number-9';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 8a4 4 0 1 0 -8 0v1a4 4 0 1 0 8 0" />   <path d="M8 16a4 4 0 1 0 8 0v-8" />
        SVG;
    }
}