<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Uploader {

    // init variable

    private $file_temp;

    private $file_name;

    private $file_size;

    private $file_type;

    private $file_ext;

    private $new_width;

    private $new_height;

    private $error_flag = FALSE;

    public  $message = '';



    // constructor

    function __construct() {



    }



    // destructor

    function __destruct() {



    }



    // set file



    public function set_file($file) {

        if(isset($file['tmp_name']) AND !empty($file['tmp_name'])) {

            $this->file_temp = $file['tmp_name'];

            // filename

            $this->file_name = str_replace(' ', '_' , $file['name']);

            $this->file_name = $this->clean_file_name($this->file_name);

            // --

            $this->file_size = $file['size'];

            $this->file_type = $file['type'];

            $this->file_ext  = strtolower($this->get_extension());

        }else {

            $this->error_flag = TRUE;

            $this->message = 'Empty file...';

        }

    }



    public function set_rules($rules) {

        // allowed size

        $size = isset($rules['allowed_filesize']) ? abs($rules['allowed_filesize']) : '' ;

        if(!empty($size) AND ($this->file_size > $size)) {

            $this->error_flag = TRUE;

            $this->message = 'Not allowed file size';

        }

        // allowed extension

        $allowed = isset($rules['allowed_extension']) ? $rules['allowed_extension'] : array() ;

        $this->allowed_extension($allowed);

    }



    public function set_file_name($name) {

        $name = str_replace(' ', '_' , $name);

        $this->file_name = $name . '.' . $this->file_ext;

        $this->file_name = $this->clean_file_name($this->file_name);

    }



    public function get_file_name() {

        return $this->file_name;

    }



    public function upload_image($dir = "doc/temp/", $newwidth = FALSE,  $newheight = FALSE) {

        // default reject

        $reject = array('exe', 'php');

        if(in_array($this->file_ext, $reject)) {

            $this->error_flag = TRUE;

            $this->message = 'File .exe dan .php tidak diijinkan';

        }

        // upload

        $allowed_type = array('pjpeg', 'jpeg', 'jpg', 'png', 'gif');

        if(($this->error_flag == FALSE) AND in_array($this->file_ext, $allowed_type)) {

            // create folder

            $this->make_dir($dir);

            // upload

            if(is_dir($dir)) {

                // upload files

                $dest = $dir . $this->file_name;

                if(copy($this->file_temp, $dest)) {

                    list($width, $height) = getimagesize($dest);

                    // resize width

                    if(!$newwidth) {

                        $newwidth = $width;

                    }

                    // resize height

                    if(!$newheight) {

                        $newheight = $newwidth * $height / $width;

                        $newheight = ceil($newheight);

                    }

                    // Create thumbnails

                    switch($this->file_ext) {

                        case 'pjpeg':

                            $uploaded_img = imagecreatefromjpeg($dest);

                            $result_img = ImageCreateTrueColor($newwidth, $newheight);

                            imagecopyresampled($result_img, $uploaded_img, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

                            imagejpeg ($result_img, $dest);

                            return TRUE;

                        case 'jpeg':

                            $uploaded_img = imagecreatefromjpeg($dest);

                            $result_img = ImageCreateTrueColor($newwidth, $newheight);

                            imagecopyresampled($result_img, $uploaded_img, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

                            imagejpeg ($result_img, $dest);

                            return TRUE;

                        case 'jpg':

                            $uploaded_img = imagecreatefromjpeg($dest);

                            $result_img = ImageCreateTrueColor($newwidth, $newheight);

                            imagecopyresampled($result_img, $uploaded_img, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

                            imagejpeg ($result_img, $dest);

                            return TRUE;

                        case 'png':

                            $uploaded_img = imagecreatefrompng($dest);

                            $result_img = ImageCreateTrueColor($newwidth, $newheight);

                            imagecopyresampled($result_img, $uploaded_img, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

                            imagepng ($result_img, $dest);

                            return TRUE;

                        case 'gif':

                            $uploaded_img = imagecreatefromgif($dest);

                            $result_img = ImageCreateTrueColor($newwidth, $newheight);

                            imagecopyresampled($result_img, $uploaded_img, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

                            imagegif ($result_img, $dest);

                            return TRUE;

                        default:

                            $this->error_flag = TRUE;

                            $this->message = "Type gambar tidak diijinkan";

                            return FALSE;

                    }

                }else {

                    $this->message = "File tidak berhasil di upload";

                    return FALSE;

                }

            }else {

                $this->message = "Direktori tidak ditemukan";

                return FALSE;

            }

        }else {

            $this->message = "File / jenis / ukuran gambar tidak diijinkan";

            return FALSE;

        }

    }



    public function upload_file($dir = "doc/temp/") {

        // default reject

        $reject = array('exe', 'php');

        if(in_array($this->file_ext, $reject)) {

            $this->error_flag = TRUE;

            $this->message = 'File .exe dan .php tidak diijinkan';

        }

        // processing

        if($this->error_flag == FALSE) {

            // checking folder

            $this->make_dir($dir);

            // upload files

            if(is_dir($dir)) {

                $dest = $dir . $this->file_name;

                if(copy($this->file_temp, $dest)) {

                    return TRUE;

                }else {

                    $this->message = "File tidak berhasil di upload";

                    return FALSE;

                }

            }else {

                $this->message = "Direktori tidak ditemukan";

                return FALSE;

            }

        }

    }



    // private function

    private function clean_file_name($filename) {

        $bad = array("<!--",

                "-->",

                "'",

                "<",

                ">",

                '"',

                '&',

                '$',

                '=',

                ';',

                '?',

                '/',

                "%20",

                "%22",

                "%3c",		// <

                "%253c", 	// <

                "%3e", 		// >

                "%0e", 		// >

                "%28", 		// (

                "%29", 		// )

                "%2528", 	// (

                "%26", 		// &

                "%24", 		// $

                "%3f", 		// ?

                "%3b", 		// ;

                "%3d"		// =

        );



        foreach ($bad as $val) {

            $filename = str_replace($val, '', $filename);

        }

        return $filename;

    }



    private function allowed_extension($allowed_extension) {

        // check extension

        if (!in_array($this->file_ext, $allowed_extension) AND !empty($allowed_extension)) {

            $this->error_flag = TRUE;

            $this->message = 'Jenis file tidak diijinkan';

        }

    }



    private function get_extension() {

        $x = explode('.', $this->file_name);

        $x = end($x);

        return strtolower($x);

    }



    // direktori manajemen



    public function make_dir($dir) {

        $dir = explode('/', $dir);

        $tmp = "";

        foreach($dir as $rec) {

            if(!empty($rec)) {

                $dest = $rec . '/';

                $tmp .= $dest;

                if(!is_dir($tmp)) {

                    mkdir($tmp, 0755);

                }

            }

        }

    }



    public function remove_dir($dir) {

        if(is_dir($dir)) {

            $folder = opendir($dir);

            while($file = readdir($folder)) {

                if ($file == '.' || $file == '..') {

                    continue;

                }



                if(is_dir($dir.'/'.$file)) {

                    $this->remove_dir($dir.'/'.$file);

                }

                else {

                    unlink($dir.'/'.$file);

                }



            }

            closedir($folder);

            rmdir($dir);

        }

        return TRUE;

    }



}

?>