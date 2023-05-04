<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCircleArrowRight extends \Tabler\Icon {
    public static function getName(): string {
        return 'circle-arrow-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />   <path d="M16 12l-4 -4" />   <path d="M16 12h-8" />   <path d="M12 16l4 -4" />
        SVG;
    }
}