<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTransitionBottom extends \Tabler\Icon {
    public static function getName(): string {
        return 'transition-bottom';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 18a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3" />   <path d="M3 3m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v0a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />   <path d="M12 9v8" />   <path d="M9 14l3 3l3 -3" />
        SVG;
    }
}