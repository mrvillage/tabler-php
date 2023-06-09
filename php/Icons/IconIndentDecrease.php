<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconIndentDecrease extends \Tabler\Icon {
    public static function getName(): string {
        return 'indent-decrease';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 6l-7 0" />   <path d="M20 12l-9 0" />   <path d="M20 18l-7 0" />   <path d="M8 8l-4 4l4 4" />
        SVG;
    }
}