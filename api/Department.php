<?php
require_once(__DIR__ . "/../util/Http.php");

class Department
{
    private $http;
    public function __construct() {
        $this->http = new Http();
    }
    //创建部门
    public static function createDept($accessToken, $dept)
    {
        $response = Http::post("/department/create", 
            array("access_token" => $accessToken), 
            json_encode($dept));
        return $response;
    }
    //更新部门
    public static function update($accessToken, $dept)
    {
        $response = Http::post("/department/update",
            array("access_token" => $accessToken),
            json_encode($dept));
        return $response;
    }
    //获取部门列表
    public static function listDept($accessToken)
    {
        $response = Http::get("/department/list", 
            array("access_token" => $accessToken));
        return $response;
    }
    //获取部门详情
    public static function getDept($accessToken, $id)
    {
        $response = Http::get("/department/get",
            array("access_token" => $accessToken, "id" => $id));
        return $response;
    }
    //删除部门
    public static function deleteDept($accessToken, $id)
    {
        $response = Http::get("/department/delete",
            array("access_token" => $accessToken, "id" => $id));
        return $response;
    }
    //获取子部门ID列表
    public static function list_idsDept($accessToken, $id)
    {
        $response = Http::get("/department/list_ids",
            array("access_token" => $accessToken, "id" => $id));
        return $response;
    }
    //查询部门的所有上级父部门路径
    public static function list_parent_depts_by_dept($accessToken, $id)
    {
        $response = Http::get("/department/list_parent_depts_by_dept",
            array("access_token" => $accessToken, "id" => $id));
        return $response;
    }
    //查询指定用户的所有上级父部门路径
    public static function list_parent_depts_by_dept($accessToken, $userId)
    {
        $response = Http::get("/department/list_parent_depts",
            array("access_token" => $accessToken, "userId" => $userId));
        return $response;
    }
}
