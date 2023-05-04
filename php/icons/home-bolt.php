<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHomeBolt extends Icon {
    public static function getName(): string {
        return 'home-bolt';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 10l-7 -7l-9 9h2v7a2 2 0 0 0 2 2h7.5" />   <path d="M9 21v-6a2 2 0 0 1 2 -2h2c.661 0 1.248 .32 1.612 .815" />   <path d="M19 14l-2 4h4l-2 4" />
        SVG;
    }
}