<?php

	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// Homepage
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
	
		function tpl_home() {
			

			// Display Cams
            $category = basename($_SERVER['SCRIPT_NAME']);
            switch ( $category ) {

                case 'female.php':
                    $category = 'f';
                    break;

                case 'male.php':
                    $category = 'm';
                    break;

                case 'couple.php':
                    $category = 'c';
                    break;

                case 'shemale.php':
                    $category = 's';
                    break;

                case 'hd.php':
                    $category = 'hd';
                    break;

                case 'new.php':
                    $category = 'new';
                    break;

                case 'teen.php':
                    $category = 'teen';
                    break;

                case 'adult.php':
                    $category = 'adult';
                    break;

                case 'middleage.php':
                    $category = 'middleage';
                    break;

                case 'mature.php':
                    $category = 'mature';
                    break;

                case 'senior.php':
                    $category = 'senior';
                    break;

                case 'birthday':
                    $category = 'birthday';
                    break;

                default:
                    $category = '';
            }
				get_cams ( AFFID, TRACK, $category, THUMB_CNT );

					
		}