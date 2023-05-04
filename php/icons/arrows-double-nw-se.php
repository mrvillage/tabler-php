<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowsDoubleNwSe extends Tabler\Icon {
    public static function getName(): string {
        return 'arrows-double-nw-se';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 21l-11 -11" />   <path d="M3 14v-4h4" />   <path d="M17 14h4v-4" />   <path d="M10 3l11 11" />
        SVG;
    }
}