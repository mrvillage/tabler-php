<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCellSignal5 extends Tabler\Icon {
    public static function getName(): string {
        return 'cell-signal-5';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 20h-15.269a.731 .731 0 0 1 -.517 -1.249l14.537 -14.537a.731 .731 0 0 1 1.249 .517v15.269z" />   <path d="M16 7v13" />   <path d="M12 20v-9" />   <path d="M8 20v-5" />
        SVG;
    }
}