<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSunset2 extends Tabler\Icon {
    public static function getName(): string {
        return 'sunset-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 13h1" />   <path d="M20 13h1" />   <path d="M5.6 6.6l.7 .7" />   <path d="M18.4 6.6l-.7 .7" />   <path d="M8 13a4 4 0 1 1 8 0" />   <path d="M3 17h18" />   <path d="M7 20h5" />   <path d="M16 20h1" />   <path d="M12 5v-1" />
        SVG;
    }
}