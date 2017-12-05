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
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display"><i class="icon-users"></i> Vehicle Information</h2>
                </div>
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
                                <svg  enable-background="new 0 0 1000 600" height="50" id="Shape_1_7_" overflow="visible" version="1.1" viewBox="0 0 1000 600" width="100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Shape_1"><g><path d="M245.773,380.676c-4.229,0-7.657,3.416-7.657,7.63c0,4.215,3.428,7.631,7.657,7.631    s7.657-3.416,7.657-7.631C253.43,384.092,250.002,380.676,245.773,380.676z M245.773,402.328c-1.792,0-3.246,1.448-3.246,3.234    s1.453,3.234,3.246,3.234s3.246-1.448,3.246-3.234S247.565,402.328,245.773,402.328z M254.374,412.256v26.197    c7.688-1.301,14.788-4.315,20.897-8.632l-18.588-18.523C255.932,411.652,255.163,411.975,254.374,412.256z M269.806,396.876    c-0.283,0.786-0.602,1.556-0.957,2.304l18.587,18.522c4.333-6.087,7.355-13.165,8.661-20.826H269.806z M234.864,365.313    c0.751-0.354,1.52-0.677,2.309-0.958v-26.196c-7.688,1.3-14.789,4.314-20.897,8.631L234.864,365.313z M245.773,305.011    c-46.164,0-83.587,37.293-83.587,83.295c0,46.003,37.423,83.295,83.587,83.295c46.164,0,83.587-37.292,83.587-83.295    C329.36,342.304,291.937,305.011,245.773,305.011z M245.773,447.803c-32.974,0-59.705-26.638-59.705-59.497    c0-32.858,26.73-59.496,59.705-59.496s59.705,26.638,59.705,59.496C305.478,421.165,278.747,447.803,245.773,447.803z     M216.274,429.822c6.108,4.317,13.21,7.33,20.898,8.631v-26.196c-0.79-0.282-1.56-0.604-2.311-0.958L216.274,429.822z     M231.7,388.305c0-1.786-1.453-3.234-3.246-3.234s-3.246,1.448-3.246,3.234s1.453,3.234,3.246,3.234S231.7,390.091,231.7,388.305z     M269.807,379.735h26.29c-1.305-7.661-4.329-14.738-8.662-20.825l-18.588,18.523C269.202,378.182,269.524,378.949,269.807,379.735    z M245.773,374.281c1.792,0,3.246-1.448,3.246-3.234s-1.453-3.234-3.246-3.234s-3.246,1.448-3.246,3.234    S243.98,374.281,245.773,374.281z M259.846,388.305c0,1.786,1.453,3.234,3.246,3.234s3.246-1.448,3.246-3.234    s-1.453-3.234-3.246-3.234S259.846,386.519,259.846,388.305z M222.698,377.432l-18.587-18.522    c-4.333,6.087-7.355,13.165-8.661,20.826h26.292C222.024,378.949,222.342,378.18,222.698,377.432z M804.771,375.802h26.289    c-1.305-7.661-4.329-14.738-8.662-20.825L803.81,373.5C804.165,374.248,804.487,375.016,804.771,375.802z M221.739,396.876H195.45    c1.305,7.661,4.328,14.738,8.661,20.825l18.588-18.523C222.344,398.43,222.021,397.662,221.739,396.876z M275.271,346.789    c-6.108-4.316-13.21-7.33-20.897-8.63v26.196c0.789,0.281,1.559,0.603,2.31,0.957L275.271,346.789z M789.337,408.322v26.197    c7.688-1.301,14.789-4.315,20.897-8.632l-18.589-18.523C790.895,407.719,790.126,408.041,789.337,408.322z M803.812,395.246    l18.588,18.522c4.333-6.087,7.355-13.165,8.66-20.826h-26.291C804.486,393.729,804.167,394.498,803.812,395.246z M780.736,376.742    c-4.229,0-7.657,3.416-7.657,7.63c0,4.215,3.429,7.631,7.657,7.631s7.657-3.416,7.657-7.631    C788.394,380.158,784.965,376.742,780.736,376.742z M780.736,398.395c-1.793,0-3.246,1.448-3.246,3.234s1.453,3.234,3.246,3.234    c1.792,0,3.245-1.448,3.245-3.234S782.528,398.395,780.736,398.395z M70.867,311.436c-0.022,0.005-0.032,0.003-0.056,0.009    C70.835,311.584,70.854,311.573,70.867,311.436z M941.987,332.575c1.476-52.841-33.835-74.252-32.12-72.974    c-8.865-6.607-20.691-9.007-32.965-12.397c21.246,5.869-30.112-5.286-143.693-17.75c-2.16-0.094-4.32-0.188-6.48-0.281    c-25.268-7.695-26.194-9.161-34.373-14.934c-7.901-5.575-15.815-11.103-23.667-16.623c-16.431-11.551-33.65-22.196-50.716-32.965    c-6.355-4.011-12.967-7.049-19.44-10.988c-6.073-3.695-18.995-9.243-20.005-9.58c-0.63-0.471-0.686-1.555-1.127-2.254    c-2.403-3.805-5.806-11.049-12.115-9.861c0,0.752,0,1.503,0,2.254c0.717,1.104,0.591,3.683,0.563,5.354    c-8.246-0.812-24.794-3.099-24.794-3.099s-28.024-3.834-62.808-5.042c-56.897-1.977-131.883-3.437-131.883-3.437    s-72.152,1.84-126.089,4.069c-32.192,1.331-57.895,3.538-57.895,3.538s-39.964,6.832-38.318,6.224    c-16.795,6.207-4.993,7.6-4.508,10.425c-9.25,9.972-25.809,17.2-47.053,80.018c-1.77,5.233-1.238,11.699-2.536,17.188    c0,22.552,1.117,59.737,0.901,61.977c3.723-0.819-22.681,14.576-9.917,58.612c1.274,4.397,7.411,17.749,10.153,14.138    c-12.241,16.121,33.907,24.601,90.521,29.028c-2.35-7.895-3.617-16.253-3.617-24.908c0-48.303,39.294-87.461,87.767-87.461    s87.767,39.158,87.767,87.461c0,10.371-1.815,20.317-5.14,29.548c1.244-0.013,1.904-0.021,1.904-0.021l369.514,0.467    c-4.41-10.433-6.85-21.896-6.85-33.927c0-48.303,39.295-87.461,87.768-87.461s87.768,39.158,87.768,87.461    c0,12.11-2.471,23.645-6.936,34.132l4.628,0.006c0,0,39.266,2.535,44.798-12.115c1.754-1.079,5.025-0.462,7.044-1.127    c6.262-2.064,16.019-14.87,12.397-12.679C937.522,388.3,941.39,353.968,941.987,332.575z M296.494,162.476l-46.489,65.601    c0,0,16.138,0.282-142.997-0.146c13.339-45.461,46.34-70.351,46.34-70.351l136.666-8.005c0,0,7.981-0.04,9.017,2.745    C301.264,155.048,296.494,162.476,296.494,162.476z M337.63,230.736c0,0-16.209-4.755-18.878-13.115    c-1.136-3.561-0.391-8.308,0.521-11.395c-0.005,0.007,0.008-0.039,0.044-0.157c-0.016,0.049-0.029,0.107-0.044,0.157    c0.127-0.175,13.628-41.085,24.274-50.31c13.686-7.696,101.431-1.69,101.431-1.69l0.037,76.365L337.63,230.736z M619.663,195.926    c0,0.094,0,0.188,0,0.282c-0.094,0-0.188,0-0.281,0c-11.544,14.993-0.563,38.317-0.563,38.317l-137.479-0.048    c0,0,0.265-75.625,0.265-69.545c0.839-3.864,0.624-7.521,2.536-10.143c1.871-2.565,5.308-2.26,8.734-3.381    c0.707,0.027,41.023-0.88,62.831,6.198C569.223,161.995,622.412,197.736,619.663,195.926z M780.736,301.077    c-46.164,0-83.587,37.293-83.587,83.295c0,46.003,37.423,83.295,83.587,83.295s83.587-37.292,83.587-83.295    C864.323,338.37,826.9,301.077,780.736,301.077z M780.736,443.869c-32.975,0-59.705-26.638-59.705-59.497    c0-32.858,26.73-59.496,59.705-59.496c32.974,0,59.705,26.638,59.705,59.496C840.441,417.231,813.71,443.869,780.736,443.869z     M794.809,384.371c0,1.786,1.453,3.234,3.246,3.234c1.792,0,3.245-1.448,3.245-3.234s-1.453-3.234-3.245-3.234    C796.262,381.137,794.809,382.585,794.809,384.371z M769.827,361.381c0.751-0.354,1.52-0.678,2.309-0.959v-26.196    c-7.688,1.3-14.788,4.314-20.896,8.631L769.827,361.381z M780.736,370.348c1.792,0,3.245-1.448,3.245-3.234    s-1.453-3.234-3.245-3.234c-1.793,0-3.246,1.448-3.246,3.234S778.943,370.348,780.736,370.348z M810.234,342.856    c-6.107-4.317-13.21-7.331-20.897-8.631v26.196c0.789,0.281,1.559,0.603,2.31,0.957L810.234,342.856z M757.661,373.498    l-18.588-18.522c-4.333,6.087-7.355,13.165-8.66,20.826h26.291C756.987,375.016,757.306,374.246,757.661,373.498z     M766.663,384.371c0-1.786-1.453-3.234-3.245-3.234c-1.793,0-3.246,1.448-3.246,3.234s1.453,3.234,3.246,3.234    C765.21,387.605,766.663,386.157,766.663,384.371z M751.237,425.889c6.108,4.317,13.211,7.33,20.898,8.631v-26.196    c-0.789-0.282-1.56-0.604-2.311-0.958L751.237,425.889z M756.702,392.942h-26.289c1.305,7.661,4.328,14.738,8.661,20.825    l18.589-18.523C757.307,394.496,756.984,393.729,756.702,392.942z" fill="#<?php echo $u->color; ?>"/></g></g></svg>
                                 <?php } else if($u->type == 'truck') { ?>
                                <svg enable-background="new 0 0 1000 600" height="50" id="Shape_1_8_" overflow="visible" version="1.1" viewBox="0 0 1000 600" width="100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Shape_1"><g><path d="M269.468,298.774c-41.295,0-74.772,33.477-74.772,74.772c0,41.295,33.477,74.771,74.772,74.771    s74.772-33.477,74.772-74.771C344.24,332.251,310.764,298.774,269.468,298.774z M269.468,425.887    c-28.907,0-52.341-23.434-52.341-52.34c0-28.907,23.434-52.341,52.341-52.341c28.907,0,52.34,23.434,52.34,52.341    C321.809,402.453,298.375,425.887,269.468,425.887z M803.63,298.774c-41.296,0-74.772,33.477-74.772,74.772    c0,41.295,33.477,74.771,74.772,74.771s74.771-33.477,74.771-74.771C878.401,332.251,844.926,298.774,803.63,298.774z     M803.63,425.887c-28.907,0-52.341-23.434-52.341-52.34c0-28.907,23.434-52.341,52.341-52.341s52.341,23.434,52.341,52.341    C855.971,402.453,832.537,425.887,803.63,425.887z M935.96,342.638c-3.685-3.34-10.235-2.672-14.557-5.6    c4.683-3.686,3.359-13,3.359-21.274c0-6.345,0-12.691,0-19.036c-0.773-2.065-3.337-1.97-4.479-3.359    c-5.032-6.123-3.624-16.58-11.198-20.155c-10.987-9.517-38.753-10.566-55.987-13.438c-51.264-8.537-142.073-16.462-129.891-15.676    c-4.869-2.131-4.265-6.047-12.317-6.719c-1.672,1.864-0.812,1.139-2.239,1.12c-40.816-23.413-72.845-61.314-120.933-77.263    c-17.095-5.67-40.464-8.575-61.587-8.585c-21.795-0.01-81.113-4.838-87.34,11.943c-8.119,8.77-10.038,54.078-10.078,71.664    c-2.583,9.705-8.211,6.719-8.211,6.719H78.232c0,0-1.203,12.702-1.12,19.036c-9.473,13.925-1.372,62.622,0,78.382    c-6.123-0.244-12.436-0.367-15.676,2.24c-3.257,3.118-3.542,6.646-3.359,13.437c-3.45,8.927,7.838,35.086,7.838,35.086    l124.185,0.055c-0.06-1.255-0.093-2.518-0.093-3.788V372.87c0-43.289,35.093-78.382,78.383-78.382H271    c43.29,0,78.382,35.093,78.382,78.382v14.557c0,1.294-0.033,2.58-0.096,3.859l375.972,0.167c-0.057-1.211-0.088-2.429-0.088-3.653    v-15.303c0-43.083,34.926-78.009,78.009-78.009c43.084,0,78.01,34.926,78.01,78.009V387.8c0,1.248-0.032,2.489-0.09,3.723    l23.509,0.011c0,0,26.896-1.645,33.593-10.824C945.43,371.753,941.063,349.626,935.96,342.638z M648.185,250.817H495.899    l-7.839-79.502c0,0,107.916-19.389,160.124,47.029C641.523,225.276,648.185,250.817,648.185,250.817z M269.468,326.44    c-26.017,0-47.106,21.09-47.106,47.106c0,26.016,21.09,47.106,47.106,47.106c26.016,0,47.106-21.091,47.106-47.106    C316.574,347.53,295.484,326.44,269.468,326.44z M277.008,329.432c6.739,1.144,12.965,3.794,18.319,7.592l-16.295,16.295    c-0.658-0.312-1.333-0.594-2.024-0.842V329.432z M287.495,373.546c0,1.571-1.273,2.845-2.845,2.845    c-1.572,0-2.846-1.273-2.846-2.845s1.274-2.846,2.846-2.846C286.222,370.7,287.495,371.975,287.495,373.546z M269.468,355.519    c1.572,0,2.845,1.273,2.845,2.845s-1.273,2.846-2.845,2.846c-1.571,0-2.845-1.274-2.845-2.846S267.896,355.519,269.468,355.519z     M232.944,347.686l16.295,16.295c-0.312,0.658-0.591,1.335-0.839,2.026h-23.048C226.496,359.267,229.146,353.04,232.944,347.686z     M232.945,399.406c-3.798-5.354-6.449-11.581-7.593-18.32h23.046c0.248,0.691,0.53,1.366,0.842,2.024L232.945,399.406z     M261.929,417.662c-6.74-1.144-12.966-3.795-18.321-7.593l16.295-16.295c0.659,0.312,1.334,0.595,2.026,0.842V417.662z     M251.44,373.546c0-1.571,1.274-2.846,2.845-2.846c1.572,0,2.845,1.274,2.845,2.846s-1.273,2.845-2.845,2.845    C252.714,376.391,251.44,375.117,251.44,373.546z M261.929,352.477c-0.692,0.248-1.366,0.532-2.024,0.844l-16.295-16.296    c5.355-3.798,11.58-6.449,18.319-7.593V352.477z M269.468,391.573c-1.571,0-2.845-1.274-2.845-2.846s1.274-2.845,2.845-2.845    c1.572,0,2.845,1.273,2.845,2.845S271.04,391.573,269.468,391.573z M269.468,380.259c-3.708,0-6.713-3.005-6.713-6.712    c0-3.708,3.005-6.713,6.713-6.713c3.707,0,6.712,3.005,6.712,6.713C276.181,377.254,273.175,380.259,269.468,380.259z     M277.008,417.662v-23.046c0.691-0.247,1.365-0.531,2.023-0.844l16.295,16.296C289.972,413.866,283.748,416.519,277.008,417.662z     M305.992,399.407l-16.295-16.295c0.312-0.658,0.591-1.335,0.839-2.026h23.048C312.44,387.825,309.791,394.053,305.992,399.407z     M313.584,366.007h-23.047c-0.248-0.692-0.53-1.366-0.842-2.024l16.295-16.296C309.789,353.041,312.439,359.268,313.584,366.007z     M803.63,326.44c-26.017,0-47.106,21.09-47.106,47.106c0,26.016,21.09,47.106,47.106,47.106c26.016,0,47.106-21.091,47.106-47.106    C850.736,347.53,829.646,326.44,803.63,326.44z M811.17,329.432c6.739,1.144,12.965,3.794,18.319,7.592l-16.295,16.295    c-0.658-0.312-1.333-0.594-2.024-0.842V329.432z M821.657,373.546c0,1.571-1.274,2.845-2.846,2.845s-2.845-1.273-2.845-2.845    s1.273-2.846,2.845-2.846S821.657,371.975,821.657,373.546z M803.63,355.519c1.571,0,2.845,1.273,2.845,2.845    s-1.273,2.846-2.845,2.846s-2.846-1.274-2.846-2.846S802.059,355.519,803.63,355.519z M767.106,347.686l16.295,16.295    c-0.313,0.658-0.592,1.335-0.839,2.026h-23.049C760.658,359.267,763.308,353.04,767.106,347.686z M767.106,399.406    c-3.798-5.354-6.448-11.581-7.593-18.32h23.047c0.247,0.691,0.53,1.366,0.842,2.024L767.106,399.406z M796.09,417.662    c-6.739-1.144-12.965-3.795-18.32-7.593l16.295-16.295c0.659,0.312,1.334,0.595,2.025,0.842V417.662z M785.603,373.546    c0-1.571,1.273-2.846,2.845-2.846s2.846,1.274,2.846,2.846s-1.274,2.845-2.846,2.845S785.603,375.117,785.603,373.546z     M796.09,352.477c-0.691,0.248-1.365,0.532-2.023,0.844l-16.295-16.296c5.354-3.798,11.58-6.449,18.318-7.593V352.477z     M803.63,391.573c-1.571,0-2.846-1.274-2.846-2.846s1.274-2.845,2.846-2.845s2.845,1.273,2.845,2.845    S805.201,391.573,803.63,391.573z M803.63,380.259c-3.707,0-6.713-3.005-6.713-6.712c0-3.708,3.006-6.713,6.713-6.713    s6.713,3.005,6.713,6.713C810.343,377.254,807.337,380.259,803.63,380.259z M811.17,417.662v-23.046    c0.691-0.247,1.365-0.531,2.023-0.844l16.296,16.296C824.134,413.866,817.909,416.519,811.17,417.662z M840.153,399.407    l-16.294-16.295c0.312-0.658,0.591-1.335,0.839-2.026h23.048C846.602,387.825,843.953,394.053,840.153,399.407z M847.745,366.007    h-23.046c-0.248-0.692-0.53-1.366-0.842-2.024l16.295-16.296C843.951,353.041,846.602,359.268,847.745,366.007z" fill="#<?php echo $u->color; ?>"/></g></g></svg>
                                 <?php } else if($u->type == 'sydain') { ?>
                                <svg  enable-background="new 0 0 1000 600" height="50" id="Shape_1_5_" overflow="visible" version="1.1" viewBox="0 0 1000 600" width="100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Shape_1"><g><path d="M251.99,369.532c-3.653,0-6.615,2.962-6.615,6.615s2.962,6.615,6.615,6.615s6.615-2.962,6.615-6.615    S255.644,369.532,251.99,369.532z M251.99,388.304c-1.548,0-2.804,1.256-2.804,2.805c0,1.548,1.255,2.804,2.804,2.804    c1.549,0,2.804-1.256,2.804-2.804C254.794,389.56,253.539,388.304,251.99,388.304z M259.421,396.911v22.711    c6.642-1.127,12.776-3.74,18.053-7.483l-16.059-16.059C260.767,396.387,260.103,396.667,259.421,396.911z M271.926,385.574    l16.058,16.058c3.744-5.276,6.354-11.413,7.482-18.055h-22.713C272.508,384.259,272.233,384.926,271.926,385.574z     M271.924,366.722c0.307,0.648,0.585,1.313,0.83,1.995h22.712c-1.127-6.642-3.74-12.776-7.483-18.054L271.924,366.722z     M242.566,356.215c0.649-0.308,1.313-0.587,1.995-0.831v-22.711c-6.642,1.127-12.776,3.74-18.053,7.483L242.566,356.215z     M251.99,303.936c-39.881,0-72.212,32.33-72.212,72.212s32.331,72.212,72.212,72.212c39.882,0,72.212-32.33,72.212-72.212    S291.872,303.936,251.99,303.936z M251.99,427.728c-28.487,0-51.58-23.093-51.58-51.58c0-28.486,23.093-51.58,51.58-51.58    s51.58,23.094,51.58,51.58C303.57,404.635,280.477,427.728,251.99,427.728z M251.99,363.989c1.549,0,2.804-1.256,2.804-2.805    c0-1.548-1.255-2.804-2.804-2.804c-1.548,0-2.804,1.256-2.804,2.804C249.187,362.733,250.442,363.989,251.99,363.989z     M277.474,340.155c-5.276-3.743-11.412-6.355-18.053-7.482v22.711c0.682,0.244,1.347,0.522,1.995,0.83L277.474,340.155z     M232.056,366.721l-16.058-16.059c-3.744,5.277-6.355,11.413-7.482,18.055h22.713    C231.473,368.035,231.748,367.369,232.056,366.721z M226.506,412.14c5.277,3.743,11.413,6.355,18.055,7.482v-22.711    c-0.682-0.244-1.348-0.522-1.996-0.83L226.506,412.14z M231.227,383.577h-22.711c1.127,6.642,3.739,12.777,7.482,18.055    l16.059-16.06C231.75,384.924,231.471,384.259,231.227,383.577z M239.833,376.146c0-1.549-1.255-2.804-2.804-2.804    c-1.549,0-2.804,1.255-2.804,2.804s1.255,2.804,2.804,2.804C238.577,378.95,239.833,377.695,239.833,376.146z M264.148,376.146    c0,1.549,1.255,2.804,2.804,2.804c1.549,0,2.804-1.255,2.804-2.804s-1.255-2.804-2.804-2.804    C265.403,373.343,264.148,374.598,264.148,376.146z M811.641,369.532c-3.653,0-6.615,2.962-6.615,6.615s2.962,6.615,6.615,6.615    s6.615-2.962,6.615-6.615S815.294,369.532,811.641,369.532z M802.217,356.215c0.648-0.308,1.313-0.587,1.994-0.831v-22.711    c-6.642,1.127-12.776,3.74-18.054,7.483L802.217,356.215z M811.641,388.304c-1.549,0-2.804,1.256-2.804,2.805    c0,1.548,1.255,2.804,2.804,2.804s2.804-1.256,2.804-2.804C814.444,389.56,813.189,388.304,811.641,388.304z M819.071,396.911    v22.711c6.642-1.127,12.775-3.74,18.053-7.483l-16.059-16.059C820.417,396.387,819.753,396.667,819.071,396.911z M832.402,383.577    c-0.244,0.682-0.52,1.349-0.826,1.997l16.058,16.058c3.744-5.276,6.354-11.413,7.482-18.055H832.402z M937.276,292.157    c-9.801-15.004-34.896-20.235-54.012-26.477c-133.488-32.242-177.882-21.747-200.162-24.888    c-4.495-1.199-8.503-5.123-12.179-7.413c-8.057-5.019-16.418-9.434-24.358-14.298c-13.119-8.036-73.653-41.146-90.02-47.128    c-35.963-13.142-92.818-23.68-229.815-12.708c-5.56-1.528-8.916-6.016-14.826-7.414c-5.846-1.383-11.214,1.693-15.356,2.648    c0.075,4.491-0.326,8.136-1.059,11.649c-26.775,11.291-53.869,19.953-80.488,31.242c-11.108,4.711-22.569,9.32-33.89,14.297    c-7.042,3.097-13.77,7.495-21.71,10.062c-8.624,2.786-18.051,1.527-27.536,3.706c-17.267,3.967-35.99,4.497-55.071,4.766    c-2.181,3.738-5.977,7.503-6.884,12.18c3.305,1.02,4.412,3.298,4.236,7.942c-5.84,8.653-4.274,20.981-4.236,34.949    c-12.441,6.37-14.333,29.711-11.12,48.187c-0.353,1.589-0.706,3.178-1.059,4.767c0.665,5.223,2.365,10.742,2.647,16.415    c4.672,3.133,9.968,8.167,13.238,12.709c1.595,2.215,2.371,6.033,5.295,6.884c15.631,11.41,94.785,13.768,94.785,13.768    l4.164,0.228c-0.637-3.934-0.973-7.969-0.973-12.082c0-41.478,33.625-75.102,75.102-75.102c41.478,0,75.102,33.624,75.102,75.102    c0,6.966-0.952,18.277-2.728,24.678l416.073-0.736c-2.527-7.52-3.898-15.57-3.898-23.941c0-41.478,33.624-75.102,75.102-75.102    s75.102,33.624,75.102,75.102c0,7.27-1.036,14.297-2.964,20.945l4.252-0.089c0,0,32.779-1.584,40.773-5.296    c7.994-3.711,11.12-14.297,11.12-14.297l-2.118-22.24C937.806,355.171,947.652,308.042,937.276,292.157z M272.719,237.621    c-24.887-16.535-11.702-35.842-12.373-35.781c-0.398,0.354-0.685,0.636-0.865,0.827c0.528-0.559,0.788-0.82,0.865-0.827    c6.412-5.714,43.006-31.271,172.82-31.474c4.06,22.768,8.12,52.68,12.179,75.446C393.112,244.229,290.3,245.112,272.719,237.621z     M607.381,246.088c-11.408,0-124.969-0.031-124.969-0.031s-18.331-48.33-24.887-75.157c0.763,0.07,23.298,1.055,23.298,1.055    s44.613,5.079,72.546,14.298c21.976,7.253,65.363,36.403,66.19,38.126C606.506,225.047,603.416,235.329,607.381,246.088z     M811.641,303.936c-39.882,0-72.212,32.33-72.212,72.212s32.33,72.212,72.212,72.212s72.212-32.33,72.212-72.212    S851.522,303.936,811.641,303.936z M811.641,427.728c-28.486,0-51.58-23.093-51.58-51.58c0-28.486,23.094-51.58,51.58-51.58    c28.487,0,51.58,23.094,51.58,51.58C863.221,404.635,840.128,427.728,811.641,427.728z M791.706,366.721l-16.059-16.059    c-3.743,5.277-6.354,11.413-7.481,18.055h22.713C791.123,368.035,791.398,367.369,791.706,366.721z M799.483,376.146    c0-1.549-1.256-2.804-2.805-2.804c-1.548,0-2.804,1.255-2.804,2.804s1.256,2.804,2.804,2.804    C798.228,378.95,799.483,377.695,799.483,376.146z M811.641,363.989c1.549,0,2.804-1.256,2.804-2.805    c0-1.548-1.255-2.804-2.804-2.804s-2.804,1.256-2.804,2.804C808.837,362.733,810.092,363.989,811.641,363.989z M837.125,340.155    c-5.277-3.743-11.412-6.355-18.054-7.482v22.711c0.682,0.244,1.347,0.522,1.995,0.83L837.125,340.155z M823.798,376.146    c0,1.549,1.256,2.804,2.805,2.804c1.548,0,2.804-1.255,2.804-2.804s-1.256-2.804-2.804-2.804    C825.054,373.343,823.798,374.598,823.798,376.146z M786.156,412.14c5.277,3.743,11.413,6.355,18.055,7.482v-22.711    c-0.683-0.244-1.348-0.522-1.996-0.83L786.156,412.14z M790.877,383.577h-22.711c1.127,6.642,3.739,12.777,7.482,18.055    l16.059-16.06C791.399,384.924,791.121,384.259,790.877,383.577z M832.404,368.717h22.711c-1.127-6.642-3.739-12.776-7.482-18.054    l-16.059,16.059C831.881,367.37,832.16,368.035,832.404,368.717z" fill="#<?php echo $u->color; ?>"/></g></g></svg>
                                 <?php } else if($u->type == 'van') { ?>
                                <svg enable-background="new 0 0 1000 600" height="50" id="Shape_1_9_" overflow="visible" version="1.1" viewBox="0 0 1000 600" width="100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Shape_1"><g><path d="M252.399,396.383c-3.815,0-6.907,3.092-6.907,6.907c0,3.814,3.092,6.906,6.907,6.906    c3.814,0,6.907-3.092,6.907-6.906C259.306,399.475,256.214,396.383,252.399,396.383z M252.399,415.982    c-1.617,0-2.927,1.312-2.927,2.928c0,1.617,1.311,2.928,2.927,2.928c1.617,0,2.928-1.311,2.928-2.928    C255.327,417.294,254.016,415.982,252.399,415.982z M273.214,413.132l16.767,16.768c3.909-5.51,6.635-11.917,7.812-18.852h-23.716    C273.822,411.759,273.535,412.455,273.214,413.132z M260.158,424.97v23.713c6.935-1.177,13.339-3.906,18.85-7.813l-16.768-16.768    C261.563,424.423,260.869,424.715,260.158,424.97z M273.212,393.448c0.321,0.677,0.611,1.371,0.866,2.083h23.714    c-1.177-6.935-3.905-13.341-7.813-18.851L273.212,393.448z M242.559,382.478c0.677-0.321,1.371-0.613,2.082-0.868v-23.713    c-6.934,1.177-13.339,3.905-18.85,7.813L242.559,382.478z M225.791,440.87c5.51,3.908,11.916,6.636,18.851,7.813V424.97    c-0.712-0.255-1.406-0.546-2.084-0.867L225.791,440.87z M265.093,403.288c0,1.617,1.311,2.928,2.928,2.928    s2.928-1.311,2.928-2.928c0-1.616-1.311-2.927-2.928-2.927S265.093,401.672,265.093,403.288z M239.705,403.288    c0-1.616-1.311-2.927-2.928-2.927s-2.928,1.311-2.928,2.927c0,1.617,1.311,2.928,2.928,2.928S239.705,404.905,239.705,403.288z     M279.008,365.709c-5.51-3.908-11.916-6.636-18.85-7.813v23.713c0.711,0.255,1.406,0.546,2.083,0.866L279.008,365.709z     M252.399,390.595c1.617,0,2.928-1.312,2.928-2.928c0-1.617-1.311-2.928-2.928-2.928c-1.617,0-2.927,1.311-2.927,2.928    C249.472,389.283,250.782,390.595,252.399,390.595z M252.399,327.891c-41.642,0-75.399,33.758-75.399,75.399    c0,41.641,33.757,75.398,75.399,75.398c41.641,0,75.398-33.758,75.398-75.398C327.798,361.648,294.041,327.891,252.399,327.891z     M252.399,457.146c-29.744,0-53.856-24.112-53.856-53.855c0-29.744,24.112-53.856,53.856-53.856    c29.744,0,53.855,24.112,53.855,53.856C306.255,433.033,282.143,457.146,252.399,457.146z M230.72,411.048h-23.714    c1.177,6.935,3.904,13.341,7.813,18.851l16.768-16.768C231.265,412.453,230.975,411.759,230.72,411.048z M231.584,393.446    l-16.767-16.767c-3.909,5.51-6.635,11.917-7.812,18.852h23.715C230.977,394.819,231.264,394.123,231.584,393.446z     M796.342,396.383c-3.814,0-6.907,3.092-6.907,6.907c0,3.814,3.093,6.906,6.907,6.906s6.907-3.092,6.907-6.906    C803.249,399.475,800.156,396.383,796.342,396.383z M804.1,424.97v23.713c6.935-1.177,13.341-3.904,18.851-7.813l-16.767-16.768    C805.506,424.424,804.812,424.715,804.1,424.97z M822.949,365.71c-5.51-3.908-11.915-6.637-18.85-7.813v23.713    c0.712,0.255,1.405,0.547,2.082,0.868L822.949,365.71z M817.155,413.131l16.767,16.768c3.909-5.51,6.637-11.916,7.813-18.851    h-23.714C817.767,411.759,817.476,412.453,817.155,413.131z M940.652,356.772c-2.676-7.189-12.334-4.557-15.23-9.139    c16.59-23.825-2.443-68.09-0.763-66.019c-6.258-9.752-20.398-14.986-31.526-19.883c-15.559-6.847-32.441-14.373-49.348-20.104    c-9.293-3.15-17.867-4.189-27.416-7.312c-10.953-3.581-20.769-8.661-21.522-8.661c0.271,0.248,0.535,0.491,0.81,0.741    c-0.73-0.519-0.969-0.742-0.81-0.741c-86.831-83.911-121.447-94.265-155.154-102.219c-0.828-0.195-41.427-2.437-41.427-2.437    s-360.137,0.115-463.016,0.115c-6.033,1.382-12.471,5.415-17.059,8.414c-8.871,5.8-10.008,16.563-14.012,27.415    c-8.28,22.44-29.782,81.431-29.852,194.345c-0.002,2.757-8.201,0.38-9.748,3.046c-23.61,40.707,16.817,59.703,36.554,59.705    c11.27,0,70.67,9.139,70.67,9.139h3.491c-1.481-6.054-2.272-12.377-2.272-18.887c0-43.741,35.459-79.2,79.2-79.2    c43.741,0,79.2,35.459,79.2,79.2c0,6.51-0.791,12.833-2.271,18.887h390.963c-1.592-6.234-2.439-12.766-2.439-19.496    c0-43.404,35.187-78.591,78.591-78.591c43.405,0,78.591,35.187,78.591,78.591c0,6.73-0.848,13.262-2.438,19.496h23.152    c0,0,10.372-5.148,12.794-8.529c2.309-3.224,1.834-6.563,5.483-8.529c16.377-8.83,28.008-8.8,28.024-34.727    C941.874,366.614,942.661,359.745,940.652,356.772z M704.551,210.925c-2.555,3.881-7.804,2.414-7.921,29.852    c-39.596-0.405-117.581-1.218-117.581-1.218s-0.232-92.826-0.589-94.435c-0.007,0.002-0.014,0.003-0.021,0.004    c0.007-0.036,0.014-0.034,0.021-0.004c17.021-2.842,48.971-4.055,71.26,1.222c57.918,16.805,79.257,52.489,91.784,67.757    C735.514,214.011,708.901,209.9,704.551,210.925z M786.5,382.476c0.678-0.32,1.372-0.611,2.083-0.866v-23.713    c-6.935,1.177-13.34,3.904-18.85,7.813L786.5,382.476z M817.156,393.446c0.321,0.677,0.608,1.373,0.863,2.085h23.716    c-1.177-6.935-3.903-13.342-7.813-18.852L817.156,393.446z M796.342,327.891c-41.642,0-75.398,33.758-75.398,75.399    c0,41.641,33.757,75.398,75.398,75.398s75.398-33.758,75.398-75.398C871.74,361.648,837.983,327.891,796.342,327.891z     M796.342,457.146c-29.744,0-53.856-24.112-53.856-53.855c0-29.744,24.112-53.856,53.856-53.856s53.856,24.112,53.856,53.856    C850.198,433.033,826.086,457.146,796.342,457.146z M796.342,415.982c-1.617,0-2.928,1.312-2.928,2.928    c0,1.617,1.311,2.928,2.928,2.928s2.928-1.311,2.928-2.928C799.27,417.294,797.959,415.982,796.342,415.982z M783.647,403.288    c0-1.616-1.311-2.927-2.928-2.927c-1.616,0-2.928,1.311-2.928,2.927c0,1.617,1.312,2.928,2.928,2.928    C782.337,406.216,783.647,404.905,783.647,403.288z M775.528,393.448l-16.767-16.768c-3.908,5.51-6.637,11.916-7.813,18.851    h23.714C774.917,394.819,775.208,394.125,775.528,393.448z M809.036,403.288c0,1.617,1.311,2.928,2.928,2.928    c1.616,0,2.928-1.311,2.928-2.928c0-1.616-1.312-2.927-2.928-2.927C810.347,400.361,809.036,401.672,809.036,403.288z     M796.342,390.595c1.617,0,2.928-1.312,2.928-2.928c0-1.617-1.311-2.928-2.928-2.928s-2.928,1.311-2.928,2.928    C793.414,389.283,794.725,390.595,796.342,390.595z M769.733,440.869c5.511,3.907,11.915,6.637,18.85,7.813V424.97    c-0.711-0.255-1.404-0.547-2.082-0.868L769.733,440.869z M774.664,411.048h-23.716c1.177,6.935,3.903,13.342,7.812,18.852    l16.768-16.768C775.206,412.455,774.919,411.759,774.664,411.048z" fill="#<?php echo $u->color; ?>"/></g></g></svg>
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