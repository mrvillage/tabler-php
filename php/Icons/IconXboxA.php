<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconXboxA extends \Tabler\Icon {
    public static function getName(): string {
        return 'xbox-a';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21a9 9 0 0 0 9 -9a9 9 0 0 0 -9 -9a9 9 0 0 0 -9 9a9 9 0 0 0 9 9z" />   <path d="M15 16l-3 -8l-3 8" />   <path d="M14 14h-4" />
        SVG;
    }
}