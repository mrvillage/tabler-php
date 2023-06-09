<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHttpDelete extends \Tabler\Icon {
    public static function getName(): string {
        return 'http-delete';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 8v8h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-2z" />   <path d="M14 8h-4v8h4" />   <path d="M10 12h2.5" />   <path d="M17 8v8h4" />
        SVG;
    }
}