<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandGoogleFit extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-google-fit';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 9.314l-2.343 -2.344a3.314 3.314 0 0 0 -4.686 4.686l2.343 2.344l4.686 4.686l7.03 -7.03a3.314 3.314 0 0 0 -4.687 -4.685l-7.03 7.029" />
        SVG;
    }
}