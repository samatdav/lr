var mainBack;
var orderBack;
var deliveryCost = 100;

$(document).on('click', ".checkout_button", function(){



var time = updateClock();
// mainBack = $(".page-container").html();
// $('.page-container').html('<link rel="stylesheet" type="text/css" href="css/order.css"> <div class="header navbar-fixed-top"> <nav class="navbar fluid-container"> <div class="navbar-header"> <img class="logo" id="logo_icon" src="img/icon_trans.png" alt="expfood"> <img class="logo" id="logo_text" src="img/logo_main.png" alt="expfood"> </div> <div class="navbar-collapse collapse navbar-right"> </div> </nav> </div> <div class="container"> <div class="jumbotron content"> <form class="form-horizontal" name="sentMessage" id="contactForm" novalidate> <div class="form-group"> <label for="inputAddress" class="col-sm-2 control-label">Ваше имя </label> <div class="col-sm-10"> <!-- <input type="text" required class="form-control" id="inputAddress" placeholder="Например Маковского 2"> --> <input type="text" required class="form-control" placeholder="Например Маша" id="name"> <p class="help-block text-danger"></p> </div> </div> <div class="form-group"> <label for="inputMobile" required class="col-sm-2 control-label">Номер мобильного </label> <div class="col-sm-10"> <!-- <input type="text" required class="form-control" id="inputMobile" placeholder="По нему мы будем звязываться с Вами по всем вопросам заказа"> --> <input type="tel" required class="form-control" placeholder="В формате 8 *** *** ** **" id="phone"> <p class="help-block text-danger"></p> </div> </div> <div class="form-group"> <label for="inputName" class="col-sm-2 control-label">Ваш адрес </label> <div class="col-sm-10"> <!-- <input type="text" class="form-control" id="inputName" placeholder="Например Маша"> --> <input type="email" required class="form-control" placeholder="Маковского 2" id="email"> <p class="help-block text-danger"></p> </div> </div> <div class="form-group"> <label for="inputExtra" class="col-sm-2 control-label" >Дополнительные инструкции </label> <div class="col-sm-10"> <!-- <textarea id="inputExtra" class="form-control" rows="3" placeholder="Позвонить когда доставят"> </textarea> --> <textarea class="form-control" placeholder="Позвонить когда доставят" id="message"></textarea> <p class="help-block text-danger"></p> </div> </div> <!-- <div class="form-group"> <label for="inputPassword3" class="col-sm-2 control-label">Доставим сегодня до </label> <div type="text" class="col-sm-10 order-time"> '+time[0]+':'+time[1]+' </div> </div> --> <div class="clearfix"></div> <div class="col-lg-12 text-center"> <div id="success"></div> <button id="submitOrder" type="submit" class="btn btn-xl">Send</button> </div> </form> <nav> <ul class="pager"> <li class="previous"><a id="backToMain" href="#" class="backForth"> <span aria-hidden="true">&larr; </span> Назад</a></li> <li id="tt" class="next" data-toggle="tooltip" data-placement="right" title="Tooltip on top"><a href="#payment" id="toPay" class="backForth">Оплатить <span aria-hidden="true">&rarr; </span></a></li> </ul> </nav> </div> </div> <script src="js/jqBootstrapValidation.js"></script> <script src="js/contact_me.js"></script>')



//     $(function () {
//         $("#tt").tooltip();
//     });
//     $('[data-toggle="tooltip"]').tooltip({
//     container: 'body'
// });

// function validate(){
//     if ($('#name').val().length   >   0   &&
//         $('#email').val().length  >   0   &&
//         $('#phone').val().length  >   0) 
//         {
//             $(".next").attr("class", "next");
//             $(document).on('click', "#toPay", function(){
//                 orderBack = $(".page-container").html();
//                 $('.page-container').html('<link rel="stylesheet" type="text/css" href="css/order.css"> <link rel="stylesheet" type="text/css" href="css/payment.css"> <div class="header navbar-fixed-top"> <nav class="navbar fluid-container"> <div class="navbar-header"> <img class="logo" id="logo_icon" src="img/icon_trans.png" alt="expfood"> <img class="logo" id="logo_text" src="img/logo_main.png" alt="expfood"> </div> <div class="navbar-collapse collapse navbar-right"> </div> </nav> </div> <div class="container"> <div class="jumbotron content paybox"> <form class="form-horizontal"> <div class="form-group"> <label for="inputPassword3" class="col-sm-4 control-label">Продуктов на </label> <div type="text" class="col-sm-8 order-price"> '+totalCost+' рублей </div> </div> <div class="form-group"> <label for="inputPassword3" class="col-sm-4 control-label">Стоимость доставки</label> <div type="text" class="col-sm-8 order-price"> '+deliveryCost+' рублей </div> </div> <div class="form-group"> <label for="inputPassword3" class="col-sm-4 control-label">Итого к оплате </label> <div type="text" class="col-sm-8 order-price"> '+(totalCost + deliveryCost)+' рублей</div> </div> </form> <nav> <ul class="pager"> <li class="previous"> <a href="#" id="backToOrder" class="backForth"><span aria-hidden="true">&larr;</span> Назад</a> </li> <li id="tt" class="next" data-toggle="tooltip" data-placement="right" title="Tooltip on top"> <iframe frameborder="0" allowtransparency="true" scrolling="no" src="" width="195" height="54"></iframe> </li> </ul> </nav> </div> </div>')

//                 $( "iframe" ).attr({
//                       src: 'https://money.yandex.ru/embed/small.xml?account=410013085842859&quickpay=small&any-card-payment-type=on&button-text=02&button-size=l&button-color=white&targets=expfood&default-sum='+(totalCost + deliveryCost)+'&successURL=samat.info'
//                 });
//             });
//         }
//         else {
//             $(".next").attr("class", "next disabled");
//         }
// }

// $(document).ready(function (){
//     validate();
//     $('#name, #email, #phone').change(validate);
// });

// $('body').on('click', 'li.disabled', function(event) {
//     event.preventDefault();
// });


}); // end checkout click




