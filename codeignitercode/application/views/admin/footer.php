                

            <!-- Footer --> 
            <footer class="main-footer">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-sm-6">
                      <p><a href="#"><?=config_item('site_name');?></a> &copy; <?php echo date("Y"); ?></p>
                    </div>
                    <div class="col-sm-6 text-right">
                      <p>Design by <a href="#" class="external"></a></p>
                    </div>
                  </div>
                </div> 
            </footer> 
            <!-- /footer -->
        </div><!-- /page content -->
    </div><!-- /page container -->
</body>




<script>
var audio_path = "<?php echo base_url(); ?>"+'/assets/alert.mp3';
var audio = new Audio(audio_path);
</script>



<script type="text/javascript">
                  
var admin_url = "<?php echo admin_url(); ?>"+'/requests/refresh';
var music_url = "<?php echo admin_url(); ?>"+'/requests/music';


var user_url = "<?php echo admin_url(); ?>"+'/requests/refresh_user';
var car_url = "<?php echo admin_url(); ?>"+'/requests/refresh_car';
var request_url = "<?php echo admin_url(); ?>"+'/requests/refresh_requests';
var car_out_url = "<?php echo admin_url(); ?>"+'/requests/refresh_car_out';
var visitor_car = "<?php echo admin_url(); ?>"+'/requests/refresh_visitor_car';

(function($)
{
    $(document).ready(function()
    {

        


        var $container = $("#autorefresh");
        $container.load(admin_url);

        var refreshId = setInterval(function()
        {

            $container.load(admin_url);
               
        }, 500);


        var $container0 = $("#autorefresh1");
        $container0.load(admin_url);
        var refreshId = setInterval(function()
        {
            $container0.load(admin_url);
            
        }, 500);        



        var $container1 = $("#total_users");
        $container1.load(user_url);
        var refreshId = setInterval(function()
        {
            $container1.load(user_url);
            
        }, 500); 



        var $container2 = $("#total_cars");
        $container2.load(car_url);
        var refreshId = setInterval(function()
        {
            $container2.load(car_url);
            
        }, 500); 



        var $container3 = $("#total_requests");
        $container3.load(request_url);
        var refreshId = setInterval(function()
        {
            $container3.load(request_url);
            
        }, 500); 



        var $container4 = $("#total_car_out");
        $container4.load(car_out_url);
        var refreshId = setInterval(function()
        {
            $container4.load(car_out_url);
            
        }, 500); 


        var $container5 = $("#total_visitor_cars");
        $container5.load(visitor_car);
        var refreshId = setInterval(function()
        {
            $container5.load(visitor_car);
            
        }, 500); 




    });


})(jQuery);



</script>



<script>

var audio_path = "<?php echo base_url(); ?>"+'/assets/alert.mp3';
var audio = new Audio(audio_path);

var cacheData=0;
localStorage['myKey'] = $('#autorefresh').text();
var cacheData = $.trim(localStorage['myKey']);
//$.trim(str)
var my_request_page_url = "<?php echo admin_url(); ?>"+'/requests/refresh';

var d = $('#autorefresh').text();
var data = $.trim(d);
var auto_refresh = setInterval(
function (){
    $.ajax({
        url: my_request_page_url,
        type: 'POST',
        data: data,
        dataType: 'html',
        success: function(data) {
            if (data == cacheData){

            }else{
                //audio.currentTime = 50;
                audio.play();
                cacheData = data;
                //location.reload();   
            }           
        }
    })
}, 1500); 



</script>




</html>
