function PluginDisplayTime_v1(){
  this.id = 'plugin_display_time_v1';
  this.startTime = function() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = PluginDisplayTime_v1.checkTime(m);
    s = PluginDisplayTime_v1.checkTime(s);
    document.getElementById(PluginDisplayTime_v1.id).innerHTML = h + ":" + m + ":" + s;
    setTimeout(PluginDisplayTime_v1.startTime, 500);
  }
  this.checkTime = function(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
  }
}
var PluginDisplayTime_v1 = new PluginDisplayTime_v1();
