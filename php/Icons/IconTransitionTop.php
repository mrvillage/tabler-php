<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTransitionTop extends \Tabler\Icon {
    public static function getName(): string {
        return 'transition-top';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 6a3 3 0 0 0 -3 -3h-12a3 3 0 0 0 -3 3" />   <path d="M6 21h12a3 3 0 0 0 0 -6h-12a3 3 0 0 0 0 6z" />   <path d="M12 15v-8" />   <path d="M9 10l3 -3l3 3" />
        SVG;
    }
}