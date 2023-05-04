<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconNumber7 extends Icon {
    public static function getName(): string {
        return 'number-7';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 4h8l-4 16" />
        SVG;
    }
}