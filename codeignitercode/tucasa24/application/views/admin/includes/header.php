<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?=config_item('site_name');?> | Admin Panel</title>
        <link href="<?php echo admin_css('bootstrap.min.css');  ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo admin_css('londinium-theme.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo admin_css('styles.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo admin_css('icons.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo admin_css('jquery-ui.css'); ?>" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">        
        

        <script type="text/javascript" src="<?php echo admin_js('jquery.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('jquery-ui.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/charts/sparkline.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/uniform.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/select2.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/inputmask.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/autosize.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/inputlimit.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/listbox.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/multiselect.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/validate.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/tags.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/switch.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/uploader/plupload.full.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/forms/uploader/plupload.queue.min.js'); ?>"></script>

        <script type="text/javascript" src="<?php echo admin_js('plugins/interface/daterangepicker.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/interface/fancybox.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/interface/moment.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/interface/jgrowl.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/interface/datatables.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/interface/colorpicker.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/interface/fullcalendar.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/interface/timepicker.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('plugins/interface/collapsible.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('bootstrap.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('application.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo admin_js('jquery.slugify'); ?>"></script>

<script type="text/javascript" src="<?php echo site_url('tinymce/tinymce.min.js'); ?>"></script>

        <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
        <script type="text/javascript" src="<?php echo admin_js('jquery.geocomplete.js'); ?>"></script>
       




  <script>
  $(function() {
    $( "ul.droptrue" ).sortable({
      //connectWith: "ul"
      connectWith: ".connectedSortable"
    });
 
    $( "ul.dropfalse" ).sortable({
      //connectWith: "ul",
      connectWith: ".connectedSortable"
      dropOnEmpty: false
    });
 
    $( "#sortable" ).disableSelection();
  });


  $(function() {
    $( "ul.droptrue" ).sortable({
      //connectWith: "ul"
      connectWith: ".connectedSortable"
    });
 
    $( "ul.dropfalse" ).sortable({
      //connectWith: "ul",
      connectWith: ".connectedSortable"
      dropOnEmpty: false
    });
 
    $( "#sortable1" ).disableSelection();
  });

  </script>





  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>


        <script type="text/javascript" charset="utf-8">
            $().ready(function () {
                $('.slug').slugify('#title');
            
                var pigLatin = function(str) {
                    return str.replace(/(\w*)([aeiou]\w*)/g, "$2$1ay");
                }
            
                $('#pig_latin').slugify('#title', {
                        slugFunc: function(str, originalFunc) { return pigLatin(originalFunc(str)); } 
                    }
                );
            
            }); 
        </script>

        <script>
              $(function(){

                        $("#geocomplete").geocomplete({
                          map: ".map_canvas",
                          details: "form ",
                          markerOptions: {
                            draggable: true,
                            zoom: true
                          }
                        });
                        
                        $("#geocomplete").bind("geocode:dragged", function(event, latLng){
                          $("input[name=lat]").val(latLng.lat());
                          $("input[name=lng]").val(latLng.lng());
                          $("#reset").show();
                        });
                        
                        
                        $("#reset").click(function(){
                          $("#geocomplete").geocomplete("resetMarker");
                          $("#reset").hide();
                          return false;
                        });
                        
                        $("#find").click(function(){
                          $("#geocomplete").trigger("geocode");
                        }).click();
                      });
        </script>   


<script>
tinymce.init({
                mode : "textareas",
                theme: "modern",
                editor_selector : "mceEditor",              
                width: 960,
                height: 300,
                relative_urls : false,
                remove_script_host: false,
        plugins: [
                "advlist autolink image link  lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker textpattern responsivefilemanager"
        ],

image_advtab: true,

    font_formats: "Andale Mono=andale mono,times;"+
        "Open sans=Open Sans"+
        "Arial=arial,helvetica,sans-serif;"+
        "Arial Black=arial black,avant garde;"+
        "Book Antiqua=book antiqua,palatino;"+
        "Comic Sans MS=comic sans ms,sans-serif;"+
        "Courier New=courier new,courier;"+
        "Georgia=georgia,palatino;"+
        "Helvetica=helvetica;"+
        "Impact=impact,chicago;"+
        "Symbol=symbol;"+
        "Tahoma=tahoma,arial,helvetica,sans-serif;"+
        "Terminal=terminal,monaco;"+
        "Times New Roman=times new roman,times;"+
        "Trebuchet MS=trebuchet ms,geneva;"+
        "Verdana=verdana,geneva;"+
        "Webdings=webdings;"+
        "Wingdings=wingdings,zapf dingbats", 



        toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
        toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | responsivefilemanager | insertdatetime preview | forecolor backcolor",
        toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

        menubar: false,
        toolbar_items_size: 'small',

        style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],



        templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
        ],
                external_filemanager_path:"http://tucasa24.com/filemanager/",
                filemanager_title:"Filemanager" ,
                external_plugins: { "filemanager" : "http://tucasa24.com/filemanager/plugin.min.js"}                       

});
            </script>




    </head>
    <body class="sidebar-wide">
        <!-- Navbar -->
        <div class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo site_url('en/admin'); ?>">
                    <h6><?php echo $logo->site_title; ?></h6>
                </a>
                <a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
                    <span class="sr-only">Toggle navbar</span><i class="icon-grid3"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar">
                    <span class="sr-only">Toggle navigation</span><i class="icon-paragraph-justify2"></i>
                </button>
            </div>
            <ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
                <li class="user dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo site_url('uploads/logo/'.$logo->image); ?>" alt="">
                        <span><?=$this->session->userdata('admin_name');?></span>
                        <i class="caret"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right icons-right">
                        <li><a href="<?= admin_url('settings/profile'); ?>"><i class="icon-user"></i> Profile</a></li>
                        <li><a href="<?=admin_url('settings'); ?>"><i class="icon-cog"></i> Settings</a></li>
                        <li><a href="<?=admin_url('login/logout');?>"><i class="icon-exit"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /navbar -->