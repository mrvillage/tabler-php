<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCircleArrowUp extends \Tabler\Icon {
    public static function getName(): string {
        return 'circle-arrow-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />   <path d="M12 8l-4 4" />   <path d="M12 8v8" />   <path d="M16 12l-4 -4" />
        SVG;
    }
}