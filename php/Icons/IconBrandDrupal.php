<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandDrupal extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-drupal';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 2c0 4.308 -7 6 -7 12a7 7 0 0 0 14 0c0 -6 -7 -7.697 -7 -12z" />   <path d="M12 11.33a65.753 65.753 0 0 1 -2.012 2.023c-1 .957 -1.988 1.967 -1.988 3.647c0 2.17 1.79 4 4 4s4 -1.827 4 -4c0 -1.676 -.989 -2.685 -1.983 -3.642c-.42 -.404 -2.259 -2.357 -5.517 -5.858l3.5 3.83z" />
        SVG;
    }
}