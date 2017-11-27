<?php include('header.php'); ?>


                    <!-- Page container --> 
                    <div class="page-container">

<?php include('sidebar.php'); ?>







                        <!-- Page content --> <div class="page-content"><!-- Page header --><div class="page-header"><div class="page-title"><h3>Dashboard <small>Welcome <?php echo $this->session->userdata('admin_name'); ?></small></h3></div>
                        </div>
                        <!-- /page header -->
                        <!-- Breadcrumbs line -->
                        <div class="breadcrumb-line">
                            <ul class="breadcrumb">
                                <li><a href="<?php echo admin_url(); ?>">Home</a></li>
                                <li class="active">Dashboard</li>
                            </ul>
                        <div class="visible-xs breadcrumb-toggle"><a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a></div></div><!-- /breadcrumbs line --> 


<?php include('dashboard.php'); ?>


                   


                    <!-- Footer --> 
                    <div class="footer clearfix"> 
                        <div class="pull-left">&copy; <?php echo date("Y"); ?> <a href="#"><?=config_item('site_name');?></a> | Admin Panel
                        </div> 
                        <div class="pull-right icons-group"> <a href="#"><i class="icon-screen2"></i></a> <a href="#"><i class="icon-balance"></i></a> <a href="#"><i class="icon-cog3"></i></a> 
                        </div> 
                    </div> 
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







</html>
