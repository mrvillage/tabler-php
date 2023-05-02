<?php
require_once('../Icon.php');

class IconAlertSmall extends Icon {
    public static function getName(): string {
        return 'alert-small';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 8v4" />   <path d="M12 16h.01" />
        SVG;
    }
}