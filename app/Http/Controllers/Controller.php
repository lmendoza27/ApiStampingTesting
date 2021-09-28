<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

public function get_api() {
    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.stamping.io/setblockchain.php?sha256=49b07550ee5b478b83dab9e7e366fcc0fd7a1a4011cd76940ca23eed9b8e497e&data=%7B%2522col1%2522:%2522Monchi%2522,%2522col2%2522:%2522value2%2522,%2522nonce%2522:%25220xcb7007a07779331955dc0978b7efd0dde8c0029b1e63789010aa4bd1c0f50d48%2522%7D&userid=9ItzsKQuiHSPXFXRDETEZ3h6F7G3',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer eyJhbGciOiAiRUNEU0EiLCJ0eXAiOiAiRVRIU0lHTiJ9.eyJpYXQiOjE2MzI3MDg2NDAsImV4cCI6MTYzMjcxMjI0MCwiZGF0YSI6IHsiaWQiOiJmN2JhODVlMjZhNWJlNzk2M2MyNmRiMDE3MTMxODBjN2NjM2Y0ZDEwODUyNmNlN2RkYzA4ODRjMTY5YyIsInB1YktleSI6ICIweGE2YTY4RmY3RjI2MDMxNERBRkEwNzc4OTRBRDc5OTE0ZEZhZDM3RTAifX0=.MHhmODdhODA4MDgzODk1NDQwOTRhNmE2OGZmN2YyNjAzMTRkYWZhMDc3ODk0YWQ3OTkxNGRmYWQzN2UwODA5NzMxMzYzMzMyMzczMDM4MzYzNDMwMzEzNjMzMzEzMzM5MzIzODMwMzczODM1MzU4MzEzY2FjNWEwMjViMDYwZGRhMzczNTZhNGU5ZjE1YTlmZjk3MjFiYzk1MzZiOTY4MmQ0MzVkY2NmMmEzYTI4NDM0N2IxMjQ1Y2EwMzlkYmQ5NWQ5Mjg5ZGVmOGJjMmZjNDFjZGM0MDcxZjViYTczNjJjNWVmZjRkNzJjNTQwODZiYmEyMjQ4ZDQzNg=='
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
}

}
