<?php
/*
* Plugin Name: I Love Coding
* Description: Demo plugin
* Version: 1.0
* Author: Minh Tran
*/

function custom_column($columns) {
  $columns['customColumn'] = __('Custom Column');
  return $columns;
}
add_filter( 'manage_media_columns', 'custom_column' );
function custom_column_row($columnName){
  if($columnName == 'customColumn'){
    $checkbox ='<input type="checkbox" name="extra" />
              <spam>Is it protected?</spam><br/>
              <a href="#" onclick="showAlert()" >Configure private URLs</a>';
    echo  $checkbox;
    echo "<script>
            function showAlert() {
                alert('Hello World');
            }
          </script>";
    echo "<style>
     .status-inherit:hover {
       background-color: violet !important;
     }
    </style>";
  }
}
add_filter( 'manage_media_custom_column', 'custom_column_row', 10, 2 );