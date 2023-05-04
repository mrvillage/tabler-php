<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowLeftTail extends Tabler\Icon {
    public static function getName(): string {
        return 'arrow-left-tail';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 12h-15" />   <path d="M6 9l-3 3l3 3" />   <path d="M21 9l-3 3l3 3" />
        SVG;
    }
}