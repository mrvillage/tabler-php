<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandPaypay extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-paypay';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6.375 21l3.938 -13.838" />   <path d="M3 6c16.731 0 21.231 9.881 4.5 11" />   <path d="M21 19v-14a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2 -2z" />
        SVG;
    }
}