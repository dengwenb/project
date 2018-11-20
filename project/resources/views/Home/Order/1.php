@extends("Home.Public.public")
@section("home")

 php artisan make:controller Home/CouponController --resource

<link rel="stylesheet" href="static/home/tasp.css" />
<link href="static/home/orderconfirm.css" rel="stylesheet" />

<style>

#page{width:auto;}
#comm-header-inner,#content{width:950px;margin:auto;}
#logo{padding-top:26px;padding-bottom:12px;}
#header .wrap-box{margin-top:-67px;}
#logo .logo{position:relative;overflow:hidden;display:inline-block;width:140px;height:35px;font-size:35px;line-height:35px;color:#f40;}
#logo .logo .i{position:absolute;width:140px;height:35px;top:0;left:0;background:url();}
 element.style {
    height: 50px;
}
</style>


<body data-spm="1">


<div id="page">

 <div id="content" class="grid-c">

  <div id="address" class="address" style="margin-top: 20px;" data-spm="2">
<form name="addrForm" id="addrForm" action="#">
<h3>确认收货地址
 <span class="manage-address">
 <a href="http://member1.taobao.com/member/fresh/deliver_address.htm" target="_blank" title="管理我的收货地址"
 class="J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.7">管理收货地址</a>
 </span>
</h3>
<ul id="address-list" class="address-list">
     <li class="J_Addr J_MakePoint clearfix  J_DefaultAddr "  data-point-url="http://log.mmstat.com/buy.1.20">
 <s class="J_Marker marker"></s>
 <span class="marker-tip">寄送至</span>
   <div class="address-info">
 <a href="#" class="J_Modify modify J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.21">修改本地址</a>
 <input name="address"
 class="J_MakePoint "
 type="radio"
 value="674944241"
 id="addrId_674944241"
 data-point-url="http://log.mmstat.com/buy.1.20"
 ah:params="id=674944241^^stationId=0^^address=湖北民族学院（信息工程学院）  男生宿舍楼5栋102^^postCode=445000^^addressee=朱万雄^^phone=^^mobile=18727717260^^areaCode=422801"
  checked="checked" >
 <label for="addrId_674944241" class="user-address">
         湖北省 恩施土家族苗族自治州 恩施市 湖北民族学院（信息工程学院）  男生宿舍楼235栋2323102 (某某 收) <em>18427717260</em>
   </label>
 <em class="tip" style="display: none">默认地址</em>
 <a class="J_DefaultHandle set-default J_MakePoint" href="/auction/update_address_selected_status.htm?addrid=674944241" style="display: none" data-point-url="http://log.mmstat.com/buy.1.18">设置为默认收货地址</a>
 </div>
     </li>
     <li class="J_Addr J_MakePoint clearfix"
 data-point-url="http://log.mmstat.com/buy.1.20" >
 <s class="J_Marker marker"></s>
 <span class="marker-tip">寄送至</span>
   <div class="address-info">
 <a href="#" class="J_Modify modify J_MakePoint" data-point-url="#">修改本地址</a>
 <input name="address"
 class="J_MakePoint"
 type="radio"
 value="594209677"
 id="addrId_594209677"
 data-point-url="#"
 ah:params="#"
 >
 <label for="addrId_594209677" class="user-address">
       湖北省 恩施土家族苗族自治州 恩施市 某某某 (某某某 收) <em>1342407681</em></label><em class="tip" style="display: none">默认地址</em>
   <a class="J_DefaultHandle set-default J_MakePoint" style="display: none" data-point-url="#" href="#">设置为默认收货地址</a>
 </div>
   </li>
     </ul>
<ul id="J_MoreAddress" class="address-list hidden">
     
 </ul>

<div class="address-bar">
 <a  class="new J_MakePoint" id="J_useNewAddr">使用新地址</a>
 </div>

