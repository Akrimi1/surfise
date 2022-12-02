// JavaScript Document


var now_date = new Date();

<!-- hide from old browsers
  function GetDay(intDay){
    var DayArray = new Array("Sunday", "Monday", "Tuesday", "Wednesday",
                         "Thursday", "Friday", "Saturday")
    return DayArray[intDay]
    }

  function GetMonth(intMonth){
    var MonthArray = new Array("January", "February", "March",
                               "April", "May", "June",
                               "July", "August", "September",
                               "October", "November", "December")
    return MonthArray[intMonth]
    }

  var monthNames = new Array(
"January","February","March","April","May","June","July",
"August","September","October","November","December");

  function getDateStrWithDOW(){
    var today = new Date()
    var year = today.getYear()
    if(year<1000) year+=1900
    var todayStr = GetDay(today.getDay()) + "<br/>"
    todayStr += GetMonth(today.getMonth()) + " " + today.getDate()
    todayStr += ", " + year
    return todayStr
    }
//-->

function removeC()
{
  document.getElementById("txtsearch").style.background = "url('')";
}

function reinstateC()
{
  document.getElementById("txtsearch").style.background = "url('assets/search_diabetes.gif')";
}

var newwindow;
function contact(){
  newwindow=window.open("contact/contact.asp",'name','height=300,width=330');

}
var newwindowXY;
function contactRoot(){
  newwindowXY=window.open("../contact/contact.asp",'name','height=300,width=330');

}

var newwindow2;
function contactRSB(){
  newwindow2=window.open("contact/contactRSB.asp",'name','height=300,width=330');

}

var newwindow4;
function contactRC(){
  newwindow2=window.open("contact/contact.asp?t=r",'name','height=300,width=330');

}

var newwindow3;
function contactE(){
  newwindow3=window.open("contact/contactE.asp",'name','height=300,width=330');

}

var newwindowX;
function contactC(){
  newwindowX=window.open("contact/contactC.asp",'name','height=300,width=330');

}

var newwindowY;
function enlarge(image, urltitle){
  newwindowY=window.open("enlarge.asp?i=" + image + "&t=" + urltitle + "",'name','height=600,width=700');

}

function clear(thisField)
{
  if (thisField.value == thisField.defaultValue)
  {
  thisField.value = '';
  thisField.focus();
  }

}

function clearHelpText(thisField)
{
  if (thisField.value == thisField.defaultValue)
  {
  thisField.value = '';
  thisField.focus();
  }


}



function check_form(theForm) {
  if (parseInt(theForm.heightmtr.value)<1) { theForm.heightmtr.value = ""; }
  if (parseInt(theForm.weightkg.value)<1) { theForm.weightkg.value = ""; }



  ResetValidation();
  Validate(0,"NAME","applicant1_name","Please enter your Name", false);
  Validate(0,"NAME","applicant1_surname","Please enter your surname", false);
  Validate(0,"PHONE","applicant1_homephone", "Please enter your telephone number", false);
  Validate(0,"PHONE","applicant1_mobilephone", "Please enter your Mobile number", false);
  Validate(0,"PHONE","applicant1_workphone", "Please enter your Work telephone number", false);
  Validate(0,"EMAIL","applicant1_email", "Please enter a valid Email Address i.e. you@somewhere.com", false);

  return validateForm(theForm);
}


// this is for hovering

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}


// end hovering



  function initForm() {
    document.convertbloodsugar.var_mgdl.value = "" ;
    document.convertbloodsugar.var_mmoll.value = "" ;
    document.convertbloodsugar.var_mgdl.focus() ;
  }


  function convert(strAction) {
    var var_in1 ;
    var var_out1 ;
    var var_conv ;

    if (strAction == "from_mgdl") {
        var_in1 = document.convertbloodsugar.var_mgdl ;
        var_out1 = document.convertbloodsugar.var_mmoll ;
        var_conv = 1/18 ;
    }
    else {
        var_in1 = document.convertbloodsugar.var_mmoll ;
        var_out1 = document.convertbloodsugar.var_mgdl ;
        var_conv = 18 ;
    }

    // Do the math

    var_out1.value = (parseFloat(var_in1.value) + 0) * var_conv;


    if (var_out1.value == "NaN" || var_out1.value == 0) {
      var_out1.value = "";
      alert("Please enter a number greater than 0.");
      var_in1.value = "";
      var_in1.focus();
    }
  }

  function calcNum(theForm) {
  var a = parseFloat(document.atest.num.value)
  theForm.out1.value = (Math.round(a * 33.3)-86)
  //theForm.sameNum.value = a
}


