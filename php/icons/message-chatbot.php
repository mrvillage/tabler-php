<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMessageChatbot extends \Tabler\Icon {
    public static function getName(): string {
        return 'message-chatbot';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />   <path d="M9.5 9h.01" />   <path d="M14.5 9h.01" />   <path d="M9.5 13a3.5 3.5 0 0 0 5 0" />
        SVG;
    }
}