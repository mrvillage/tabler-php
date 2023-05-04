<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSunrise extends \Tabler\Icon {
    public static function getName(): string {
        return 'sunrise';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 17h1m16 0h1m-15.4 -6.4l.7 .7m12.1 -.7l-.7 .7m-9.7 5.7a4 4 0 0 1 8 0" />   <path d="M3 21l18 0" />   <path d="M12 9v-6l3 3m-6 0l3 -3" />
        SVG;
    }
}