function roundNumber(num, dec) {
  var result = Math.round(num*Math.pow(10,dec))/Math.pow(10,dec);
  return result;
}

 function convertHB(strAction) {
    var var_in1 ;
    var var_out1 ;
    var var_conv ;

    if (strAction == "from_hba1c") {
        var_in1 = document.convertHB1.var_hba1c.value ;
        var_out1 = document.convertHB1.var_mgdl ;

    //var_conv = ((parseFloat(var_in1) * 33.3)-86);

    var_conv = ((parseFloat(var_in1) * 1.98)-4.29);
    var_conv = var_conv.toFixed(1);

    //var_conv = ((var_conv) * 1/18);


    // for mmol
    //var_conv = roundNumber(var_conv, 1);
    var_out1.value = var_conv;

    }
    else {
        var_in1 = document.convertHB1.var_mgdl.value ;
        var_out1 = document.convertHB1.var_hba1c ;

    //var_conv = ((var_in1) * 18);
    // for mmol

        //var_conv = ((parseFloat(var_conv) + 86)/33.3);
    //var_conv = roundNumber(var_conv, 1);

    var_conv = ((parseFloat(var_in1) + 4.29)/1.98);
    var_conv = var_conv.toFixed(1);

    var_out1.value = var_conv;
    }

    // Do the math



    if (var_out1.value == "NaN" || var_out1.value == 0) {
      var_out1.value = "";
      alert("Please enter a number greater than 0.");
      var_in1.value = "";
      var_in1.focus();
    }
  }


    function initFormHB() {
    document.convertHB1.var_hba1c.value = "" ;
    document.convertHB1.var_mgdl.value = "" ;
    document.convertHB1.var_hba1c.focus() ;
  }


     function initFormHBPercent() {
    document.convertHB1.var_percent.value = "" ;
    document.convertHB1.var_mmol.value = "" ;
    document.convertHB1.var_percent.focus() ;
  }

  function convertHBPercent(strAction) {
    var var_in1 ;
    var var_out1 ;
    var var_conv ;

    if (strAction == "from_percent") {
        var_in1 = document.convertHB2.var_percent.value ;
        var_out1 = document.convertHB2.var_mmol ;

    var_conv = (((parseFloat(var_in1) - 2.15) * 10.929));
    //var_conv = Math.round(var_conv * 100)/100;
    var_conv = var_conv.toFixed(4);
    //var_conv = Math.round(var_conv);
    var_out1.value = var_conv;

    }
    else {

        var_in1 = document.convertHB2.var_mmol.value ;
    var_out1 = document.convertHB2.var_percent ;

    var_conv = (((parseFloat(var_in1) / 10.929) + 2.15));
    //var_conv = Math.round(var_conv * 100)/100;
    var_conv = var_conv.toFixed(4);
    //var_conv = Math.round(var_conv);

    var_out1.value = var_conv;
    }

    // Do the math



    if (var_out1.value == "NaN" || var_out1.value == 0) {
      var_out1.value = "";
      alert("Please enter a number greater than 0.");
      var_in1.value = "";
      //var_in1.focus();
    }
  }



function hov(loc,cls){
   if(loc.className)
      loc.className=cls;}

function calcNum(theForm) {
  var a = parseFloat(document.convertp2b.enteredvalue.value);

  document.convertp2b.presult.value = (Math.round(a * 10 * 1.12)/10);
  document.convertp2b.p1.value = (Math.round(a * 8 * 1.12)/10);
  document.convertp2b.p2.value = (Math.round(a * 12 * 1.12)/10);

}

function calcNum_1(theForm) {
  var a = parseFloat(document.convertp2b2.enteredvalue2.value);
  document.convertp2b2.presult2.value = (Math.round(a * 10 / 1.12)/10);
  document.convertp2b2.p12.value = (Math.round(a * 8 / 1.12)/10);
  document.convertp2b2.p122.value = (Math.round(a * 12 / 1.12)/10);

}


function calcNum_british(theForm) {
  var a = (parseFloat(document.convertp2b_british.enteredvalue_british.value) * 18);

  document.convertp2b_british.presult_british.value = ((Math.round(a * 10 * 1.12)/10) * 1/18);
  document.convertp2b_british.p1_british.value = ((Math.round(a * 8 * 1.12)/10) * 1/18);
  document.convertp2b_british.p2_british.value = ((Math.round(a * 12 * 1.12)/10) * 1/18);

}

