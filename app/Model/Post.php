<?php

class Post extends AppModel
{
  public $name = 'Post';
  public $belongsTo = array(
            'User' => array(
                'dependent'    => false,
                'foreignKey' => 'user_id'
                )
            );
  public $hasMany = array(
            'Comment' => array(
                'dependent'    => false,
                'foreignKey' => 'post_id'
                )
            );
}
?>
