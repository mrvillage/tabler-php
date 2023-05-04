<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandInertia extends Icon {
    public static function getName(): string {
        return 'brand-inertia';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.5 8l4 4l-4 4h4.5l4 -4l-4 -4z" />   <path d="M3.5 8l4 4l-4 4h4.5l4 -4l-4 -4z" />
        SVG;
    }
}