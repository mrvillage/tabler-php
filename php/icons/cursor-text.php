<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCursorText extends \Tabler\Icon {
    public static function getName(): string {
        return 'cursor-text';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 12h4" />   <path d="M9 4a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3" />   <path d="M15 4a3 3 0 0 0 -3 3v10a3 3 0 0 0 3 3" />
        SVG;
    }
}