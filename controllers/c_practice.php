<?php
class practice_controller extends base_controller {


    /*--------------------------------------------------------------------------------------------------------------
    Test DB
    --------------------------------------------------------------------------------------------------------------*/
    public function test_db() {

    	/*$q = 'INSERT INTO users
    			SET first_name = "Albert",
    			last_name = "Einstein"';

    		echo $q;

    		$q = 'UPDATE users
    			SET email = "albert@aol.com"
    			WHERE first_name = "Albert"';

    		DB::instance(DB_NAME)->query($q);
    		*/

    	/*$new_user = Array(
    		'first_name' => 'Albert',
    		'last_name' => 'Einstein',
    		'email' => 'albert@gmail.com',
    	);

    	DB::instance(DB_NAME)->insert('users',$new_user);  // ('table', data)

    	echo $new_user;
    	*/

    	/* Sanitization Example */
    	$_POST['first_name'] = 'Albert';

    	$_POST = DB::instance(DB_NAME)->sanitize($_POST);

    	$q = 'SELECT email 
    			FROM users
    			WHERE first_name = "'.$_POST['first_name'].'"';

    	echo DB::instance(DB_NAME)->select_field($q);

    }

    /*--------------------------------------------------------------------------------------------------------------
    Demonstrating Classes/Objects
    --------------------------------------------------------------------------------------------------------------*/
    public function test1() {

        require(APP_PATH.'/libraries/image.php');

        // "new" means instantiate an object from this class
        $imageObj = new Image('http://placekitten.com/1000/1000');

        $imageObj->resize(200,200);

        $imageObj->display();

    }
}

?>