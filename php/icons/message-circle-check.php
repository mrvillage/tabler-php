<?php
require_once(__DIR__ . '../Icon.php');

class IconMessageCircleCheck extends Icon {
    public static function getName(): string {
        return 'message-circle-check';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11.042 19.933a9.798 9.798 0 0 1 -3.342 -.933l-4.7 1l1.3 -3.9c-2.324 -3.437 -1.426 -7.872 2.1 -10.374c3.526 -2.501 8.59 -2.296 11.845 .48c2.127 1.814 3.052 4.36 2.694 6.808" />   <path d="M15 19l2 2l4 -4" />
        SVG;
    }
}