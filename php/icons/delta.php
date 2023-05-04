<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDelta extends Icon {
    public static function getName(): string {
        return 'delta';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 20h16l-8 -16z" />
        SVG;
    }
}