<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyAfghani extends Icon {
    public static function getName(): string {
        return 'currency-afghani';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 13h-3.5a3.5 3.5 0 1 1 3.5 -3.5v6.5h-7" />   <path d="M12 3v.01" />   <path d="M12 19v2" />
        SVG;
    }
}