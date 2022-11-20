<?php

//truy vấn ds loại đã nhập


function service_selectall()
{
    $sql = "select * from service order by service_id ";
    return pdo_query($sql);
}

//thêm mới loại
function service_insert($service_name)
{
    $sql = "insert into service(service_name) values(?)";
    pdo_execute($sql, $service_name);
}

//xóa
function service_delete($service_id)
{
    $sql = "delete from service where service_id=?";
    pdo_execute($sql, $service_id);
}

//cập nhật
function service_update($service_id, $service_name)
{
    $sql = "UPDATE service SET service_name=? WHERE service_id=?";
    pdo_execute($sql, $service_name, $service_id);
}

//lấy thông tin 1 mã loại
function service_getinfo($service_id)
{
    $sql = "select * from service where service_id=?";
    return pdo_query_one($sql, $service_id);
}
function service_detail_insert($service_id,$bookingdetail_id,$quality,$into_money){
    $sql = "insert into service_detail(service_id,bookingdetail_id,quality,into_money)
     values('$service_id','$bookingdetail_id','$quality','$into_money')";
    pdo_execute($sql);
}
function service_detail_delete($service_detail_id){
    if(isset($service_detail_id)){
        $sql = "delete * from service_detail where service_detail_id = ?";
        pdo_execute($sql, $service_detail_id);
    }else{
        $sql = "delete * from service_detail ";
        pdo_execute($sql);
    }
}
function service_detail_update($service_id,$bookingdetail_id,$quality,$into_money,$service_detail_id ){
    $sql = "UPDATE service SET service_id=?, bookingdetail_id =?, quality=?, into_money=? WHERE service_detail_id=?";
    pdo_execute($sql, $service_id,$bookingdetail_id,$quality,$into_money, $service_detail_id);
}
function service_detail_selectall(){
    $sql = "select * from service_detail";
    pdo_query($sql);
}