<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHighlightOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'highlight-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 9l-6 6v4h4l6 -6m2 -2l2.503 -2.503a2.828 2.828 0 1 0 -4 -4l-2.497 2.497" />   <path d="M12.5 5.5l4 4" />   <path d="M4.5 13.5l4 4" />   <path d="M19 15h2v2m-2 2h-6l3 -3" />   <path d="M3 3l18 18" />
        SVG;
    }
}