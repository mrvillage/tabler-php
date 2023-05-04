<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWorldHeart extends \Tabler\Icon {
    public static function getName(): string {
        return 'world-heart';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 12a9 9 0 1 0 -9.679 8.974" />   <path d="M3.6 9h16.8" />   <path d="M3.6 15h6.9" />   <path d="M11.5 3a17 17 0 0 0 0 18" />   <path d="M12.5 3a16.983 16.983 0 0 1 2.556 8.136" />   <path d="M18 22l3.35 -3.284a2.143 2.143 0 0 0 .005 -3.071a2.242 2.242 0 0 0 -3.129 -.006l-.224 .22l-.223 -.22a2.242 2.242 0 0 0 -3.128 -.006a2.143 2.143 0 0 0 -.006 3.071l3.355 3.296z" />
        SVG;
    }
}