<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLassoOff extends Tabler\Icon {
    public static function getName(): string {
        return 'lasso-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4.028 13.252c-.657 -.972 -1.028 -2.078 -1.028 -3.252c0 -1.804 .878 -3.449 2.319 -4.69m2.49 -1.506a11.066 11.066 0 0 1 4.191 -.804c4.97 0 9 3.134 9 7c0 1.799 -.873 3.44 -2.307 4.68m-2.503 1.517a11.066 11.066 0 0 1 -4.19 .803c-1.913 0 -3.686 -.464 -5.144 -1.255" />   <path d="M5 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M5 17c0 1.42 .316 2.805 1 4" />   <path d="M3 3l18 18" />
        SVG;
    }
}