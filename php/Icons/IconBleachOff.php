<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBleachOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'bleach-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 19h14m1.986 -1.977a2 2 0 0 0 -.146 -.773l-7.1 -12.25a2 2 0 0 0 -3.5 0l-.815 1.405m-1.488 2.568l-4.797 8.277a2 2 0 0 0 1.75 2.75" />   <path d="M3 3l18 18" />
        SVG;
    }
}