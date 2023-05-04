<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFlag extends \Tabler\Icon {
    public static function getName(): string {
        return 'flag';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 5a5 5 0 0 1 7 0a5 5 0 0 0 7 0v9a5 5 0 0 1 -7 0a5 5 0 0 0 -7 0v-9z" />   <path d="M5 21v-7" />
        SVG;
    }
}