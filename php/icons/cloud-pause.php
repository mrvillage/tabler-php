<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCloudPause extends Tabler\Icon {
    public static function getName(): string {
        return 'cloud-pause';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 18.004h-6.343c-2.572 -.004 -4.657 -2.011 -4.657 -4.487c0 -2.475 2.085 -4.482 4.657 -4.482c.393 -1.762 1.794 -3.2 3.675 -3.773c1.88 -.572 3.956 -.193 5.444 1c1.488 1.19 2.162 3.007 1.77 4.769h.99c1.406 0 2.617 .843 3.16 2.055" />   <path d="M17 17v5" />   <path d="M21 17v5" />
        SVG;
    }
}