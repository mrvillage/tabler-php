<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSquareRoot extends \Tabler\Icon {
    public static function getName(): string {
        return 'square-root';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12h2l4 8l4 -16h8" />
        SVG;
    }
}