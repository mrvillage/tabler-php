<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDirection extends Icon {
    public static function getName(): string {
        return 'direction';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 10l3 -3l3 3" />   <path d="M9 14l3 3l3 -3" />
        SVG;
    }
}