<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyRufiyaa extends \Tabler\Icon {
    public static function getName(): string {
        return 'currency-rufiyaa';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 16h.01" />   <path d="M4 16c9.5 -4 11.5 -8 14 -9" />   <path d="M12 8l5 3" />
        SVG;
    }
}