<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLineDotted extends Tabler\Icon {
    public static function getName(): string {
        return 'line-dotted';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 12v.01" />   <path d="M8 12v.01" />   <path d="M12 12v.01" />   <path d="M16 12v.01" />   <path d="M20 12v.01" />
        SVG;
    }
}