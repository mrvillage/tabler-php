<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowLeftRhombus extends Tabler\Icon {
    public static function getName(): string {
        return 'arrow-left-rhombus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 12h-13" />   <path d="M6 9l-3 3l3 3" />   <path d="M18.5 9.5l2.5 2.5l-2.5 2.5l-2.5 -2.5z" />
        SVG;
    }
}