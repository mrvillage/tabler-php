<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRectangleVerticalFilled extends Tabler\Icon {
    public static function getName(): string {
        return 'rectangle-vertical-filled';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 2h-10a3 3 0 0 0 -3 3v14a3 3 0 0 0 3 3h10a3 3 0 0 0 3 -3v-14a3 3 0 0 0 -3 -3z" stroke-width="0" fill="currentColor" />
        SVG;
    }
}