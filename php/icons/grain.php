<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconGrain extends Icon {
    public static function getName(): string {
        return 'grain';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4.5 9.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M9.5 4.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M9.5 14.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M4.5 19.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M14.5 9.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M19.5 4.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M14.5 19.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M19.5 14.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
        SVG;
    }
}