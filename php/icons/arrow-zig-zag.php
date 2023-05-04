<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowZigZag extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrow-zig-zag';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 20v-10l10 6v-12" />   <path d="M13 7l3 -3l3 3" />
        SVG;
    }
}