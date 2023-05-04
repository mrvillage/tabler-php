<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFlask extends Tabler\Icon {
    public static function getName(): string {
        return 'flask';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 3l6 0" />   <path d="M10 9l4 0" />   <path d="M10 3v6l-4 11a.7 .7 0 0 0 .5 1h11a.7 .7 0 0 0 .5 -1l-4 -11v-6" />
        SVG;
    }
}