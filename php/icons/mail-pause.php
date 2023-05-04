<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMailPause extends Icon {
    public static function getName(): string {
        return 'mail-pause';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 19h-8a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v6" />   <path d="M3 7l9 6l9 -6" />   <path d="M17 17v5" />   <path d="M21 17v5" />
        SVG;
    }
}