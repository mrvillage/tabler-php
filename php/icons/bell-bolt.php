<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBellBolt extends Tabler\Icon {
    public static function getName(): string {
        return 'bell-bolt';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13.5 17h-9.5a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6a2 2 0 1 1 4 0a7 7 0 0 1 4 6v1" />   <path d="M9 17v1a3 3 0 0 0 4.368 2.67" />   <path d="M19 16l-2 3h4l-2 3" />
        SVG;
    }
}