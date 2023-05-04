<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconIroningOff extends Tabler\Icon {
    public static function getName(): string {
        return 'ironing-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 6h6.459a3 3 0 0 1 2.959 2.507l.577 3.464l.804 4.821l.007 .044m-2.806 1.164h-15a7 7 0 0 1 7 -7h1m4 0h4.8" />   <path d="M3 3l18 18" />
        SVG;
    }
}