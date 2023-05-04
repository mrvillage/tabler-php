<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowLeftSquare extends Tabler\Icon {
    public static function getName(): string {
        return 'arrow-left-square';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 12h-14" />   <path d="M6 9l-3 3l3 3" />   <path d="M21 14h-4v-4h4z" />
        SVG;
    }
}