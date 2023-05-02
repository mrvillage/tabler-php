<?php
require_once(__DIR__ . '../Icon.php');

class IconPingPong extends Icon {
    public static function getName(): string {
        return 'ping-pong';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.718 20.713a7.64 7.64 0 0 1 -7.48 -12.755l.72 -.72a7.643 7.643 0 0 1 9.105 -1.283l2.387 -2.345a2.08 2.08 0 0 1 3.057 2.815l-.116 .126l-2.346 2.387a7.644 7.644 0 0 1 -1.052 8.864" />   <path d="M14 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M9.3 5.3l9.4 9.4" />
        SVG;
    }
}