<?php
require_once(__DIR__ . '/../Icon.php');

class IconTagsOff extends Icon {
    public static function getName(): string {
        return 'tags-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 6h-.975a2.025 2.025 0 0 0 -2.025 2.025v2.834c0 .537 .213 1.052 .593 1.432l6.116 6.116a2.025 2.025 0 0 0 2.864 0l2.834 -2.834c.028 -.028 .055 -.056 .08 -.085" />   <path d="M17.573 18.407l.418 -.418m2 -2l.419 -.419a2.025 2.025 0 0 0 0 -2.864l-7.117 -7.116" />   <path d="M6 9h-.01" />   <path d="M3 3l18 18" />
        SVG;
    }
}