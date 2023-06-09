<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandMastercard extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-mastercard';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M12 9.765a3 3 0 1 0 0 4.47" />   <path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
        SVG;
    }
}