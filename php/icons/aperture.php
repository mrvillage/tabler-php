<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAperture extends Tabler\Icon {
    public static function getName(): string {
        return 'aperture';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M3.6 15h10.55" />   <path d="M6.551 4.938l3.26 10.034" />   <path d="M17.032 4.636l-8.535 6.201" />   <path d="M20.559 14.51l-8.535 -6.201" />   <path d="M12.257 20.916l3.261 -10.034" />
        SVG;
    }
}