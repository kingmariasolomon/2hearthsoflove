<?php
namespace Core;

class Session  
{
    public static function exists($name) {
        return (isset($_SESSION[$name]))? true : false;
    }

    public static function get($name) {
        return $_SESSION[$name];
    }

    public static function set($name, $value) {
        return $_SESSION[$name] = $value;
    }

    public static function delete($name) {
        if(self::exists($name)) {
            unset($_SESSION[$name]);
        }
    }

    public static function uagent_no_version() {
        $uagent = $_SERVER['HTTP_USER_AGENT'];
        $regex = '/\/[a-zA_Z0-9]+/';
        $newString = preg_replace($regex, '', $uagent);
        return $newString;
    }

    /**
     * Adds a session alert message
     * @method addMsg
     * @param string $type can be info, success, warning, or danger
     * @param string $msg the message you want to display in the alert
     */
    public static function addMsg($type, $msg) {
        $sessionName = 'uk-alert-' . $type;
        self::set($sessionName, $msg);
    }

    public static function displayMsg(){
        $alerts = ['uk-alert-primary', 'uk-alert-success', 'uk-alert-warning', 'uk-alert-danger'];
        $html = '';
        foreach ($alerts as $alert) {
            if(self::exists($alert)){
                $html .= '<div class="'.$alert.'" uk-alert>';
                $html .= '<a class="uk-alert-close" uk-close></a>';
                $html .= self::get($alert);
                $html .= '</div>';
                self::delete($alert);
            }
        }
        return $html;
    }
}
