<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowsUpDown extends Tabler\Icon {
    public static function getName(): string {
        return 'arrows-up-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 3l0 18" />   <path d="M10 6l-3 -3l-3 3" />   <path d="M20 18l-3 3l-3 -3" />   <path d="M17 21l0 -18" />
        SVG;
    }
}