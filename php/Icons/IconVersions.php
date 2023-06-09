<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconVersions extends \Tabler\Icon {
    public static function getName(): string {
        return 'versions';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 5m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" />   <path d="M7 7l0 10" />   <path d="M4 8l0 8" />
        SVG;
    }
}