<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFountain extends \Tabler\Icon {
    public static function getName(): string {
        return 'fountain';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 16v-5a2 2 0 1 0 -4 0" />   <path d="M15 16v-5a2 2 0 1 1 4 0" />   <path d="M12 16v-10a3 3 0 0 1 6 0" />   <path d="M6 6a3 3 0 0 1 6 0" />   <path d="M3 16h18v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-2z" />
        SVG;
    }
}