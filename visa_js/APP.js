///Overall JS
$(function($){
    $(document).on('click','.vc_pagenewrecord', function(){
        $('.vc_pagerecord').slideUp("slow");
        $('.vc_pageform').slideDown("slow");
    });

    $(document).on('click','.vc_closeform', function(){
        $('.vc_pageform').slideUp("slow");
        $('.vc_pagerecord').slideDown("slow");
    });

    $(document).on('click','.nanta_status', function(event){
        event.preventDefault();
        document.location = './nanta';
    });


    $(document).on('click','#btn_general_top_search', function(e){
        event.preventDefault();
        $('#general_top_search').submit();
    });
    //swal("Deleted!", "Your imaginary file has been deleted.");
    //swal("Deleted!", "Your imaginary file has been deleted.", "success");
    //swal("Deleted!", "Your imaginary file has been deleted.", "warning");
    //swal("Deleted!", "Your imaginary file has been deleted.", "error");
    //swal("Deleted!", "Your imaginary file has been deleted.", "info");
});

Array.prototype.indexOf || (Array.prototype.indexOf = function(d, e) {
    var a;
    if (null == this) throw new TypeError('"this" is null or not defined');
    var c = Object(this),
        b = c.length >>> 0;
    if (0 === b) return -1;
    a = +e || 0;
    Infinity === Math.abs(a) && (a = 0);
    if (a >= b) return -1;
    for (a = Math.max(0 <= a ? a : b - Math.abs(a), 0); a < b;) {
        if (a in c && c[a] === d) return a;
        a++
    }
    return -1
});

function replaceAll(str, find, replace) {
    return str.replace(new RegExp(escapeRegExp(find), 'g'), replace);
}
function escapeRegExp(str) {
    return str.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, "\\$1");
}

function vc_autoclose(heading,body){
        swal({
            title: heading,
            text: body,
            timer: 3000,
            showConfirmButton: false
        });

}

function vc_confirmation(){
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "info",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });

}

function isIntFloat(value){
    if (parseFloat(value))
	{
		return true;
	}
}

function getRandomArbitrary(min, max) {
  return Math.random() * (max - min) + min;
}

function Undefined_to_Zero(val){
    if (typeof val === "undefined"){
        return 0;
    }else {
        return val;
    }
}
function Undefined_to_Empty(val){
    if (typeof val === "undefined"){
        return "";
    }else {
        return val;
    }
}
function numberWithCommas(x) {
    if (isIntFloat(x)){
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }else{
        return 0;
    }
}

function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}

function generatePDF(divname,downloadname)
 {
   //return xepOnline.Formatter.Format(divname,{pageWidth:'216mm', pageHeight:'279mm',render:'download',filename:downloadname});
   //return xepOnline.Formatter.Format(divname,{pageWidth:'216mm', pageHeight:'279mm',render:'download',filename:downloadname});
	jQuery('body').scrollTop(0);
	createPDF();
};

