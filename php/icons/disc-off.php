<?php
require_once(__DIR__ . '../Icon.php');

class IconDiscOff extends Icon {
    public static function getName(): string {
        return 'disc-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.044 16.04a9 9 0 0 0 -12.082 -12.085m-2.333 1.688a9 9 0 0 0 6.371 15.357c2.491 0 4.73 -1 6.36 -2.631" />   <path d="M11.298 11.288a1 1 0 1 0 1.402 1.427" />   <path d="M7 12c0 -1.38 .559 -2.629 1.462 -3.534m2.607 -1.38c.302 -.056 .613 -.086 .931 -.086" />   <path d="M12 17a4.985 4.985 0 0 0 3.551 -1.48m1.362 -2.587c.057 -.302 .087 -.614 .087 -.933" />   <path d="M3 3l18 18" />
        SVG;
    }
}