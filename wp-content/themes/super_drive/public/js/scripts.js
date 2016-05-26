var ukModalDialog = document.getElementsByClassName("uk-modal-dialog")[0], //модалка Uikit'a:
  form = ukModalDialog.getElementsByTagName("form")[0],
  btnPurchase = document.getElementById("btnPurchase"),// кнопка заказа услуги
  confirmMsg = document.getElementById("confirmMsg"); //блок подтвержденя отправки
  ;

//по нажатии на submit в форме, скрыть форму
// и показать подтверждение
btnPurchase.addEventListener('click', function (event) {
  event.preventDefault();
  form.style.display = "none";
  confirmMsg.style.display = "block";
});

//модалка Uikit'a:
$('#modalPurchase').on({

  //по скрытии модального окна
  'hide.uk.modal': function(){

    //через несколько секунд после скрытия модального окна
    //снова показать форму и скрыть подтверждение
    setTimeout(function () {
      confirmMsg.style.display = "none";
      form.style.display = "block";
    }, 3000);
  }
});
//
// $('#my-id').click(function () {
//   var target = [
//     "main-section",
//     "about",
//     "services",
//     "promotions",
//     "reviews",
//     "footer"];
//   console.info(window.window.pageYOffset);
//
//   $.each(target,function (key,obj) {
//     //console.info(window.window.pageYOffset+' '+$('#'+obj).offset()['top']);
//     //console.info(window.window.pageYOffset+' '+($('#'+obj).offset()['top']+$('#'+obj).height()));
//     if ((window.window.pageYOffset+50>=$('#'+obj).offset()['top'])&&(window.window.pageYOffset+50<=$('#'+obj).offset()['top']+$('#'+obj).height()))
//     {
//       console.info(window.window.pageYOffset+' > '+$('#'+obj).offset()['top']+' '+($('#'+obj).offset()['top']+$('#'+obj).height()));
//       // $('.'+obj).addClass('active');
//       console.info($('.btn_'+obj).addClass('uk-active'));
//     }
//     else {
//       $('.btn_'+obj).removeClass('uk-active');
//     }
//
//   });
// });

$('.uk-navbar-toggle.uk-visible-small').click(function () {
  $('.btn_'+current).addClass('uk-active-li');
  console.info(current);
});

var current='' ;
window.onscroll=function () {
  var target = [
    "main-section",
    "about",
    "services",
    "promotions",
    "reviews",
    "footer"];
  console.info(window.window.pageYOffset);

  $.each(target,function (key,obj) {
    //console.info(window.window.pageYOffset+' '+$('#'+obj).offset()['top']);
    //console.info(window.window.pageYOffset+' '+($('#'+obj).offset()['top']+$('#'+obj).height()));
    if ((window.window.pageYOffset+50>=$('#'+obj).offset()['top'])&&(window.window.pageYOffset+50<=$('#'+obj).offset()['top']+$('#'+obj).height()))
    {
      //console.info(window.window.pageYOffset+' > '+$('#'+obj).offset()['top']+' '+($('#'+obj).offset()['top']+$('#'+obj).height()));
      // $('.'+obj).addClass('active');
      current=obj;
      $('.btn_'+obj).addClass('uk-active-li');
    }
    else {
          $('.btn_'+obj).removeClass('uk-active-li');
    }

  });

};