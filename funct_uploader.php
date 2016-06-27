<?php

/**
 * @param $files
 * @return array
 * @throws Exception
 */
function filesArray($files)
{

    $filesArray = array();
    $countFiles = count($files['name']); //считаем кол-во файлов
    for ($i = 0; $i < $countFiles; $i++) {
        foreach ($files as $key => $value) {
            $filesArray[$i][$key] = $files[$key][$i];
        }
    }

    return $filesArray;
}

/**
 * @param $fileSize
 * @param $maxSize
 * @return bool
 * @throws Exception
 */
function checkSize($fileSize, $maxSize)
{
    if ($fileSize == 0) {
        throw new Exception("Пустой файл");
    }

    if ($fileSize > $maxSize) {
        throw new Exception("больше допустимого размера");
    }

    return true;
}

/**
 * @param $fileType
 * @return mixed
 * @throws Exception
 */
function checkMimeType($fileType)
{

    $types = array(
        'png' => 'image/png'
    );

    if (!$ext = array_search($fileType, $types)) {
        throw new Exception("Недопустимый тип файла");
    }

    return $ext;
}

/**
 * @param $name
 * @param $ext
 * @return string
 */
function generataName($name, $ext){
    return $name = md5($name.microtime()).".".$ext;
}