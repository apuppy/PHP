<?php
function list_to_tree($list, $pk = 'id', $pid = 'pid', $child = '_child', $root = 0)
{
    // 创建Tree
    $tree = array();
    if (is_array($list)) {
        // 创建基于主键的数组引用
        $refer = array();
        foreach ($list as $key => $data) {
            $refer[$data[$pk]] = & $list[$key];
        }
        foreach ($list as $key => $data) {
            // 判断是否存在parent
            $parentId = $data[$pid];
            if ($root == $parentId) {
                $tree[] = & $list[$key];
            } else {
                if (isset($refer[$parentId])) {
                    $parent = & $refer[$parentId];
                    $parent[$child][] = & $list[$key];
                }
            }
        }
        foreach ($tree as $key => $val){
            if (isset($val[$child])){
                usort($val[$child], "menu_sort");
                $tree[$key][$child] = $val[$child];
            }
        }
    }
    return $tree;
}

function menu_sort($a, $b)
{
    if ($a['sort'] == $b['sort']){
        return ($a['id'] < $b['id']) ? -1 : 1;
    }
    return ($a['sort'] > $b['sort']) ? -1 : 1;
}


$list=file_get_contents('simpleArr');
$list=unserialize($list);
$treeList=list_to_tree($list);
echo('<pre>');
print_r($treeList);
echo('</pre>');





function object_to_array($obj)
{
    $_arr = is_object($obj) ? get_object_vars($obj) : $obj;
    $arr = array();
    if (!empty($_arr)) {
        foreach ($_arr as $key => $val) {
            $val = (is_array($val)) || is_object($val) ? object_to_array($val) : $val;
            $arr[$key] = $val;
        }
    }

    return $arr;

}
?>