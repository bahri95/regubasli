<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cryptosimple {
    // constructor method
    function __construct() {

    }

    // destructor method
    function __destruct() {

    }

    // version 1.2
    public function create_user_key($input) {
        $output = crc32($input);
        return abs($output);
    }

    public function do_encryption($input, $key) {
        if(!empty($key)) {
            $result = '';
            $mode = 'en';
            $key_len = strlen($key);
            // first encryption
            for($i = 0; $i < strlen($input); $i++) {
                $code = ord(substr($input, $i, 1));
                $chr_num = ord(substr($key, $i % $key_len, 1));
                if(32 <= $code && $code <= 126) {
                    $code -= $chr_num;
                    while($code < 32)
                        $code = $code - 32 + 126 + 1;
                }
                $result .= chr($code);
            }
            // second using base64
            $result = base64_encode($result);
            return $result;
        }else {
            return FALSE;
        }
    }

    public function do_decryption($input, $key) {
        if(!empty($key)) {
            $result = '';
            $mode = 'de';
            $key_len = strlen($key);
            // first decrypt using base64
            $input = base64_decode($input);
            // second decrypt using standard decryption
            for($i = 0; $i < strlen($input); $i++) {
                $code = ord(substr($input, $i, 1));
                $chr_num = ord(substr($key, $i % $key_len, 1));
                if(32 <= $code && $code <= 126) {
                    $code += $chr_num;
                    while(126 < $code)
                        $code = $code - 126 + 32 - 1;
                }
                $result .= chr($code);
            }
            return $result;
        }else {
            return FALSE;
        }
    }

}
?>