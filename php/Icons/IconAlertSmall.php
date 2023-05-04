<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAlertSmall extends \Tabler\Icon {
    public static function getName(): string {
        return 'alert-small';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 8v4" />   <path d="M12 16h.01" />
        SVG;
    }
}