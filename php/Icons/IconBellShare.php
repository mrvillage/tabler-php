<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBellShare extends \Tabler\Icon {
    public static function getName(): string {
        return 'bell-share';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.5 17h-8.5a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6a2 2 0 1 1 4 0a7 7 0 0 1 4 6v2" />   <path d="M9 17v1a3 3 0 0 0 3 3" />   <path d="M16 22l5 -5" />   <path d="M21 21.5v-4.5h-4.5" />
        SVG;
    }
}