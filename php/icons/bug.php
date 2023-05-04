<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBug extends Icon {
    public static function getName(): string {
        return 'bug';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 9v-1a3 3 0 0 1 6 0v1" />   <path d="M8 9h8a6 6 0 0 1 1 3v3a5 5 0 0 1 -10 0v-3a6 6 0 0 1 1 -3" />   <path d="M3 13l4 0" />   <path d="M17 13l4 0" />   <path d="M12 20l0 -6" />   <path d="M4 19l3.35 -2" />   <path d="M20 19l-3.35 -2" />   <path d="M4 7l3.75 2.4" />   <path d="M20 7l-3.75 2.4" />
        SVG;
    }
}