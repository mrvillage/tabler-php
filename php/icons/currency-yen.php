<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyYen extends \Tabler\Icon {
    public static function getName(): string {
        return 'currency-yen';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 19v-7l-5 -7m10 0l-5 7" />   <path d="M8 17l8 0" />   <path d="M8 13l8 0" />
        SVG;
    }
}