<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandMantine extends Icon {
    public static function getName(): string {
        return 'brand-mantine';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M11 16c1.22 -.912 2 -2.36 2 -4a5.01 5.01 0 0 0 -2 -4" />   <path d="M14 9h-2" />   <path d="M14 15h-2" />   <path d="M10 12h.01" />
        SVG;
    }
}