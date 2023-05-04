<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFileStack extends Tabler\Icon {
    public static function getName(): string {
        return 'file-stack';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 3v4a1 1 0 0 0 1 1h4" />   <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />   <path d="M5 21h14" />   <path d="M5 18h14" />   <path d="M5 15h14" />
        SVG;
    }
}