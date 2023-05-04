<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLasso extends \Tabler\Icon {
    public static function getName(): string {
        return 'lasso';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4.028 13.252c-.657 -.972 -1.028 -2.078 -1.028 -3.252c0 -3.866 4.03 -7 9 -7s9 3.134 9 7s-4.03 7 -9 7c-1.913 0 -3.686 -.464 -5.144 -1.255" />   <path d="M5 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M5 17c0 1.42 .316 2.805 1 4" />
        SVG;
    }
}