</form>
</div>
<form id="J_Form" name="J_Form" action="/auction/order/unity_order_confirm.htm" method="post">

           <div>
 <h3 class="dib">确认订单信息</h3>
 <table cellspacing="0" cellpadding="0" class="order-table" id="J_OrderTable" >
 <thead>
 <tr style="height:50px">
 <th class="s-title" >店铺宝贝<hr style="margin: 12px"/></th>
 <th class="s-price">单价(元)<hr style="margin: 12px"/></th>
 <th class="s-amount">数量<hr style="margin: 12px"/></th>
 <th class="s-agio">优惠方式(元)<hr style="margin: 12px"/></th>
 <th class="s-total">小计(元)<hr style="margin: 12px"/></th>
 </tr>
 </thead>
     
<tbody  data-spm="3" class="J_Shop" data-tbcbid="0" data-outorderid="47285539868"  data-isb2c="false" data-postMode="2" data-sellerid="1704508670">

<tr class="shop blue-line">
 <td colspan="3">
   店铺：<a class="J_ShopName J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.6" href="http://store.taobao.com/shop/view_shop.htm?shop_id=104337282"
 target="_blank" title="淘米魅">淘米魅</a>
     <span class="seller">卖家：<a href="http://member1.taobao.com/member/user_profile.jhtml?user_id=ac5831c32f47bc9267fcb75b71b5eed6" target="_blank" class="J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.15">淘米魅</a></span>
     <span class="J_WangWang"  data-nick="淘米魅"   data-display="inline" ></span>
    
    </td>
 <td colspan="2" class="promo">
 <div>
   <ul class="scrolling-promo-hint J_ScrollingPromoHint">
       </ul>
   </div>
 </td>
</tr>
 <tr class="item" data-lineid="19614514619:31175333266:35612993875" data-pointRate="0">
 <td class="s-title">
   <a href="#" target="_blank" title="Huawei/华为 G520新款双卡双待安卓系统智能手机4.5寸四核手手机" class="J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.5">
     <img src="http://img03.taobaocdn.com/bao/uploaded/i3/18670026332876589/T1A4icFbNeXXXXXXXX_!!0-item_pic.jpg_60x60.jpg" class="itempic"><span class="title J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.5">Huawei/华为 G520新款双卡双待安卓系统智能手机4.5寸四核手手机</span></a>

   <div class="props">
     <span>机身颜色: 黑 </span>
   <span>手机套餐: 套餐二 </span>
   <span>机身内存: 4G </span>
   <span>版本: 中国大陆 </span>
         </div>
 <a title="消费者保障服务，卖家承诺商品如实描述" href="#" target="_blank">
<img src="http://img03.taobaocdn.com/tps/i3/T1bnR4XEBhXXcQVo..-14-16.png"/>
</a>
    <div>
 <span style="color:gray;">卖家承诺72小时内发货</span>
 </div>
     </td>
 <td class="s-price">
   
  <span class='price '>
 <em class="style-normal-small-black J_ItemPrice"  >630.00</em>
  </span>
<input type="hidden" name="costprice" value="630.00" class="J_CostPrice" />
</td>
 <td class="s-amount" data-point-url="">
         <input type="hidden" class="J_Quantity" value="1" name="19614514619_31175333266_35612993875_quantity"/>1
 
 </td>
 <td class="s-agio">
       <div class="J_Promotion promotion" data-point-url="">无优惠</div>
   </td>
 <td class="s-total">
   
   <span class='price '>
 <em class="style-normal-bold-red J_ItemTotal "  >630.00</em>
  </span>
    <input id="furniture_service_list_b_47285539868" type="hidden" name="furniture_service_list_b_47285539868"/>
 </td>
</tr>



<tr class="item-service">
 <td colspan="5" class="servicearea" style="display: none"></td>
</tr>

<tr class="blue-line" style="height: 2px;"><td colspan="5"></td></tr>
<tr class="other other-line">
 <td colspan="5">
 <ul class="dib-wrap">
 
 <li class="dib extra-info">

 <div class="shoparea">
 <ul class="dib-wrap">
 <li class="dib title">店铺优惠：</li>
 <li class="dib sel"><div class="J_ShopPromo J_Promotion promotion clearfix" data-point-url="http://log.mmstat.com/buy.1.16"></div></li>
 <li class="dib fee">  <span class='price '>
 -<em class="style-normal-bold-black J_ShopPromo_Result"  >0.00</em>
  </span>
