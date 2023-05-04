<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBluetoothX extends Tabler\Icon {
    public static function getName(): string {
        return 'bluetooth-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 8l10 8l-5 4v-16l1 .802m0 6.396l-6 4.802" />   <path d="M16 6l4 4" />   <path d="M20 6l-4 4" />
        SVG;
    }
}