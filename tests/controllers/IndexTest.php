<?php
/**
* 测试controller中的index方法
*
*/
class IndexTest extends CI_TestCase
{
	/**
	 * 数据供给器:postProvider
	 * 数组中的多个元素就代表测多次，只不过每次的数据不一样而已
	*/
	public function postProvider()
	{
		return array(
			array(array(
				'token'=>md5('FinalOrderindex_postljorder'),
				'params'=>array(
					'ljyun_id'=>512,
					'order_id'=>1000396,
					'issue_pay'=>888)
				  ),1),
			// array(array(
			// 	'token'=>md5('FinalOrderindex_postljorder'),
			// 	'params'=>array(
			// 		'ljyun_id'=>512,
			// 		'order_id'=>1000447000,
			// 		'issue_pay'=>888)
			// 	  ),6),
			// array(array(
			// 	'token'=>md5('FinalOrderindex_postljorder'),
			// 	'params'=>array(
			// 		'ljyun_id'=>512,
			// 		'order_id'=>1000396,
			// 		'issue_pay'=>'')
			// 	  ),2),
			// array(array(
			// 	'token'=>md5('FinalOrderindex_postljorder'),
			// 	'params'=>array(
			// 		'ljyun_id'=>'',
			// 		'order_id'=>1000396,
			// 		'issue_pay'=>888)
			// 	  ),2)

			);	
	
	}
	/**
	 *  controller中的index方法
	 *  @dataProvider postProvider
	 */
	public function testIndex($param,$state)
	{

		echo 1;

	}
}