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
                    <li class="breadcrumb-item active">Vehicle Information</li>
                  </ul>
                </div>
            </div>

            <div class="container-fluid">
                <div class="page-title"> 
                    <h1 class="h3 display">Vehicle Information</h1>
                </div>

                <a href="<?php echo admin_url('cars/add_new'); ?>" class="btn btn-primary add_new" type="button"><i class="icon-plus"></i>Add New</a> 

                <!-- Page tabs -->
              <div class="card tabbable page-tabs">
             
                <div class="card-body datatable-add-row">
                  <table class="table table-striped table-hover">
                                <thead> 
                                    <tr> 
                                        <th>#</th> 
                                        <th>Unit No.</th> 
										<th>Vehicle</th>
                                        <th>Make</th> 
                                        <th>Model</th> 
                                        <th>Parking Spot</th>
                                        <th>Plate No.</th>
                                        <th>Notes</th>
                                        <th>Action</th>
                                    </tr> 
                                </thead>

                                <tbody> 
								<?php $i=1; foreach($cars as $u){ ?>
                                    <tr> 
                                        <td><?php echo $i; ?></td> 
                                        <td><?php echo $u->unite_no; ?></td> 
										<td>
                                            <?php if($u->type == 'suv') { ?>
                                            <svg  version="1.1" id="Shape_1_7_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="400 -200 1000 600" style="enable-background:new 400 -200 1000 600;" xml:space="preserve">                                 
                                                <g id="XMLID_2_">
                                                    <ellipse id="XMLID_10_" cx="1139.6" cy="196.8" rx="74.7" ry="78.5" fill="#<?php echo $u->color; ?>"/>
                                                    <ellipse id="XMLID_4_"  cx="666.6" cy="196.8" rx="74.7" ry="78.5" fill="#<?php echo $u->color; ?>"/>
                                                    <path id="XMLID_23_" d="M1222.8,24.6c-15.1-3.2-54.7-10.2-70.4-14c-46.9-11.5-88.9-39.9-131.1-63.1
                                                        c-48.7-26.7-100.1-49.9-155.6-54c-98.4,0-289.1-1.5-289.1-1.5c-18.2-0.1-39.2,6.5-52.6,19.7c-4,3.9-7.4,8.3-10.8,12.8
                                                        c-3,3.9-6.4,7.4-9.3,11.4c-5.8,7.9-10.6,16.9-11.1,27.1c-1.9,44.4-5.2,143.2,1.2,159.5c5.4,13.9,40.1,40.9,62.2,57.1
                                                        c8,5.9,18.5,0.8,20.7-9.2c9.5-42.7,46-74.5,89.6-74.5c48.9,0,88.9,40.1,91.9,90.8c0.2,3.3,2.6,5.9,5.8,5.9l267.7,0
                                                        c3,0,5.4-2.4,5.8-5.5c6.1-52.1,48-92.6,99.3-92.6c49,0,89.4,37,98.2,85.8c1.3,7.3,7.8,12.4,14.8,12.4l30.7,0
                                                        c8.7,0,15.7-7.7,15.3-16.9c-2-41.2-2.8-69.4-7.8-109.8C1285.9,47.7,1279.7,36.6,1222.8,24.6z M971.5-4.5l-83.7-79.9
                                                        c-0.6-0.6-0.1-1.7,0.6-1.5c69.1,14.5,164.3,73.9,180.7,84.4c0.7,0.4,0.3,1.5-0.5,1.5l-93.1-2.7C974.2-3.3,973-3.9,971.5-4.5z" fill="#<?php echo $u->color; ?>"/>
                                                </g>
                                            </svg>

                                            <?php } else if($u->type == 'truck') { ?>                                   
                                            <svg   version="1.1"  id="Shape_1_8_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="146 -145.5 491.5 491.5" style="enable-background:new 146 -145.5 491.5 491.5;" xml:space="preserve">
                                                <style type="text/css">
                                                    .st0{fill:none;}
                                                </style>
                                                <g id="Layer_x0020_1">
                                                    <path d="M218.8-12.6H454c3.1,0,5.6,2.5,5.6,5.6v173.8c0,3.1-2.5,5.6-5.6,5.6H333.2c-0.2-9.9-4.3-19.4-11.3-26.4
                                                        c-7.3-7.3-17-11.3-27.3-11.3s-20.1,4.1-27.3,11.3c-7.1,7.1-11.1,16.5-11.3,26.4h-37.1c-3.1,0-5.6-2.5-5.6-5.6V-7
                                                        C213.2-10.1,215.7-12.6,218.8-12.6L218.8-12.6z M261.4,71.2c-1.5,0-2.8,1.3-2.8,2.8c0,1.5,1.3,2.8,2.8,2.8h145.5
                                                        c1.5,0,2.8-1.3,2.8-2.8c0-1.5-1.3-2.8-2.8-2.8H261.4z M261.4,28.3c-1.5,0-2.8,1.3-2.8,2.8c0,1.5,1.3,2.8,2.8,2.8h145.5
                                                        c1.5,0,2.8-1.3,2.8-2.8c0-1.5-1.3-2.8-2.8-2.8H261.4z" fill="#<?php echo $u->color; ?>"/>
                                                    <path d="M317.9,149.9c-6-6-14.2-9.7-23.4-9.7c-9.1,0-17.4,3.7-23.4,9.7c-6,6-9.7,14.2-9.7,23.4c0,9.1,3.7,17.4,9.7,23.4
                                                        c6,6,14.2,9.7,23.4,9.7c9.1,0,17.4-3.7,23.4-9.7c6-6,9.7-14.2,9.7-23.4C327.6,164.2,323.9,155.9,317.9,149.9L317.9,149.9z
                                                         M303,173.3c0,4.7-3.8,8.5-8.5,8.5c-4.7,0-8.5-3.8-8.5-8.5c0-4.7,3.8-8.5,8.5-8.5C299.2,164.8,303,168.6,303,173.3z" fill="#<?php echo $u->color; ?>"/>
                                                    <path d="M487.7,173.3c0,9.1,3.7,17.4,9.7,23.4c6,6,14.2,9.7,23.4,9.7c9.1,0,17.4-3.7,23.4-9.7c6-6,9.7-14.2,9.7-23.4
                                                        c0-9.1-3.7-17.4-9.7-23.4c-6-6-14.2-9.7-23.4-9.7c-9.1,0-17.4,3.7-23.4,9.7C491.4,155.9,487.7,164.2,487.7,173.3z M529.2,173.3
                                                        c0,4.7-3.8,8.5-8.5,8.5c-4.7,0-8.5-3.8-8.5-8.5c0-4.7,3.8-8.5,8.5-8.5C525.4,164.8,529.2,168.6,529.2,173.3z" fill="#<?php echo $u->color; ?>"/>
                                                    <path d="M520.7,134.7c10.3,0,20.1,4.1,27.3,11.3c7.1,7.1,11.1,16.5,11.3,26.4h16.9c3.1,0,5.6-2.5,5.6-5.6V83.7
                                                        c0-15.3-5.8-29.1-15.2-39.2c-9.5-10.2-22.6-16.5-37.1-16.5h-64.3h0v138.9c0,2-0.5,3.8-1.4,5.4c0.4,0.1,0.9,0.2,1.4,0.2h16.9
                                                        c0.2-9.9,4.3-19.4,11.3-26.4C500.7,138.7,510.4,134.7,520.7,134.7L520.7,134.7z M549.6,77.5v31.3h-41.8V58.6H532
                                                        C541.7,58.6,549.6,67.1,549.6,77.5L549.6,77.5z" fill="#<?php echo $u->color; ?>"/>
                                                </g>
                                                <rect x="146" y="-145.5" class="st0" width="491.5" height="491.5"/>
                                            </svg>

                                            <?php } else if($u->type == 'sydain') { ?> 
                                            <svg version="1.1" id="Shape_1_5_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"   viewBox="0 51.2 200 99.8" style="enable-background:new 0 51.2 200 99.8;" xml:space="preserve">
                                                <g id="XMLID_14_">
                                                    <path d="M174.1,102.5c-1.5-2.2-3.6-3.5-6.1-4.2c-2.6-0.8-5.6-0.9-8.2-1c-2.7-0.1-5.3-0.3-8-0.5c-3.7-0.3-7.6,0.1-11.2-0.8
                                                        c-4.4-1.2-8.8-3.7-13-5.8c-0.5-0.3-1-0.5-1.5-0.8c-2.4-1.1-4.8-2.3-7.2-3.4c-2.3-0.8-5-1.5-8.1-2.1c-4.4-0.8-9.6-1.4-15.8-1.4
                                                        c-6.5-0.1-12.2,0.7-17,1.9c-0.9,0.2-1.8,0.5-2.7,0.8c-3,0.9-5.4,1.7-7.1,2.3c-0.2,0.1-0.5,0.2-0.7,0.3c-1.6,0.7-3.2,1.4-4.8,2
                                                        c-4.5,1.8-9.1,3.5-13.9,4.6c-3.7,0.8-7.5,1.7-11.2,2.5c-0.9,0.2-0.5,8.1-0.3,12h-0.3c-0.8,0-1.5,0.7-1.5,1.5v1.7
                                                        c0,0.8,0.7,1.5,1.5,1.5h0.3c0,1.4,0.1,2.9,0.8,3.5c0.7,0.5,2.3,0.7,3.1,1c1.5,0.5,3,0.9,4.4,1.4c1.8,0.5,4.3,1.9,6.1,1.9h0.2
                                                        c-0.7-1.5-1.1-3.2-1.1-5c0-6.6,5.3-11.9,11.9-11.9c6.6,0,11.9,5.3,11.9,11.9c0,1.8-0.4,3.5-1.1,5h63.3c-0.7-1.5-1.1-3.2-1.1-5
                                                        c0-6.6,5.3-11.9,11.9-11.9s11.9,5.3,11.9,11.9c0,1.8-0.4,3.5-1.1,5h13.9c0.2,0,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5
                                                        c1.7-2.9,3.1-6.3,3.4-9.6C176.8,108.1,175.7,104.9,174.1,102.5z M63.2,93.4l-0.5-1.3c0,0,1-1.1,12.8-4.7c5.3-1.6,11.9-2.8,19.7-2.7
                                                        c25.1,0.2,34,8.7,34,8.7H63.2z" fill="#<?php echo $u->color; ?>"/>
                                                    <circle id="XMLID_17_" cx="62.9" cy="116.7" r="9.7" fill="#<?php echo $u->color; ?>"/>
                                                    <circle id="XMLID_15_" cx="147.7" cy="116.7" r="9.7" fill="#<?php echo $u->color; ?>"/>
                                                </g>
                                                <g>
                                                    <line x1="74.5" y1="115.6" x2="135.6" y2="116.8" fill="#<?php echo $u->color; ?>"/>
                                                    <path  d="M74.5,115.5c0,0,3.8,0,9.6-0.1c5.7-0.1,13.4,0,21,0c3.8,0,7.6-0.1,11.2,0c1.8,0.1,3.5,0.1,5.2,0.2
                                                        c1.6,0.1,3.2,0.2,4.6,0.3c5.7,0.4,9.5,0.9,9.5,0.9l0,0.2c0,0-3.8,0.4-9.6,0.5c-1.4,0-3,0.1-4.6,0.1c-1.6,0-3.4,0-5.2,0
                                                        c-3.6-0.1-7.4-0.3-11.2-0.5c-7.6-0.3-15.3-0.6-21-0.9c-5.7-0.3-9.5-0.4-9.5-0.4L74.5,115.5z" fill="#<?php echo $u->color; ?>"/>
                                                </g>
                                            </svg>

                                            <?php } else if($u->type == 'van') { ?> 
                                            <svg  version="1.1" id="Shape_1_9_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="400 -200 1000 600" style="enable-background:new 400 -200 1000 600;" xml:space="preserve">
                                                <g id="Shape_1">
                                                    <g>
                                                        <path  d="M625.8,240.9c5.5,3.9,11.9,6.6,18.9,7.8V225c-0.7-0.3-1.4-0.5-2.1-0.9L625.8,240.9z M652.4,127.9
                                                            c-41.6,0-75.4,33.8-75.4,75.4s33.8,75.4,75.4,75.4c41.6,0,75.4-33.8,75.4-75.4C727.8,161.6,694,127.9,652.4,127.9z M1340.7,156.8
                                                            c-2.7-7.2-12.3-4.6-15.2-9.1c16.6-23.8-2.4-68.1-0.8-66c-6.3-9.8-20.4-15-31.5-19.9c-15.6-6.8-32.4-14.4-49.3-20.1
                                                            c-9.3-3.1-17.9-4.2-27.4-7.3c-11-3.6-20.8-8.7-21.5-8.7c0.3,0.2,0.5,0.5,0.8,0.7c-0.7-0.5-1-0.7-0.8-0.7
                                                            c-86.8-83.9-121.4-94.3-155.2-102.2c-0.8-0.2-41.4-2.4-41.4-2.4s-360.1,0.1-463,0.1c-6,1.4-12.5,5.4-17.1,8.4
                                                            c-8.9,5.8-10,16.6-14,27.4c-8.3,22.4-29.8,81.4-29.9,194.3c0,2.8-8.2,0.4-9.7,3C441,195,481.4,214,501.1,214
                                                            c11.3,0,70.7,9.1,70.7,9.1h3.5c-1.5-6.1-2.3-12.4-2.3-18.9c0-43.7,35.5-79.2,79.2-79.2c43.7,0,79.2,35.5,79.2,79.2
                                                            c0,6.5-0.8,12.8-2.3,18.9h391c-1.6-6.2-2.4-12.8-2.4-19.5c0-43.4,35.2-78.6,78.6-78.6c43.4,0,78.6,35.2,78.6,78.6
                                                            c0,6.7-0.8,13.3-2.4,19.5h23.2c0,0,10.4-5.1,12.8-8.5c2.3-3.2,1.8-6.6,5.5-8.5c16.4-8.8,28-8.8,28-34.7
                                                            C1341.9,166.6,1342.7,159.7,1340.7,156.8z M1104.6,10.9c-2.6,3.9-7.8,2.4-7.9,29.9C1057,40.4,979,39.6,979,39.6
                                                            s-0.2-92.8-0.6-94.4c0,0,0,0,0,0c0,0,0,0,0,0c17-2.8,49-4.1,71.3,1.2c57.9,16.8,79.3,52.5,91.8,67.8
                                                            C1135.5,14,1108.9,9.9,1104.6,10.9z M1196.3,127.9c-41.6,0-75.4,33.8-75.4,75.4s33.8,75.4,75.4,75.4c41.6,0,75.4-33.8,75.4-75.4
                                                            C1271.7,161.6,1238,127.9,1196.3,127.9z" fill="#<?php echo $u->color; ?>"/>
                                                    </g>
                                                </g>
                                            </svg>
                                            
                                            <?php } else if($u->type == 'coupe') { ?> 
                                            <svg  version="1.1" id="Shape_1_6_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
                                                <g>
                                                    <path d="M16.6,103.4c0.2-0.7,0.3-1.4,0.7-2c2-3.5,3.2-7.3,4.7-11c0.6-1.6,1.9-2.6,3.6-2.7c3.3-0.2,6.5-0.5,9.7-0.6
                                                        c2.2-0.1,4.2-0.5,6.2-1.5c14.4-7.1,29.7-10.9,45.7-11.3c10.7-0.3,21.1,1.4,31,5.9c5.5,2.5,10.8,5.2,16.2,7.8
                                                        c0.7,0.4,1.4,0.7,2.2,0.7c6.1,0,12.2,0.3,18.3,0.9c8.1,0.8,16.2,2.1,24,4.8c6.4,2.3,10.4,6.7,11.4,13.5c0.4,1.5-0.2,3,0.3,4.5
                                                        c0,0.1,0,0.2,0,0.3c-0.6,0.6-0.3,1.5-0.5,2.2c-0.6,2.9-1.7,3.9-4.6,4.2c-0.4,0.1-0.9,0.2-1.3,0.2c-2.9,0.3-5.8,0.6-8.9,0.9
                                                        c0.1-0.5,0.1-0.7,0.2-0.9c3.9-9.6-2.7-20.3-12.9-21.5c-11.3-1.3-20.5,10.1-16.5,20.8c0.6,1.5,0.3,1.7-1.2,1.7
                                                        c-16.8,0-33.6,0-50.4,0c-8.6,0-17.2,0-25.8,0c-1,0.1-1.5,0-1-1.2c1.9-4.8,1.4-9.4-1.2-13.7c-3-4.9-7.6-7.5-13.4-7.5
                                                        c-5.9,0-10.5,2.6-13.5,7.7c-2.4,4-2.8,8.3-1.5,12.7c-0.7,0.3-1.3,0.2-1.9,0.1c-4-0.5-7.9-1.1-11.8-1.6c-2.5-0.4-4.2-1.7-5.5-3.8
                                                        c-0.9-1.4-1.5-3-2.2-4.5C16.7,106.8,16.7,105.1,16.6,103.4z" fill="#<?php echo $u->color; ?>"/>
                                                    <path  d="M190.7,107.9c0,1.5,0,2.9,0,4.4c-0.7-1.5-0.2-3-0.3-4.5C190.5,107.8,190.6,107.8,190.7,107.9z" fill="#<?php echo $u->color; ?>"/>
                                                    <path d="M161,100.4c7.2,0.2,13,6.2,12.9,13.3c-0.1,7-6.2,12.9-13.2,12.8c-7.1-0.2-13-6.2-12.9-13.1
                                                        C148,106.1,153.9,100.2,161,100.4z" fill="#<?php echo $u->color; ?>"/>
                                                    <path d="M53.3,100.4c7.4,0.3,12.9,6.2,12.7,13.5c-0.2,7-6.3,12.8-13.2,12.5c-7.3-0.3-12.9-6.2-12.7-13.2
                                                        C40.3,106,46.3,100.2,53.3,100.4z" fill="#<?php echo $u->color; ?>"/>
                                                    <path  d="M61.3,88.9c-1.1,0-1.8-0.3-2.4-1.2c-0.4-0.6-1-1.2-1.5-1.8c-0.6-0.6-0.5-0.9,0.3-1.3c2.5-1.2,5-2.4,7.7-3.2
                                                        c11.5-3.4,23.2-4.4,35.1-2.6c6.8,1,13.3,3,19.4,6.3c0.3,0.1,0.9,0.5,0.9,0.6c-0.4,0.9-0.9,1.8-1.1,2.8c-0.1,0.6-1,0.3-1.5,0.3
                                                        c-9.5,0-18.9,0-28.4,0C80.4,88.8,70.9,88.7,61.3,88.9z" fill="#fff"/>
                                                </g>
                                            </svg>

                                            <?php } ?> 
                                <!-- <img src="https://png.icons8.com/{{car.type}}/win8/50/<?php echo $u->color; ?>" data-ng-class="{ 'cariconvisible': (car.type == 'truck' || car.type == 'suv') }" style="display: none;">
                                <img src="https://png.icons8.com/shuttle/win8/50/<?php echo $u->color; ?>" data-ng-class="{ 'cariconvisible': (car.type == 'van') }" style="display: none;">
                                <img src="https://png.icons8.com/sedan/win8/50/<?php echo $u->color; ?>" data-ng-class="{ 'cariconvisible': (car.type == 'sydain') }" style="display: none;"> -->
                            </div>
										</td>
                                        <td><?php echo $u->made; ?></td> 
                                        <td><?php echo $u->model; ?></td> 
                                        <td><?php echo $u->parking_spot; ?></td>  
                                        <td><?php echo $u->plate_number; ?></td>
                                        <td><?php echo $u->note; ?></td>
                                        <td>
                                           <a href="<?php echo admin_url('cars/edit/'.$u->car_id); ?>" class="btn btn-primary" type="button">Edit</a> 
                                           <a href="<?php echo admin_url('cars/delete/'.$u->car_id); ?>" class="btn btn-danger" type="button" onclick="return confirm('Are your sure want to delete ?')">Delete</a> 
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