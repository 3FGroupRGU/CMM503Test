<?php # CONNECT TO MySQL DATABASE.

# Connect  on 'localhost' for user 'mike' with password 'easysteps' to database 'site_db'.
$dbc = @mysqli_connect ( 'ap-cdbr-azure-east-c.cloudapp.net', 'b679b0b44245bd', 'c0bf782c', 'CMM503_1300427' )

# Otherwise fail gracefully and explain the error. 
OR die ( mysqli_connect_error() ) ;

# Set encoding to match PHP script encoding.
mysqli_set_charset( $dbc, 'utf8' ) ;