</li>
 </ul>
 </div>

 <div class="shoppointarea"></div>

   <div class="farearea">
 <ul class="dib-wrap J_farearea">
 <li class="dib title">运送方式：</li>
 <li class="dib sel" data-point-url="">

   <select name="1704508670:2|post" class="J_Fare" style ="height: 50px">
     <option data-fare="1500" value=" 2 " data-codServiceType="2" data-level=""  selected="selected"  >
         快递 15.00元 
 </option>
       <option data-fare="2500" value=" 7 " data-codServiceType="7" data-level=""  >
         EMS 25.00元 
 </option>
       <option data-fare="1500" value=" 1 " data-codServiceType="1" data-level=""  >
             平邮 15.00元 
 </option>
     </select>
   <em tabindex="0" class="J_FareFree" style="display: none">免邮费</em>
     </li>
 <li class="dib fee">  <span class='price '>
 <em class="style-normal-bold-red J_FareSum"  >30.00</em>
  </span>
</li>
 </ul>
 </div>
   <div class="extra-area">
 <ul class="dib-wrap">
 <li class="dib title">发货时间：</li>
 <li class="dib content">卖家承诺订单在买家付款后，72小时内<a href="#">发货</a></li>
 </ul>
 </div>
   
   <div class="servicearea" style="display: none"></div>
 </li>
 </ul>
 </td>
</tr>

<tr class="shop-total blue-line">
 <td colspan="5">店铺合计(<span class="J_Exclude" style="display: none">不</span>含运费<span class="J_ServiceText" style="display: none">，服务费</span>)：
   <span class='price g_price '>
 <span>&yen;</span><em class="style-middle-bold-red J_ShopTotal"  >630.00</em>
  </span>
  <input type="hidden" name="1704508670:2|creditcard" value="false" />
<input type="hidden" id="J_IsLadderGroup" name="isLadderGroup" value="false"/>

   </td>
</tr>
</tbody>
  <tfoot>
 <tr>
 <td colspan="5">

<div class="order-go" data-spm="4">
<div class="J_AddressConfirm address-confirm">
 <div class="kd-popup pop-back" style="margin-bottom: 40px;">
 <div class="box">
 <div class="bd">
 <div class="point-in">
   
   <em class="t">实付款：</em>  <span class='price g_price '>
 <span>&yen;</span><em class="style-large-bold-red"  id="J_ActualFee"  >630.00</em>
  </span>
</div>

  <ul >
 <li><em>寄送至:</em><span id="J_AddrConfirm" style="word-break: break-all;">
   湖北省 恩施土家族苗族自治州 恩施市 湖北民族学院（信息工程学院）  男生宿舍楼235栋1234202
   </span></li>
 <li><em>收货人:</em><span id="J_AddrNameConfirm">某某某 18124317260 </span></li>
 </ul>
     </div>
 </div>
         <a href="#"
 class="back J_MakePoint" target="_top"
 data-point-url="">返回购物车</a>
       <a id="J_Go" class=" btn-go"  data-point-url=""  tabindex="0" title="点击此按钮，提交订单。">提交订单<b class="dpl-button"></b></a>
  </div>
 </div>

 <div class="J_confirmError confirm-error">
 <div class="msg J_shopPointError" style="display: none;"><p class="error">积分点数必须为大于0的整数</p></div>
 </div>


 <div class="msg" style="clear: both;">
 <p class="tips naked" style="float:right;padding-right: 0">若价格变动，请在提交订单后联系卖家改价，并查看已买到的宝贝</p>
 </div>
 </div>
 </td>
 </tr>
 </tfoot>
 </table>
</div>
  
 <input type="hidden" id="J_useSelfCarry" name="useSelfCarry" value="false" />
 <input type="hidden" id="J_selfCarryStationId" name="selfCarryStationId" value="0" />
 <input type="hidden" id="J_useMDZT" name="useMDZT" value="false" />
 <input type="hidden" name="useNewSplit" value="true" />
 <input type="hidden" id="J_sellerIds" name="allSellIds" value="1704508670" />
