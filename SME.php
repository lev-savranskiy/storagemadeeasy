<?php


class SME
{

    private static  $login;
    private static  $password;
    private static  $api;
    private static  $b64;
    private $token;

    public function __construct($login = null, $password = null)
    {

        self::$api = 'https://storagemadeeasy.com/api/json/';
        self::$login = $login;
        self::$password = $password;
        self::$b64 = base64_encode(self::$login) . ',' . base64_encode(self::$password);

    }


    public function getToken()
    {

        $url = $this::$api . '*/gettoken/' . self::$b64;
        $res = json_decode( file_get_contents($url));
        if(isset($res->token) && isset($res->status) && ($res->status == 'ok')){
            echo  self::$login . ' auth ok';
            echo '<hr/>';
            $this->token = $res->token;
            return $res;
        }else{
            echo $url;
            echo '<hr/>';
            echo $res->statusmessage;
            echo '<hr/>';
            die("error");
        }

    }


    public function getUploadLink ()    {

        return "http://storagemadeeasy.com/api/" . $this->token . '/doUploadFiles/';
    }


    public function getGroups ()
    {



        $url = $this::$api .  $this->token . '/getGroups/';
        $res = json_decode( file_get_contents($url));
        if(isset($res->groups) &&  isset($res->status) && ($res->status == 'ok')){
           return $res->groups;
        }else{
            echo $url;
            echo '<hr/>';
            echo $res->statusmessage;
            echo '<hr/>';
            die("error");
        }

    }

    public function getFolderContents ()
    {


        $query = '1177331038';
        $query = '0';

        $url = $this::$api .  $this->token . '/getFolderContents/' .base64_encode($query);
        $res = json_decode( file_get_contents($url));
//        print_r($url);
//        print_r($res);
        if(isset($res->filelist) &&  isset($res->status) && ($res->status == 'ok')){
           return $res->filelist;
        }else{
            echo $url;
            echo '<hr/>';
            echo $res->statusmessage;
            echo '<hr/>';
            die("error");
        }

    }





}

