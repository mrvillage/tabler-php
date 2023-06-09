<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHaze extends \Tabler\Icon {
    public static function getName(): string {
        return 'haze';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12h1" />   <path d="M12 3v1" />   <path d="M20 12h1" />   <path d="M5.6 5.6l.7 .7" />   <path d="M18.4 5.6l-.7 .7" />   <path d="M8 12a4 4 0 1 1 8 0" />   <path d="M3 16h18" />   <path d="M3 20h18" />
        SVG;
    }
}