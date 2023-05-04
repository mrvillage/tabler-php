<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconServerOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'server-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12h-6a3 3 0 0 1 -3 -3v-2c0 -1.083 .574 -2.033 1.435 -2.56m3.565 -.44h10a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-2" />   <path d="M16 12h2a3 3 0 0 1 3 3v2m-1.448 2.568a2.986 2.986 0 0 1 -1.552 .432h-12a3 3 0 0 1 -3 -3v-2a3 3 0 0 1 3 -3h6" />   <path d="M7 8v.01" />   <path d="M7 16v.01" />   <path d="M3 3l18 18" />
        SVG;
    }
}