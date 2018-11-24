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
    }
    else {
        alert('failed'+this.getStatus());
    }
},{enableHighAccuracy: true});

map.setCurrentCity("北京");          // 设置地图显示的城市 此项是必须设置的
map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放

function searchAround() {
    var local = new BMap.LocalSearch(map, {
        renderOptions: {map: map}
    });
    local.search("全家");//sample
}


function searchParking(){
    var local = new BMap.LocalSearch(map, {
        renderOptions: {map: map}
    });
    local.search("车库");//停车场

}

