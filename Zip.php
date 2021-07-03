<?php


class Zip
{
    public function uploads($files)
    {
        $zip = new ZipArchive();
        $zip_name = 'uploads/' . substr(sha1(md5(rand(10000, 999999) . time())), 0, 16) . '.zip';
        if ($zip->open($zip_name, ZipArchive::CREATE) !== TRUE) {
            return ['success' => false, 'message' => 'Zip Creation Failed', 'type' => 'danger'];
        }
        if (is_array($files['tmp_name'])) {
            foreach ($files['tmp_name'] as $k => $value) {
                if ($value == '') {
                    continue;
                }
                $zip->addFromString($files['name'][$k], file_get_contents($value));
            }
        } elseif ($files['tmp_name'] != '') {
            $zip->addFromString($files['name'], file_get_contents($files['tmp_name']));
        }
        $zip->close();
        return ['success' => true, 'message' => 'Success', 'type' => 'success', 'data' => $zip_name];
    }
}