<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTentOff extends Tabler\Icon {
    public static function getName(): string {
        return 'tent-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 14l4 6h5m-2.863 -6.868l-5.137 -9.132l-1.44 2.559m-1.44 2.563l-6.12 10.878h6l4 -6" />   <path d="M3 3l18 18" />
        SVG;
    }
}