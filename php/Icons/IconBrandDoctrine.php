<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandDoctrine extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-doctrine';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 14m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />   <path d="M9 14h6" />   <path d="M12 11l3 3l-3 3" />   <path d="M10 3l6.9 6" />
        SVG;
    }
}