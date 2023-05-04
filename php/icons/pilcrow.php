<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPilcrow extends Icon {
    public static function getName(): string {
        return 'pilcrow';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 4v16" />   <path d="M17 4v16" />   <path d="M19 4h-9.5a4.5 4.5 0 0 0 0 9h3.5" />
        SVG;
    }
}