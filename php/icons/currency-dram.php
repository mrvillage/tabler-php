<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyDram extends Icon {
    public static function getName(): string {
        return 'currency-dram';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 10a6 6 0 1 1 12 0v10" />   <path d="M12 16h8" />   <path d="M12 12h8" />
        SVG;
    }
}