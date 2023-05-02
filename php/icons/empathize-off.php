<?php
require_once(__DIR__ . '../Icon.php');

class IconEmpathizeOff extends Icon {
    public static function getName(): string {
        return 'empathize-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 8a2.5 2.5 0 1 0 -2.5 -2.5" />   <path d="M12.317 12.315l-.317 .317l-.728 -.727a3.088 3.088 0 1 0 -4.367 4.367l5.095 5.096l4.689 -4.69m1.324 -2.673a3.087 3.087 0 0 0 -3.021 -3.018" />   <path d="M3 3l18 18" />
        SVG;
    }
}