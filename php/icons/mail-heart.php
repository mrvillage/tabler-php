<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMailHeart extends Icon {
    public static function getName(): string {
        return 'mail-heart';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10.5 19h-5.5a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v4" />   <path d="M3 7l9 6l2.983 -1.989l6.017 -4.011" />   <path d="M18 22l3.35 -3.284a2.143 2.143 0 0 0 .005 -3.071a2.242 2.242 0 0 0 -3.129 -.006l-.224 .22l-.223 -.22a2.242 2.242 0 0 0 -3.128 -.006a2.143 2.143 0 0 0 -.006 3.071l3.355 3.296z" />
        SVG;
    }
}