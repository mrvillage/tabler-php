<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandLetterboxd extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-letterboxd';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M8 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M16 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
        SVG;
    }
}