<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWindmillOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'windmill-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15.061 11.06c1.18 -.824 1.939 -2.11 1.939 -3.56c0 -2.49 -2.24 -4.5 -5 -4.5v5" />   <path d="M12 12c0 2.76 2.01 5 4.5 5c.166 0 .33 -.01 .49 -.03m2.624 -1.36c.856 -.91 1.386 -2.19 1.386 -3.61h-5" />   <path d="M12 12c-2.76 0 -5 2.01 -5 4.5s2.24 4.5 5 4.5v-9z" />   <path d="M6.981 7.033c-2.244 .285 -3.981 2.402 -3.981 4.967h9" />   <path d="M3 3l18 18" />
        SVG;
    }
}