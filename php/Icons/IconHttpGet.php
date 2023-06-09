<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHttpGet extends \Tabler\Icon {
    public static function getName(): string {
        return 'http-get';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 8h-2a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2v-4h-1" />   <path d="M14 8h-4v8h4" />   <path d="M10 12h2.5" />   <path d="M17 8h4" />   <path d="M19 8v8" />
        SVG;
    }
}