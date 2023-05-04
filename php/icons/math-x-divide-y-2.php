<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMathXDivideY2 extends \Tabler\Icon {
    public static function getName(): string {
        return 'math-x-divide-y-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 21l18 -18" />   <path d="M15 14l3 4.5" />   <path d="M21 14l-4.5 7" />   <path d="M3 4l6 6" />   <path d="M3 10l6 -6" />
        SVG;
    }
}