<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceMobileQuestion extends \Tabler\Icon {
    public static function getName(): string {
        return 'device-mobile-question';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 21h-7a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v6" />   <path d="M19 22v.01" />   <path d="M19 19a2.003 2.003 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />   <path d="M11 4h2" />   <path d="M12 17v.01" />
        SVG;
    }
}