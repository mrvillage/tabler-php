<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconNumber3 extends Icon {
    public static function getName(): string {
        return 'number-3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12a4 4 0 1 0 -4 -4" />   <path d="M8 16a4 4 0 1 0 4 -4" />
        SVG;
    }
}