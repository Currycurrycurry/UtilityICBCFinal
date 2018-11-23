window.alert = function(){
    return false;

};


// 百度地图API功能
var map = new BMap.Map("mapG");    // 创建Map实例
map.centerAndZoom(new BMap.Point(121.60605485184,31.19757864786),25);  // 初始化地图,设置中心点坐标和地图级别

var geolocation = new BMap.Geolocation();
geolocation.getCurrentPosition(function(r){
    if(this.getStatus() == BMAP_STATUS_SUCCESS){
        var mk = new BMap.Marker(r.point);
        map.addOverlay(mk);
        map.panTo(r.point);
        //alert('您的位置：'+r.point.lng+','+r.point.lat);
    }
    else {
        alert('failed'+this.getStatus());
    }
},{enableHighAccuracy: true});


function searchAround() {
    var local = new BMap.LocalSearch(map, {
        renderOptions: {map: map}
    });
    local.search("全家");
}


function searchParking(){
    var local = new BMap.LocalSearch(map, {
        renderOptions: {map: map}
    });
    local.search("停车场");

}




// var myKeys = ["医院"];//便利店,"酒店","餐厅","水果店","超市","药房","医院","饭店"
//
// var local = new BMap.LocalSearch(map, {
//     renderOptions:{map: map, panel:"r-result"},
//     pageCapacity:5
// });
// local.searchInBounds(myKeys, map.getBounds());

//添加地图类型控件
// map.addControl(new BMap.MapTypeControl({
//     mapTypes:[
//         BMAP_NORMAL_MAP,
//         BMAP_HYBRID_MAP
//     ]}));
// map.setCurrentCity("上海");          // 设置地图显示的城市 此项是必须设置的
// map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放