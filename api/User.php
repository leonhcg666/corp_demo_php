<?php
require_once(__DIR__ . "/../util/Http.php");

class User
{
    private $http;
    public function __construct() {
        $this->http = new Http();
    }   
    //获取用户userid
    public function getUserInfo($accessToken, $code)
    {
        $response = $this->http->get("/user/getuserinfo", 
            array("access_token" => $accessToken, "code" => $code));
        return $response;
    }
    //获取用户详情
    public function get($accessToken, $userId)
    {
        $response = $this->http->get("/user/get",
            array("access_token" => $accessToken, "userid" => $userId));
        return $response;
    }
    //获取部门用户
    public function simplelist($accessToken,$deptId){
        $response = $this->http->get("/user/simplelist",
            array("access_token" => $accessToken,"department_id"=>$deptId));
        return $response;
    }
    //获取部门用户userid列表
    public function getDeptMember($accessToken,$deptId){
        $response = $this->http->get("/user/getDeptMember",
            array("access_token" => $accessToken,"department_id"=>$deptId));
        return $response;
    }
    //根据unionid获取userid
    public function getUseridByUnionid($accessToken,$Unionid){
        $response = $this->http->get("/user/getUseridByUnionid",
            array("access_token" => $accessToken,"department_id"=>$Unionid));
        return $response;
    }
    //获取部门用户详情
    public function listbypage($accessToken,$deptId){
        $response = $this->http->get("/user/listbypage",
            array("access_token" => $accessToken,"department_id"=>$deptId));
        return $response;
    }
}
