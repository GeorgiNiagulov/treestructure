<?php /** @var \App\Data\CategoryDTO[] $data */

$tree = iterator_to_array($data, true);

function generateTree ($tree,$parentId){
    echo '<ul>';
    foreach ($tree as $value){
        if($parentId == $value['parentId']){
            echo  '<li>'.$value['name'].'</li>';
            generateTree($tree,$value['id']);
        }
    }
    echo '</ul>';
}

generateTree($tree,0);

?>
