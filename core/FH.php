<?php
namespace Core;
use Core\Seession;
use Core\H;

class FH
{
    public static function inputBlock($type, $label, $name, $value='', $inputContainer=[], $labelAttrs=[], $inputAttrs=[], $divAttrs=[]) {
        $divString = self::stringifyAttrs($divAttrs);
        $labelString = self::stringifyAttrs($labelAttrs);
        $inputString = self::stringifyAttrs($inputAttrs);
        $inputContainerString = self::stringifyAttrs($inputContainer);
        $html = '<div' . $divString . '>';
        $html .= '<label' .$labelString.' for="'.$name.'">'.$label.'</label>';
        $html .= '<div' . $inputContainerString . '>';
        $html .= '<input type="'.$type.'" id="'.$name.'" name="'.$name.'" value="'.$value.'"'.$inputString.'/>';
        $html .= '</div>';
        $html .= '</div>';
        return $html;
    }

    public static function iconInputBlock($type, $label, $name, $value='', $inputContainer=[], $iconAttrs=[], $inputAttrs=[], $divAttrs=[]) {
        $divString = self::stringifyAttrs($divAttrs);
        $iconString = self::stringifyAttrs($iconAttrs);
        $inputString = self::stringifyAttrs($inputAttrs);
        $inputContainerString = self::stringifyAttrs($inputContainer);
        $html = '<div' . $divString . '>';
        $html .= '<div' . $inputContainerString . '>';
        $html .= '<span' .$iconString.'></span>';
        $html .= '<input type="'.$type.'" id="'.$name.'" name="'.$name.'" value="'.$value.'"'.$inputString.'/>';
        $html .= '</div>';
        $html .= '</div>';
        return $html;
    }

    public static function fileInputBlock($type, $label, $name, $trigger='text=Upload',$inputAttrs=[], $divAttrs=[]) {
        // $trigger can either be icon or text or button ---= buttontake 3 value e.g button=upload=danger //--the third value is the button type
        $divString = self::stringifyAttrs($divAttrs);
        $inputString = self::stringifyAttrs($inputAttrs);
        $leadingText = '';
        $buttonType = '';
        $trig = explode('=', $trigger);
        $buttonType = ($trig[0] == 'button' && isset($trig[2]))? $trig[2]: 'default';
        $iconRatio = ($trig[0] == 'icon' && isset($trig[2]))? '; ratio: '.$trig[2]: '1';
        if ($trig[0] == 'text') {
            $triggerLine = '<span class="uk-link">'.$trig[1].'</span>';
        }elseif ($trig[0] == 'icon') {
            $leadingText = '<span class="uk-text-middle uk-text-muted">'.$label.'</span>';
            $triggerLine = '<span class="uk-link uk-icon" uk-icon="icon: '.$trig[1]. $iconRatio.'"></span>';
        }elseif ($trig[0] == 'button') {
            $triggerLine = '<button class="uk-button uk-button-'.$buttonType.'" type="button" tabindex="-1">'.$trig[1].'</button>';
        }

        $html = '<div' . $divString . '>';
        $html .= $leadingText;
        $html .= '<div uk-form-custom>';
        $html .= '<input '.$inputString.' type="'.$type.'" id="'.str_replace("[]","",$name) .'" name="'.$name.'" value=""/>';
        $html .= $triggerLine;
        $html .= '</div>';
        $html .= '</div>';
        return $html;
    }
    
    public static function selectBlock($label, $name, $value=[], $inputContainer=[], $labelAttrs=[], $inputAttrs=[], $divAttrs=[], $is_selected='', $default=[]) { 
        $divString = self::stringifyAttrs($divAttrs);
        $labelString = self::stringifyAttrs($labelAttrs);
        $inputString = self::stringifyAttrs($inputAttrs);
        $selectValue = self::fillSelectOptions($value, $is_selected, $default);
        $inputContainerString = self::stringifyAttrs($inputContainer);
        $html = '<div' . $divString . '>';
        $html .= '<label' .$labelString.' for="'.$name.'">'.$label.'</label>';
        $html .= '<div' . $inputContainerString . '>';
        $html .= '<select id="'.$name.'" name="'.$name.'"' . $inputString . '>';
        $html .= $selectValue;
        $html .= '</select>';
        $html .= '</div>';
        $html .= '</div>';
        return $html;
    }
    
