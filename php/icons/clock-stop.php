<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconClockStop extends Tabler\Icon {
    public static function getName(): string {
        return 'clock-stop';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 12a9 9 0 1 0 -9 9" />   <path d="M12 7v5l1 1" />   <path d="M16 16h6v6h-6z" />
        SVG;
    }
}