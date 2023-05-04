<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDiscountOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'discount-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 15l3 -3m2 -2l1 -1" />   <path d="M9.148 9.145a.498 .498 0 0 0 .352 .855a.5 .5 0 0 0 .35 -.142" />   <path d="M14.148 14.145a.498 .498 0 0 0 .352 .855a.5 .5 0 0 0 .35 -.142" />   <path d="M5.641 5.631a9 9 0 1 0 12.719 12.738m1.68 -2.318a9 9 0 0 0 -12.074 -12.098" />   <path d="M3 3l18 18" />
        SVG;
    }
}