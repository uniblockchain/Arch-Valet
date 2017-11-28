<?php include(dirname(__DIR__).'/header.php'); ?>
<!-- Page container --> 
    <div class="page-container">
        <?php include(dirname(__DIR__).'/sidebar.php'); ?>
        <!-- Page content --> 
        <div class="page-content">
            <!-- Page header -->
            <div class="breadcrumb-holder">
                <div class="container-fluid">
                  <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo admin_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item active">Message</li>
                  </ul>
                </div>
            </div>

            <div class="container-fluid">
                <div class="page-title"> 
                    <h1 class="h3 display">Message</h1>
                </div>

                <a href="<?php echo admin_url('message/add_new'); ?>" class="btn btn-primary add_new" type="button"><i class="icon-plus"></i>Add New</a> 

                <!-- Page tabs -->
              <div class="card tabbable page-tabs">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display"><i class="icon-users"></i>Message</h2>
                </div>
                <div class="card-body datatable-add-row">
                  <table class="table table-striped table-hover">
                                <thead> 
                                    <tr> 
                                        <th>#</th> 
                                        <th>Unit No.</th> 
                                        <th>Title</th> 
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr> 
                                </thead>

                                <tbody> 
<?php $i=1; foreach($message as $m){ ?>
                                    <tr> 
                                        <td><?php echo $i; ?></td> 
                                        <td><?php echo $m->unite_no; ?></td> 
                                        <td><?php echo $m->title; ?></td> 
                                        <td><?php echo $m->message; ?></td> 
                                        
                                        <td>
                                           <a href="<?php echo admin_url('message/delete/'.$m->id); ?>" class="btn btn-danger" type="button" onclick="return confirm('Are your sure want to delete ?')">Delete</a> 
                                        </td>
                                    </tr> 
<?php $i++; } ?>
                                </tbody> 
                  </table>
                </div>
              </div> 
            </div> 
        </div> <!-- /page tabs --> 

<?php include(dirname(__DIR__).'/footer.php'); ?>