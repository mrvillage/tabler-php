<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconExposure extends \Tabler\Icon {
    public static function getName(): string {
        return 'exposure';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />   <path d="M4.6 19.4l14.8 -14.8" />   <path d="M7 9h4m-2 -2v4" />   <path d="M13 16l4 0" />
        SVG;
    }
}