$(document).ready(function() {
    $(document).on('click', "#toPay", function(){
        $("#submit_order_data").click();
    });
});







$(document).on('click', "#backToMain", function(){
	$('.page-container').html(mainBack);
});

$(document).on('click', "#backToOrder", function(){
	$('.page-container').html(orderBack);
});


/*
    jQuery Masked Input Plugin
    Copyright (c) 2007 - 2014 Josh Bush (digitalbush.com)
    Licensed under the MIT license (http://digitalbush.com/projects/masked-input-plugin/#license)
    Version: 1.4.0
*/
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){var b,c=navigator.userAgent,d=/iphone/i.test(c),e=/chrome/i.test(c),f=/android/i.test(c);a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},a.fn.extend({caret:function(a,b){var c;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof a?(b="number"==typeof b?b:a,this.each(function(){this.setSelectionRange?this.setSelectionRange(a,b):this.createTextRange&&(c=this.createTextRange(),c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select())})):(this[0].setSelectionRange?(a=this[0].selectionStart,b=this[0].selectionEnd):document.selection&&document.selection.createRange&&(c=document.selection.createRange(),a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length),{begin:a,end:b})},unmask:function(){return this.trigger("unmask")},mask:function(c,g){var h,i,j,k,l,m,n,o;if(!c&&this.length>0){h=a(this[0]);var p=h.data(a.mask.dataName);return p?p():void 0}return g=a.extend({autoclear:a.mask.autoclear,placeholder:a.mask.placeholder,completed:null},g),i=a.mask.definitions,j=[],k=n=c.length,l=null,a.each(c.split(""),function(a,b){"?"==b?(n--,k=a):i[b]?(j.push(new RegExp(i[b])),null===l&&(l=j.length-1),k>a&&(m=j.length-1)):j.push(null)}),this.trigger("unmask").each(function(){function h(){if(g.completed){for(var a=l;m>=a;a++)if(j[a]&&C[a]===p(a))return;g.completed.call(B)}}function p(a){return g.placeholder.charAt(a<g.placeholder.length?a:0)}function q(a){for(;++a<n&&!j[a];);return a}function r(a){for(;--a>=0&&!j[a];);return a}function s(a,b){var c,d;if(!(0>a)){for(c=a,d=q(b);n>c;c++)if(j[c]){if(!(n>d&&j[c].test(C[d])))break;C[c]=C[d],C[d]=p(d),d=q(d)}z(),B.caret(Math.max(l,a))}}function t(a){var b,c,d,e;for(b=a,c=p(a);n>b;b++)if(j[b]){if(d=q(b),e=C[b],C[b]=c,!(n>d&&j[d].test(e)))break;c=e}}function u(){var a=B.val(),b=B.caret();if(a.length<o.length){for(A(!0);b.begin>0&&!j[b.begin-1];)b.begin--;if(0===b.begin)for(;b.begin<l&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}else{for(A(!0);b.begin<n&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}h()}function v(){A(),B.val()!=E&&B.change()}function w(a){if(!B.prop("readonly")){var b,c,e,f=a.which||a.keyCode;o=B.val(),8===f||46===f||d&&127===f?(b=B.caret(),c=b.begin,e=b.end,e-c===0&&(c=46!==f?r(c):e=q(c-1),e=46===f?q(e):e),y(c,e),s(c,e-1),a.preventDefault()):13===f?v.call(this,a):27===f&&(B.val(E),B.caret(0,A()),a.preventDefault())}}function x(b){if(!B.prop("readonly")){var c,d,e,g=b.which||b.keyCode,i=B.caret();if(!(b.ctrlKey||b.altKey||b.metaKey||32>g)&&g&&13!==g){if(i.end-i.begin!==0&&(y(i.begin,i.end),s(i.begin,i.end-1)),c=q(i.begin-1),n>c&&(d=String.fromCharCode(g),j[c].test(d))){if(t(c),C[c]=d,z(),e=q(c),f){var k=function(){a.proxy(a.fn.caret,B,e)()};setTimeout(k,0)}else B.caret(e);i.begin<=m&&h()}b.preventDefault()}}}function y(a,b){var c;for(c=a;b>c&&n>c;c++)j[c]&&(C[c]=p(c))}function z(){B.val(C.join(""))}function A(a){var b,c,d,e=B.val(),f=-1;for(b=0,d=0;n>b;b++)if(j[b]){for(C[b]=p(b);d++<e.length;)if(c=e.charAt(d-1),j[b].test(c)){C[b]=c,f=b;break}if(d>e.length){y(b+1,n);break}}else C[b]===e.charAt(d)&&d++,k>b&&(f=b);return a?z():k>f+1?g.autoclear||C.join("")===D?(B.val()&&B.val(""),y(0,n)):z():(z(),B.val(B.val().substring(0,f+1))),k?b:l}var B=a(this),C=a.map(c.split(""),function(a,b){return"?"!=a?i[a]?p(b):a:void 0}),D=C.join(""),E=B.val();B.data(a.mask.dataName,function(){return a.map(C,function(a,b){return j[b]&&a!=p(b)?a:null}).join("")}),B.one("unmask",function(){B.off(".mask").removeData(a.mask.dataName)}).on("focus.mask",function(){if(!B.prop("readonly")){clearTimeout(b);var a;E=B.val(),a=A(),b=setTimeout(function(){z(),a==c.replace("?","").length?B.caret(0,a):B.caret(a)},10)}}).on("blur.mask",v).on("keydown.mask",w).on("keypress.mask",x).on("input.mask paste.mask",function(){B.prop("readonly")||setTimeout(function(){var a=A(!0);B.caret(a),h()},0)}),e&&f&&B.off("input.mask").on("input.mask",u),A()})}})});

$("#ssn").mask("(999) 999-99-99");