<?php
const DS = DIRECTORY_SEPARATOR;

spl_autoload_register(function ($class_name) {
    $root = dirname(__FILE__);
    $parse_class = explode('\\', $class_name);
    $lenth = count($parse_class);
    $file_path = $root . DS;
        for ($i = 0; $i < $lenth; $i++) {
            $file_path .= $parse_class[$i];
            if ($i < $lenth - 1){
                $file_path .= DS;
            }
        }
        $file_path .= '.php';
        if (file_exists($file_path)) {
            require_once ($file_path);
        } else {
            throw new Exception('Файл не найден: ' . $class_name . '.php'. '. Путь к файлу: ' . $file_path);
        }
}, true);