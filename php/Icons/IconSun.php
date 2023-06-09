<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSun extends \Tabler\Icon {
    public static function getName(): string {
        return 'sun';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />   <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
        SVG;
    }
}