<?php
require_once(__DIR__ . '../Icon.php');

class IconTallymark3 extends Icon {
    public static function getName(): string {
        return 'tallymark-3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 5l0 14" />   <path d="M12 5l0 14" />   <path d="M16 5l0 14" />
        SVG;
    }
}