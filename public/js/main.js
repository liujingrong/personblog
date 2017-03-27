/* 
* @Author: anchen
* @Date:   2017-03-16 20:14:39
* @Last Modified by:   anchen
* @Last Modified time: 2017-03-24 20:08:57
*/

document.getElementById("sidebar-toggle").onmouseover=function()
    {
        document.getElementById("sidebar-toggle-line-first").style.width="50%";
        document.getElementById("sidebar-toggle-line-first").style.top="1px";
        document.getElementById("sidebar-toggle-line-first").style.transform="rotateZ(-50deg)";
        document.getElementById("sidebar-toggle-line-middle").style.left="0.5px";
        document.getElementById("sidebar-toggle-line-middle").style.width="100%";
        document.getElementById("sidebar-toggle-line-third").style.width="50%";
        document.getElementById("sidebar-toggle-line-third").style.top="-1px";
        document.getElementById("sidebar-toggle-line-third").style.transform="rotateZ(50deg)";
    }
    document.getElementById("sidebar-toggle").onmouseout=function()
    {
        document.getElementById("sidebar-toggle-line-first").style.width="100%";
        document.getElementById("sidebar-toggle-line-first").style.top="0px";
        document.getElementById("sidebar-toggle-line-first").style.transform="rotateZ(0deg)";
        document.getElementById("sidebar-toggle-line-middle").style.left="0px";
        document.getElementById("sidebar-toggle-line-middle").style.width="100%";
        document.getElementById("sidebar-toggle-line-third").style.width="100%";
        document.getElementById("sidebar-toggle-line-third").style.top="0px";
        document.getElementById("sidebar-toggle-line-third").style.transform="rotateZ(0deg)";
    }
    document.getElementById("sidebar-toggle").onclick=function()
    {
        onBotton=document.getElementById("sidebar-to");
        if(onBotton.style.display=="none")
        {
            document.getElementsByTagName("body")[0].style.width="80%";
            onBotton.style.display="block";
        }else
        {
            document.getElementsByTagName("body")[0].style.width="100%";
            onBotton.style.display="none";
        }

    }
window.onload = function(){
        var obtn = document.getElementById("to-top");
        var clientHeight = document.documentElement.clientHeight;
        var timer = null; 
        var isTop = true; 
    obtn.onclick = function(){
        timer = setInterval(function(){
            var osTop = document.documentElement.scrollTop || document.body.scrollTop;
            var speed = Math.floor(-osTop / 6); 
            document.documentElement.scrollTop = document.body.scrollTop = osTop + speed;
            isTop = true;
            if(osTop == 0){
                clearInterval(timer); 
            }
        },30)
    }
}
document.getElementById("rewardclick").onclick=function()
{
    document.getElementsByClassName("paypalali")[0].style.display="inline-block";
    document.getElementsByClassName("paypalwechat")[0].style.display="inline-block";
    this.style.display="none";
}