function calcNum_1_british(theForm) {
  var a = (parseFloat(document.convertp2b2_british.enteredvalue2_british.value)  * 18);
  document.convertp2b2_british.presult2_british.value = ((Math.round(a * 10 / 1.12)/10) * 1/18);
  document.convertp2b2_british.p12_british.value = ((Math.round(a * 8 / 1.12)/10) * 1/18);
  document.convertp2b2_british.p122_british.value = ((Math.round(a * 12 / 1.12)/10) * 1/18);

}

function calcinsulin(theForm) {
  var a = parseFloat(document.ins_form.vw.value);
  var b = parseFloat(document.ins_form.vm.value);
  var c = parseFloat(document.ins_form.vf.value);
  var d = parseFloat(document.ins_form.vg.value);
  var factor_mult;
  var total_out;

  if (d == 1) {
    factor_mult = 14.3;
    } else {
    factor_mult = 13.2;
    }

  total_out = Math.round(((a - 5)*2)*c/(b*factor_mult)-b);
  document.ins_form.p1.value = total_out;
}

function chatroomGuidelines()
{

window.open("http://www.diabetes.co.uk/diabetes-chat/guidelines.html", 'X', 'width=740,height=560,toolbar=0,scrollbars=1,screenX=200,screenY=200,left=200,top=200');
}


function resetBoth() {
  resetEnglish();
  resetMetric();
}

function resetEnglish() {

  document.getElementById("txtHeightFeet").value = "";
  document.getElementById("txtHeightInches").value = "";
  document.getElementById("txtWeightStones").value = "";
  document.getElementById("txtWeightPounds").value = "";
  document.getElementById("txtBMI").value = "";

}

function resetMetric() {

  document.getElementById("txtHeightMetres").value = "";
  document.getElementById("txtWeightKilos").value = "";
  document.getElementById("txtBMI").value = "";

}

function calcEnglish() {

  resetMetric();
  var feet = (document.getElementById("txtHeightFeet").value)*1;
  var inches = (document.getElementById("txtHeightInches").value)*1;
  var stones = (document.getElementById("txtWeightStones").value)*1;
  var pounds = (document.getElementById("txtWeightPounds").value)*1;

  var meters = (inches + (feet * 12)) / 39.36;
  var kilos = (pounds + (stones*14)) / 2.2;

  document.getElementById("txtHeightMetres").value = twodecplaces(meters);
  document.getElementById("txtWeightKilos").value = twodecplaces(kilos);
  document.getElementById("txtBMI").value = twodecplaces(kilos/(meters*meters));


}
function calcMetric() {
  resetEnglish();
  var meters = (document.getElementById("txtHeightMetres").value)*1;
  var kilos = (document.getElementById("txtWeightKilos").value)*1;
  document.getElementById("txtBMI").value =  twodecplaces(kilos/(meters*meters));
}
function twodecplaces(num) {
  return Math.floor(num*100)/100;
}

function jump_to_meter_function()
   {
   var w = document.jump_to_meter.metersdd.selectedIndex;
   var url_add = document.jump_to_meter.metersdd.options[w].value;
   window.location.href = url_add;
   }


var mendor_window;
function openMD(){
  mendor_window=window.open("mendor-animation.html",'name','height=396,width=820');

}


  function countdown_clock(year, month, day, hour, minute, format)
         {
         //I chose a div as the container for the timer, but
         //it can be an input tag inside a form, or anything
         //who's displayed content can be changed through
         //client-side scripting.
         html_code = '<font id="countdown"></font>';

         document.write(html_code);

         countdown(year, month, day, hour, minute, format);
         }

