<?php

class Helpers {
    // Helper Function
    public static function fileUploader($file, $folder){
        if(isset($file)){
            $fileName = time().'.'.$file->extension();
            $file->move(public_path("storage/$folder"), $fileName);
        } else {
            $fileName = null;
        }
        return $fileName;
    }
}

?>