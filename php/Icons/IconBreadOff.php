<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBreadOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'bread-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18.415 18.414a2 2 0 0 1 -1.415 .586h-10a2 2 0 0 1 -2 -2v-6.764a3 3 0 0 1 .435 -4.795m3.565 -.441h8a3 3 0 0 1 2 5.235v4.765" />   <path d="M3 3l18 18" />
        SVG;
    }
}