<?php

namespace common\components;

use Yii;

/**
 * This is the model class for table "c_acdegree".
 *
 * @property integer $acdegree_id
 * @property string $acdegree_name
 *
 * @property CJobfinder[] $cJobfinders
 */
class Pagination extends \yii\db\ActiveRecord
{
	function paging($countPage, $count){
		$itemPerPage = $countPage;
	    $itemCount = $count;

	    if (isset($_GET['page']) AND !empty($_GET['page'])) {
	        $_GET['page'] = intval($_GET['page']);
	        $pageCounter = $_GET['page'];
	    }else{
	        $pageCounter = 1;
	    }
	    $part = ($pageCounter - 1) * $jobPerPage;
	    $pageTotal = ceil($jobCount/$jobPerPage);
	}
}