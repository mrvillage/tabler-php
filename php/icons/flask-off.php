<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFlaskOff extends Icon {
    public static function getName(): string {
        return 'flask-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 3h6" />   <path d="M13 9h1" />   <path d="M10 3v3m-.268 3.736l-3.732 10.264a.7 .7 0 0 0 .5 1h11a.7 .7 0 0 0 .5 -1l-1.143 -3.142m-2.288 -6.294l-.569 -1.564v-6" />   <path d="M3 3l18 18" />
        SVG;
    }
}