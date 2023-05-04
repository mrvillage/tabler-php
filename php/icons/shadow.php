<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconShadow extends Icon {
    public static function getName(): string {
        return 'shadow';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M13 12h5" />   <path d="M13 15h4" />   <path d="M13 18h1" />   <path d="M13 9h4" />   <path d="M13 6h1" />
        SVG;
    }
}