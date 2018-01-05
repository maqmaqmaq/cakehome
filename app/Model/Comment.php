<?php

class Comment extends AppModel
{
  public $name = 'Comment';
  public $belongsTo = array(
            'Post' => array(
                'dependent'    => false,
                'foreignKey' => 'post_id'
                )
            );
}
?>