</form>
</div>

<div id="footer"></div>
</div>
</body>
<script>
  $("#J_useNewAddr").on("click",function(){
    var b=$(this).attr("data-state");
    return $(this).attr("data-url")?(location.href=$(this).attr("data-url"),!1):("off"===b?(XIAOMI.app.placeholder($("#J_editAddrBox").find("input,textarea")),a.Show($(this)),XIAOMI.checkOut.setAddrState("1")):"on"===b&&(a.Close(),a.resetData(),XIAOMI.checkOut.setAddrState()),!1)}),$("#J_editAddrOk").click(function(){var b="true"===$(this).attr("data-isEdit")?!0:!1;
    return a.validation(b),!1}),$("#J_editAddrCancel").click(function(){return a.Close(),a.resetData(),XIAOMI.checkOut.setAddrState(),!1}),$("#Provinces").change(function(){var b=$(this).val();"0"!==b?(a.getRegionsData(b,"Citys"),a.newProvince=$(this).find("option:selected").html()):(a.newProvince=null,a.newCity=null,a.newCounty=null),$("#Countys").prop("disabled",!0).find("option:gt(0)").remove()}),$("#Citys").change(function(){var b=$(this).val();"0"!==b?(a.getRegionsData(b,"Countys"),a.newCity=$(this).find("option:selected").html()):(a.newCity=null,a.newCounty=null)}),$("#Countys").change(function(){var b=$(this).val();"0"!==b?(a.newCounty=$(this).find("option:selected").html(),a.newZipcode=$(this).find("option:selected").attr("zipcode"),$("#zipcodeTip").html("邮编为："+a.newZipcode)):(a.newCounty=null,a.newZipcode=null,$("#zipcodeTip").html(""))}),a.toEdit()},Show:function(a){if("object"!=typeof a)return!1;var b=a.offset().left,c=a.offset().top,d=a.outerWidth()-2;$("#J_editAddrBox").css({width:d,top:c,left:b}).show();var e=$(document).width(),f=$(document).height();$("#J_editAddrBackdrop").css({width:e,height:f}).show()},Close:function(){$("#J_editAddrBox").hide(),$("#J_editAddrBackdrop").hide(),$("html,body").scrollTop($("#checkoutAddrList").find(".selected").length>0?$("#checkoutAddrList").find(".selected").offset().top:0)},setMsg:function(a,b){a&&b?a.siblings(".tipMsg").html(b).show():a.siblings(".tipMsg").html("").hide()},validation:function(a){var b=this,c=$("#Consignee"),d=$("#Provinces"),e=$("#Citys"),f=$("#Countys"),g=$("#Street"),h=$("#Zipcode"),i=$("#Telephone"),j=$("#Tag"),k=/^[1-9]+\d*$/,l=/^\d{6}$/,m=/^1[0-9]{10}$/,n=/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/,o=/^\d+$/,p=/^[0-9a-zA-Z]+$/,q=/^[a-zA-Z\u4e00-\u9fa5]+$/,r={},s=$("#addrState").val(),t=$.trim(c.val()),u=c.attr("placeholder"),v=!1;if(t===u&&(t=""),!(b.strLen(t)>=4))return c.focus(),b.setMsg(c,"收货人姓名 太短 (最小值为 2 个中文字)"),!1;if(!q.test(t))return c.focus(),b.setMsg(c,"收货人姓名不正确（只能是英文、汉字）"),!1;b.setMsg(c,""),r.consignee=t,v=!0;var w=$.trim(i.val()),x=!1;if(a&&w&&w!==i.attr("placeholder")?a=!1:!a&&w&&w===i.attr("placeholder")?i.attr("placeholder",""):a||w||i.attr("placeholder","11位手机号"),!a&&w!==i.attr("placeholder")&&!m.test(w))return i.focus(),b.setMsg(i,"请填写11位手机号"),!1;b.setMsg(i,""),r.tel=w,r.telPlaceholder=i.attr("placeholder"),x=!0;var y=d.val(),z=e.val(),A=f.val(),B=!1;if(!(k.test(y)&&k.test(z)&&k.test(A)))return b.setMsg(d,"收货地址不正确"),!1;b.setMsg(d,""),r.province=y,r.city=z,r.county=A,r.provinceName=b.newProvince,r.cityName=b.newCity,r.countyName=b.newCounty,B=!0;var C=$.trim(g.val()).replace(/</g,"").replace(/>/g,"").replace(/\//g,"").replace(/\\/g,""),D=g.attr("placeholder"),E=!1;if(C===D&&(C=""),!(C.length>=5&&C.length<=32))return g.focus(),b.setMsg(g,"详细地址长度不对，最小为 5 个字，最大32个字"),!1;if(n.test(C)||o.test(C)||p.test(C))return g.focus(),b.setMsg(g,"详细地址不正确"),!1;b.setMsg(g,""),r.street=C,E=!0;var F=$.trim(h.val()),G=!1;if(!l.test(F))return h.focus(),b.setMsg(h,"邮编是6位数字"),!1;b.setMsg(h,""),r.zipcode=F,G=!0;var H=$.trim(j.val()),I=j.attr("placeholder"),J=!1;if(H===I&&(H=""),H.length>5)return j.focus(),b.setMsg(j,"地址标签最长5个字"),!1;if(r.tag=H,J=!0,v&&B&&E&&G&&x&&J)if("1"===s){var K=$("#checkoutAddrList").find(".selected").attr("data-isnew");"true"===K&&$("#checkoutAddrList").find(".selected").remove(),r.tel||(r.tel=r.telPlaceholder),b.createAddr(r),b.Close(),b.resetData()}else b.saveAddr(r)},createAddr:function(a){var b=doT.template($("#newAddrTemplate").html());$("#checkoutAddrList").find(".item").removeClass("selected"),$("#checkoutAddrList").find(".item").eq(0).before(b(a)),$("#J_addrListToggle").hasClass("on")||XIAOMI.checkOut.hideMoreAddr(),XIAOMI.checkOut.selectAddr(),XIAOMI.checkOut.setSubmitAddr(),XIAOMI.checkOut.getPayment(a.county),this.toEdit(),this.setNew(a)},toEdit:function(){var a=this;$(".J_editAddr").on("click",function(){if($(this).attr("data-url"))return location.href=XIAOMI.GLOBAL_CONFIG.orderSite+$(this).attr("data-url"),!1;var b=$(this).parent().parent(),c=(b.attr("data-isnew"),b.attr("data-consignee")),d=b.attr("data-province"),e=b.attr("data-provincename"),f=b.attr("data-city"),g=b.attr("data-cityname"),h=b.attr("data-county"),i=b.attr("data-countyname"),j=b.attr("data-street"),k=b.attr("data-zipcode"),l=b.attr("data-tel"),m=b.attr("data-tag");return $("#Consignee").val(c),$("#Street").val(j),$("#telModifyTip").show().find("em").html(l),m&&$("#Tag").val(m),$("#Zipcode").val(k),$("#Telephone").attr("placeholder",l).val(""),XIAOMI.app.placeholder("#Telephone"),$("#Provinces").find("option[value='"+d+"']").prop("selected",!0),a.getRegionsData(d,"Citys",f),a.getRegionsData(f,"Countys",h),$("#Citys").prop("disabled",!1),$("#County").prop("disabled",!1),a.newProvince=e,a.newCity=g,a.newCounty=i,a.Show(b),$("#J_editAddrOk").attr("data-isEdit","true"),XIAOMI.checkOut.setAddrState(),!1})},editAddr:function(a){var b=$("#checkoutAddrList").find(".selected");b.attr("data-consignee",a.consignee),b.attr("data-province",a.province),b.attr("data-provincename",a.provinceName),b.attr("data-city",a.city),b.attr("data-cityname",a.cityName),b.attr("data-county",a.county),b.attr("data-countyname",a.countyName),b.attr("data-street",a.street),b.attr("data-zipcode",a.zipcode),a.tel?(b.attr("data-tel",a.tel),b.find(".itemTel").html(a.tel)):b.find(".itemTel").html(a.telPlaceholder),b.attr("data-tag",a.tag),b.attr("data-isedit","true"),b.find(".itemConsignee").html(a.consignee),b.find(".itemTag").length>0&&a.tag?b.find(".itemTag").html(a.tag):a.tag?b.find("dt").append('<span class="itemTag tag">'+a.tag+"</span>"):a.tag||b.find(".itemTag").remove(),b.find(".itemRegion").html(a.provinceName+" "+a.cityName+" "+a.countyName),b.find(".itemStreet").html(a.street+"("+a.zipcode+")"),XIAOMI.checkOut.setSubmitAddr()},setNew:function(a){$("#newConsignee").val(a.consignee),$("#newProvince").val(a.province),$("#newCity").val(a.city),$("#newCounty").val(a.county),$("#newStreet").val(a.street),$("#newZipcode").val(a.zipcode),$("#newTel").val(a.tel),$("#newTag").val(a.tag)},saveAddr:function(a){var b=this,c=$("#checkoutAddrList").find(".selected").find(".addressId").val(),d=$("#newType").val(),e="newAddress[address_id]="+c+"&newAddress[consignee]="+a.consignee+"&newAddress[province_id]="+a.province+"&newAddress[city_id]="+a.city+"&newAddress[district_id]="+a.county+"&newAddress[address]="+a.street+"&newAddress[zipcode]="+a.zipcode+"&newAddress[tel]="+a.tel+"&newAddress[update_tel]=yes&newAddress[tag_name]="+a.tag+"&newAddress[type]="+d+"&tel_placeholder="+a.telPlaceholder;$.ajax({type:"POST",url:"/buy/saveAddress",data:e,dataType:"json",success:function(c){1===c.code?(b.editAddr(a),XIAOMI.checkOut.getPayment(a.county),b.Close(),b.resetData()):alert(c.msg)}})},strLen:function(a){return a.replace(/[^\x00-\xff]/g,"**").length},resetData:function(){$("#Consignee").val(""),$("#Street").val(""),$("#Telephone").val("").attr("placeholder","11位手机号"),$("#Zipcode").val(""),$("#Tag").val(""),$("#Provinces").find("option").eq(0).prop("selected",!0),$("#Citys").prop("disabled",!0).find("option:gt(0)").remove(),$("#Countys").prop("disabled",!0).find("option:gt(0)").remove(),this.newProvince=null,this.newCity=null,this.newCounty=null,this.newZipcode=null,$("#zipcodeTip").html(""),$(".tipMsg").html("").hide(),$("#telModifyTip").hide(),$("#J_editAddrOk").attr("data-isEdit","false")},getRegionsData:function(parent,target,sId){var _data=!1,regionData={regions:[]};if(checkoutConfig.addressMatchVarName&&(_data=eval(checkoutConfig.addressMatchVarName)),_data){var len=_data.length;parent=parseInt(parent),sId=parseInt(sId);for(var i=0;len>i;i+=1)if(1===parent)regionData.regions.push({region_id:_data[i].id,region_name:_data[i].name,zipcode:0});else for(var k=0;k<_data[i].child.length;k+=1)if(_data[i].id===parent)regionData.regions.push({region_id:_data[i].child[k].id,region_name:_data[i].child[k].name,zipcode:0});else for(var j=0;j<_data[i].child[k].child.length;j+=1)_data[i].child[k].id===parent&&regionData.regions.push({region_id:_data[i].child[k].child[j].id,region_name:_data[i].child[k].child[j].name,zipcode:_data[i].child[k].child[j].zipcode});XIAOMI.app.getRegions.formatData(regionData,target,sId)}}},$(function(){XIAOMI.checkOut.init()});
</script>
</html>


       
@endsection
@section('title','订单详情')