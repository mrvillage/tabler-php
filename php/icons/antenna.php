<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAntenna extends Icon {
    public static function getName(): string {
        return 'antenna';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 4v8" />   <path d="M16 4.5v7" />   <path d="M12 5v16" />   <path d="M8 5.5v5" />   <path d="M4 6v4" />   <path d="M20 8h-16" />
        SVG;
    }
}