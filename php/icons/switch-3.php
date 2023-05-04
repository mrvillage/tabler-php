<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSwitch3 extends \Tabler\Icon {
    public static function getName(): string {
        return 'switch-3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 17h2.397a5 5 0 0 0 4.096 -2.133l.177 -.253m3.66 -5.227l.177 -.254a5 5 0 0 1 4.096 -2.133h3.397" />   <path d="M18 4l3 3l-3 3" />   <path d="M3 7h2.397a5 5 0 0 1 4.096 2.133l4.014 5.734a5 5 0 0 0 4.096 2.133h3.397" />   <path d="M18 20l3 -3l-3 -3" />
        SVG;
    }
}