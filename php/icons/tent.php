<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTent extends Icon {
    public static function getName(): string {
        return 'tent';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 14l4 6h6l-9 -16l-9 16h6l4 -6" />
        SVG;
    }
}