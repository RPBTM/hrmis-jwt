<?php

// namespace Firebase\JWT;
// use Firebase\JWT\JWT;
// use Firebase\JWT\Key;


namespace App\Controllers;


require_once('php-jwt-main/src/JWT.php');
require_once('php-jwt-main/src/Key.php');

use Firebase\JWT\JWT;
use Firebase\JWT\Key;



class Home extends BaseController
{
    public function index()

    {


$privateKey = <<<EOD
-----BEGIN RSA PRIVATE KEY-----
MIIEowIBAAKCAQEAscGkxL+uEsJR6SwSXx9S+8IgFCMol863cf+fg+oNWIN1iXQY
BAUDRA3gOb2rjow8Mj9F5rX3A3C0L64DI2GiQXCCjsCTJ+IEWPMu/QlscmztsRv1
NPiRBIMFn4mdAhXOcmMwP+PvvrW/wNMC4vuJxa7Qvbjga26+x4CvDbBzc/5J2ajc
DafCXnP3ObswN6gPeMBqSbqIBnLFcke++NMgCUEerPwx0eB+oDHIl4X7HJjCWQ3u
/AcewsWdNvSrkfohxfYCGEQa787ysc5IcNwXj8EK8cH4fg/tLJhay5eKiB8F8WfA
rTip7nHiJcKRo/OzcIJnv2z1K2cvrAoT58ODPQIDAQABAoIBAQCogTbexA4R/l+D
uKGZxqn1uqqKLGIYtn8z8+yVMlSAae4L5R+2/8F+y+CZG/H7aXjO8Sgkcq68diR5
Zm3XJoCXpD4/cNKO5jTU1YLfoAVL23Lfh+9EzbU7H7E+8UcDaQSRbvGYP01P7h7e
famo3mZWHUgH8a/cZ9k2agiH45MuinK3px+yMvpiCzxakvCcn6AiaXhgeaxgibNV
shVcLQwzcAYPHgz/qpiyntnpBBfBderqvDl2o1y8vJB/54bcCtTMZNPW/C/78vyt
lgsr1YAjHlszo7C7JTQEHE6SVetcSstvMaSvYjoqpLGVJRB2ocUBB673ZZajD6UR
qhZIR+TJAoGBAPCt9tYfvRTxrd73Kw0pJwRtx0OWAdMHVBcWTiN93iGIsva6pIVf
aYa178+CPfjyKD6TRn7+GBVzROH3h7kkBp3FzSVsXp/vZEbn4qLsMQJU0HkMnaNq
spAqso13ZLqVn+a+s0Xi+wphAaQ2UJId2/hl4n56+/qXsn46QUG4c8SzAoGBAL0S
TffQlUUxWOVL50JeAc+B58I9mTi/5oAk+64HyoqkzLfLS29OVAYTrjAA+YPWI/OL
/pZozcCUng6jw3PzqNzBKh84iueH7LVL/5qZV833C7UNdGt/L6TZi/5ezZPErrVW
ofhb0/rL+FJVUESeyGBiPDlo4dO3bCtFPEHi1vBPAoGAYV7gKAy7IIgOQdBZeH+X
q3EGVs+PeWLToGuDvVQk1AhL7wnfmZ3aQYfFt3wHunmt0nMe6C3AbJ0v1wOfw0VR
7+6gam2HcskVFqKlzCgmQ70wgmiaNgzqpOzBQ/5zoBD8mgu416NW0QIh+d+HhTXT
UpFVqrnyy5Unv22uDPqky4UCgYAGOcoTdOzVYHCa7ErrJolMuexVuw2GjtsaMR2Q
d3U154NOMgWD3sJpiNBdiEqvCqgYZu21KjJMOxiRRtcyxD01N68ZZBU+1nz240/B
WXdIsu/RwGWq/H8nIHq5n4mJahqOohGnSe7K/Vhp7aE9ATV75wAwq8Fz5UBMlHUN
flixhQKBgEh3buWBrNpiz6wUX+2WtwoT8B+Oen9QCQRH8VTHFq/W2N3u3CiDcuPw
RFi8zwPg4ODowic8sYBp/xNNYb69vqko50FiLdxNH4luvKFf/yhi1TGRujAh02Sg
LUhd6atRZCYJH8sW5dbCI4HuQ/gZVtlHG/0goQjCHzo2kZ5mzXLc
-----END RSA PRIVATE KEY-----
EOD;

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



$payload = [
    'iss' => 'msiu.health.gov.lk',
    'aud' => 'msiu.health.gov.lk/ci4/admin',
    'uid' => 'U100001',
    'sid' => 'SESSION_ID',
    'ins' => 'INSTITUTION',
    'per' => '1-1-1-1',
    'hid' => '3333-3-3--3',
    'iat' => time(),
    'exp' => time()+3600
];


$jwt = JWT::encode($payload, $privateKey, 'RS256');
echo "Encode:\n" . print_r($jwt, true) . "\n";
echo "</br>";
echo "</br>";


$decoded = JWT::decode($jwt, new Key($publicKey, 'RS256'));
$decoded_array = (array) $decoded;

// echo $decoded['iss'];
echo "</br>";

echo "Decode:\n" . print_r($decoded_array, true) . "\n";

echo "</br>";
echo time()+3600;
echo "</br>";

$url = base_url()."user?jwt=".$jwt;
$url2 = base_url()."user2?jwt=".$jwt;

echo base_url();

echo "</br>";
echo $url;

echo "</br>";
echo "</br>";
echo '<a href='.$url.' target = "_blank"> http://localhost/ci4/public/user </a>';

echo "</br>";
echo '<a href='.$url2.' target = "_blank"> http://localhost/ci4/public/user2 </a>';

// Set the response content type to JSON


// $decoded_array = "dededed";

// echo "Decode:" . print_r($decoded_array, true) . "ll";

        // return view('FrontPage');
        // echo "FrontPage";
    }


        public function logged()
    {
        // return view('logged');


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
