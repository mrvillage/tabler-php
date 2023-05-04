<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCircleLetterF extends \Tabler\Icon {
    public static function getName(): string {
        return 'circle-letter-f';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M10 12h3" />   <path d="M14 8h-4v8" />
        SVG;
    }
}