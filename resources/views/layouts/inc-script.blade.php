



<script src="{{ url('back/js/dashboard.js') }}"></script>
<script src="{{ url('back/js/todolist.js') }}"></script>
<script src="{{ url('back/vendors/summernote/dist/summernote-bs4.min.js') }}"></script>
<script src="{{ url('back/js/dropify.js') }}"></script>
<script src="{{ url('back/js/formpickers.js') }}"></script>
<script src="{{ url('back/js/form-addons.js') }}"></script>
<script src="{{ url('slideout/dist/slideout.js') }}"></script>
<script src="{{url('vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{url('js/template.js')}}"></script>
<script src="{{url('js/dashboard.js')}}"></script>
<script src="{{url('js/todolist.js')}}"></script>
<script src="{{url('js/formpickers.js')}}"></script>
<script src="{{url('js/form-addons.js')}}"></script>
<script src="{{url('js/x-editable.js')}}"></script>
<script src="{{url('js/dropify.js')}}"></script>
<script src="{{url('js/dropzone.js')}}"></script>
<script src="{{url('js/jquery-file-upload.js')}}"></script>
<script src="{{url('js/form-repeater.js')}}"></script>
<script src="{{url('locales/bootstrap-datepicker.de.js')}}"></script>

{{-- <script type = "text/javascript" src = "bootstrap-datepicker.de.js" charset = "UTF-8" ></script>  --}}


<!-- Common scripts -->
<script src="{{url('assets/js/jquery-1.11.2.min.js')}}"></script>
<script src="{{url('assets/js/common_scripts_min.js')}}"></script>
<script src="{{url('assets/js/functions.js')}}"></script>

 <!-- Specific scripts -->
<script src="{{url('assets/js/icheck.js')}}"></script>
<script>
$('input').iCheck({
   checkboxClass: 'icheckbox_square-grey',
   radioClass: 'iradio_square-grey'
 });
 </script>
 <script src="{{url('assets/js/bootstrap-datepicker.js')}}"></script>
 <script src="{{url('assets/js/bootstrap-timepicker.js')}}"></script>
 <script src="{{url('assets/js/jquery.magnific-popup.js')}}"></script>
 <script>
  $('input.date-pick').datepicker('setDate', 'today');
  $('input.time-pick').timepicker({
    minuteStep: 15,
    showInpunts: false
})
  </script>
  <script src="{{url('assets/js/jquery.ddslick.js')}}"></script>
   <script>
   $("select.ddslick").each(function(){
            $(this).ddslick({
                showSelectedHTML: true
            });
        });



        </script>


        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.0&appId=203219603796007&autoLogAppEvents=1';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>



        <script src="{{url('js/bootstrap-notify.js?v2')}}"></script>



        <script type="text/javascript">


            $('.tooltip_flip.tooltip-effect-1').click(function(e){
                  e.preventDefault();
                //  var username = $('form#cutproduct input[name=id]').val();


                var $form = $(this).closest("form#cutproduct");
                var formData =  $form.serializeArray();
                var userId =  $form.find(".user_id").val();

                  if(userId){
                    $.ajax({
                      type: "POST",
                      url: "{{url('add_wishlist')}}",
                      headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                      data: "id="+userId,
                      dataType: "json",
                   success: function(json){
                       if(json.status == 1001) {


                         $.notify({
                         	// options
                         	icon: 'icon_set_1_icon-82',
                         	title: "<h4>??????????????????????????????????????????????????? ??????????????????</h4> ",
                         	message: "?????????????????????????????????????????? wishlist ????????????????????????????????????????????????????????????????????????????????? . "
                         },{
                         	// settings
                         	type: 'danger',
                         	delay: 5000,
                         	timer: 3000,
                         	z_index: 9999,
                         	showProgressbar: false,
                         	placement: {
                         		from: "bottom",
                         		align: "right"
                         	},
                         	animate: {
                         		enter: 'animated bounceInUp',
                         		exit: 'animated bounceOutDown'
                         	},
                         });




                        } else {


                          $.notify({
                          	// options
                          	icon: '',
                          	title: "<h4>??????????????????????????????????????????????????? ???????????????????????????</h4> ",
                          	message: "??????????????????????????????????????? Login ??????????????????????????????????????????????????????????????????????????????????????????????????????????????? . "
                          },{
                          	// settings
                          	type: 'danger',
                          	delay: 5000,
                          	timer: 3000,
                          	z_index: 9999,
                          	showProgressbar: false,
                          	placement: {
                          		from: "bottom",
                          		align: "right"
                          	},
                          	animate: {
                          		enter: 'animated bounceInUp',
                          		exit: 'animated bounceOutDown'
                          	},
                          });




                        }
                      },
                      failure: function(errMsg) {
                        alert(errMsg.Msg);
                      }
                    });
                  }else{




                    $.notify({
                      // options
                      icon: '',
                      title: "<h4>??????????????????????????????????????????????????? ???????????????????????????</h4> ",
                      message: "??????????????????????????????????????? Login ??????????????????????????????????????????????????????????????????????????????????????????????????????????????? . "
                    },{
                      // settings
                      type: 'danger',
                      delay: 5000,
                      timer: 3000,
                      z_index: 9999,
                      showProgressbar: false,
                      placement: {
                        from: "bottom",
                        align: "right"
                      },
                      animate: {
                        enter: 'animated bounceInUp',
                        exit: 'animated bounceOutDown'
                      },
                    });





                  }
                });






        </script>

        <script>
    $(function(){
      // bind change event to select
      $('#lang').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });
</script>



