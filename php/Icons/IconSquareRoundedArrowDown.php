<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSquareRoundedArrowDown extends \Tabler\Icon {
    public static function getName(): string {
        return 'square-rounded-arrow-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 12l4 4l4 -4" />   <path d="M12 8v8" />   <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
        SVG;
    }
}