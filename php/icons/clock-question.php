<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconClockQuestion extends Icon {
    public static function getName(): string {
        return 'clock-question';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.975 11.33a9 9 0 1 0 -5.717 9.06" />   <path d="M12 7v5l2 2" />   <path d="M19 22v.01" />   <path d="M19 19a2.003 2.003 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />
        SVG;
    }
}