    public static function textAreaBlock($label, $name, $value='', $labelAttrs=[], $inputAttrs=[], $divAttrs=[]) {
        $divString = self::stringifyAttrs($divAttrs);
        $labelString = self::stringifyAttrs($labelAttrs);
        $inputString = self::stringifyAttrs($inputAttrs);
        $html = '<div' . $divString . '>';
        $html .= '<label' .$labelString.' for="'.$name.'">'.$label.'</label>';
        $html .= '<textarea id="'.$name.'" name="'.$name.'" '.$inputString.'>'.$value.'</textarea>';
        $html .= '</div>';
        return $html;
    }

    public static function submitTag($buttonText, $inputAttrs=[]) {
        $inputString = self::stringifyAttrs($inputAttrs);
        $html = '<input type="submit" value="'.$buttonText.'"'.$inputString.' />';
        return $html;
    }

    public static function submitBlock($buttonText, $inputAttrs=[], $divAttrs=[]) {
        $divString = self::stringifyAttrs($divAttrs);
        $inputString = self::stringifyAttrs($inputAttrs);
        $html = '<div'.$divString.'>';
        $html .= '<input type="submit" value="'.$buttonText.'"'.$inputString.' />';
        $html .= '</div>';
        return $html;
    }

    // checkbox
    public static function checkboxBlock($label, $name, $checked=false, $inputAttrs=[], $divAttrs=[]){
        $divString = self::stringifyAttrs($divAttrs);
        $inputString = self::stringifyAttrs($inputAttrs);
        $checkString = ($checked)? ' checked="checked"' : '';
        $html = '<div'.$divString.'>';
        $html .= '<label for="'.$name.'">'.$label.' <input type="checkbox" id="'.$name.'" name="'.$name.'" value="on"'.$checkString.$inputString.'></label>';
        $html .= '</div>';
        return $html;
    }


    // form elements

    public static function stringifyAttrs($attrs) {
        $string = '';
        foreach ($attrs as $key => $val) {
            $string .= ' ' . $key . '="' . $val . '"';
        }
        return $string;
    }

    public static function fillSelectOptions($attrs, $is_selected, $default) {
        $string = (isset($default)&& !empty($default))? '<option value="'.array_keys($default)[0].'">'.array_values($default)[0].'</option>' : '<option value="">Select An Option</option>';
        foreach ($attrs as $key => $val) {
            $selected = ($val == $is_selected)? ' selected="selected" ': '';
            $string .= '<option '.$selected.' value="'.$key.'">' . $val . '</option>';
        }
        return $string;
    }

    public static function generateToken(){
        $token = base64_encode(openssl_random_pseudo_bytes(32));
        Session::set('csrf_token', $token);
        return $token;
    }

    public static function checkToken($token) {
        return (Session::exists('csrf_token') && Session::get('csrf_token') == $token);
    }

    public static function csrfInput(){
        return '<input type="hidden" name="csrf_token" id="csrf_token" value="'.self::generateToken().'" />';
    }
        
    public static function sanitize($dirty){
        return htmlentities($dirty, ENT_QUOTES, 'UTF-8');
    }
        
    public static function deSanitize($dirty){
        return html_entity_decode($dirty, ENT_QUOTES, 'UTF-8');
    }
        
    public static function posted_values($post) {
        $clean_ary = [];
        foreach ($post as $key => $value) {
            $clean_ary[$key] = self::sanitize($value);
        }
        return $clean_ary;
    }

    public static function displayErrors($errors){
        $hasErrors = (!empty($errors))? ' has-errors' : '';
        $html = '<div class="form-errors"><ul class="uk-background-danger'.$hasErrors.'">';
        foreach ($errors as $field => $error ) {
            $html .= '<li class="uk-text-danger">'.$error.'</.li>';
            $html .= '<script>jQuery("document").ready(function(){jQuery("#'.$field.'").parent().closest("div").addClass("has-error");});</script>';
        }
        $html .= '</ul></div>';
        return $html;
    }

}