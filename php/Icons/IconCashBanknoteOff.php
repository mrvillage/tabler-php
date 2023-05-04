<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCashBanknoteOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'cash-banknote-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9.88 9.878a3 3 0 1 0 4.242 4.243m.58 -3.425a3.012 3.012 0 0 0 -1.412 -1.405" />   <path d="M10 6h9a2 2 0 0 1 2 2v8c0 .294 -.064 .574 -.178 .825m-2.822 1.175h-13a2 2 0 0 1 -2 -2v-8a2 2 0 0 1 2 -2h1" />   <path d="M18 12l.01 0" />   <path d="M6 12l.01 0" />   <path d="M3 3l18 18" />
        SVG;
    }
}