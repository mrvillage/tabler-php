<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyTenge extends Tabler\Icon {
    public static function getName(): string {
        return 'currency-tenge';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 5h12" />   <path d="M6 9h12" />   <path d="M12 9v10" />
        SVG;
    }
}