function countdown(year, month, day, hour, minute, format)
         {
         Today = new Date();
         Todays_Year = Today.getFullYear() - 2000;
         Todays_Month = Today.getMonth();

         //Convert both today's date and the target date into miliseconds.
         Todays_Date = (new Date(Todays_Year, Todays_Month, Today.getDate(),
                                 Today.getHours(), Today.getMinutes(), Today.getSeconds())).getTime();
         Target_Date = (new Date(year, month - 1, day, hour, minute, 00)).getTime();

         //Find their difference, and convert that into seconds.
         Time_Left = Math.round((Target_Date - Todays_Date) / 1000);

         if(Time_Left < 0)
            Time_Left = 0;

         switch(format)
               {
               case 0:
                    //The simplest way to display the time left.
                    document.all.countdown.innerHTML = Time_Left + ' seconds';
                    break;
               case 1:
                    //More datailed.
                    days = Math.floor(Time_Left / (60 * 60 * 24));
                    Time_Left %= (60 * 60 * 24);
                    hours = Math.floor(Time_Left / (60 * 60));
                    Time_Left %= (60 * 60);
                    minutes = Math.floor(Time_Left / 60);
                    Time_Left %= 60;
                    seconds = Time_Left;

                    dps = 's'; hps = 's'; mps = 's'; sps = 's';
                    //ps is short for plural suffix.
                    if(days == 1) dps ='';
                    if(hours == 1) hps ='';
                    if(minutes == 1) mps ='';
                    if(seconds == 1) sps ='';

                    document.all.countdown.innerHTML = days + ' day' + dps + ' ';
                    document.all.countdown.innerHTML += hours + ' hour' + hps + ' ';
                    document.all.countdown.innerHTML += minutes + ' minute' + mps + ' and ';
                    document.all.countdown.innerHTML += seconds + ' second' + sps;
                    break;
               default:
                    document.all.countdown.innerHTML = Time_Left + ' seconds';
               }

         //Recursive call, keeps the clock ticking.
         setTimeout('countdown(' + year + ',' + month + ',' + day + ',' + hour + ',' + minute + ',' + format + ');', 1000);
         }

     var newwindow_enlarge;
function enlarge(URL, title){
  newwindow_enlarge=window.open("enlarge.asp?t=" + title + "&u=" + URL,'name','height=500,width=430');

}

  jQuery(document).ready(function($) {

      $('.searchbutton').on('click', function(){
        event.preventDefault();
        var cityiid = $('.searchvalue').val();
        window.location.replace("//www.diabetes.co.uk/?s=" + cityiid);
      });

      $('.closesearchwrap .closeitnow').on('click', function(){
        $('.search-fly-wrap').hide();
      });

    $('.foot-soc-rss').remove();

      $('.bottomsur button').on('click', function(){
         var bmr;
         var age = document.getElementById("age").value;
          var gender = $("#gendermal").is(':checked');
          var height = document.getElementById("height").value;
          var weigth = document.getElementById("weigth").value;
            if (gender == true) {
              bmr = 88.362 + ( 13.397 * weigth ) + ( 4.799 * height ) - ( 5.677 * age );
              }
              else {
              bmr = 447.593 + ( 9.247 * weigth ) + ( 3.098 * height ) - ( 4.330 * age );
              }
          $('#lblResultre').html(bmr.toFixed(2) + " Kcal/Day");
      });


  $('.msgsend').on('click', function(){
      event.preventDefault();
      fullname = $('.name').val();
      contact = $('.mobnumber').val();
      email = $('.emailnumb').val();
      select = $('.reasonbehind').val();
      message = $('.dcukcontactfrm textarea').val();

        if(fullname != "" && email != "" && select !="select" && message!=""){
          $.ajax({
            url: '../generalcontactemailer.php',
            type: 'POST',
            data: {fullname: fullname, contact:contact, email:email ,select:select, message:message},
          })
          .done(function() {
            $('.dcukcontactfrm').html('<p class="finishmessage">Thank you for your enquiry. We will get back to you as soon as possible.</p>');
          })
          .fail(function() {
            console.log("error");
          })
          .always(function() {
            console.log("complete");
          });
        }


      });

      $(".single-post #content p:not('.contentblocks a p')").each(function(){
          var thecontent = $(this).html().replace(/\s?$/,'');
          $(this).html(thecontent);
          if(thecontent == "" || thecontent.endsWith('.') || thecontent.endsWith('.</a>') || thecontent.endsWith('</span>') || thecontent.endsWith(':') || thecontent.endsWith('...') || thecontent.endsWith('..')  || thecontent.endsWith(',') || thecontent.endsWith('”') || thecontent.endsWith(';') || thecontent.endsWith('</sup>') || thecontent.endsWith('<br>') || thecontent.endsWith('.</a>') || thecontent.endsWith('</u>') || thecontent.endsWith('</noscript>') || thecontent.endsWith(']</a>') || thecontent.endsWith('</strong>') || thecontent.endsWith('?</a>') || thecontent.endsWith('?')){

          } else {
            var finished = thecontent + ".";
            $(this).html(finished);
          }
      });

      $("p a").each(function(){
          var theatag = $(this).text();
          // $(this).html(theatag);
          if(theatag.endsWith(' ')){
            $(this).html(theatag.replace(/\s?$/,'').replace(/\s+/, ""));
          }
      });

});
