<?php

// namespace Firebase\JWT;
// use Firebase\JWT\JWT;
// use Firebase\JWT\Key;


namespace App\Controllers;


require_once('php-jwt-main/src/JWT.php');
require_once('php-jwt-main/src/Key.php');

use Firebase\JWT\JWT;
use Firebase\JWT\Key;



class Logged extends BaseController
{



    public function logged()
    {



 $publicKey = <<<EOD
-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAscGkxL+uEsJR6SwSXx9S
+8IgFCMol863cf+fg+oNWIN1iXQYBAUDRA3gOb2rjow8Mj9F5rX3A3C0L64DI2Gi
QXCCjsCTJ+IEWPMu/QlscmztsRv1NPiRBIMFn4mdAhXOcmMwP+PvvrW/wNMC4vuJ
xa7Qvbjga26+x4CvDbBzc/5J2ajcDafCXnP3ObswN6gPeMBqSbqIBnLFcke++NMg
CUEerPwx0eB+oDHIl4X7HJjCWQ3u/AcewsWdNvSrkfohxfYCGEQa787ysc5IcNwX
j8EK8cH4fg/tLJhay5eKiB8F8WfArTip7nHiJcKRo/OzcIJnv2z1K2cvrAoT58OD
PQIDAQAB
-----END PUBLIC KEY-----
EOD;
        echo 'logged';

        $jwt = $this->request->getGet('jwt');

        $decoded = JWT::decode($jwt, new Key($publicKey, 'RS256'));
		$decoded_array = (array) $decoded;

		echo "</br>";

		echo "Decode:\n" . print_r($decoded_array, true) . "\n";

		echo "</br>";


         // $jwt = $this->request->getGet('jwt');
		
		echo $jwt;
    }
}
