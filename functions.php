<?php
/**
 * 添加导航样式
 *
 * @param type 类型
 * @param content 名称
 */
function addActionClass ($t, $type = NULL, $content = NULL){
	if ($type == NULL) {
		$type = 'index';
	}
	//判断主页 分类 独立页
	if ($t->is($type,$content)) {
		//打印样式
		echo "class='active'";
	}
	//判断是否 在内容页
	if ($t->is('post')) {
		if ($t->category == $content) {
				echo "class='active'";
		}
	}
}
?>
