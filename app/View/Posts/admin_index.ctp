<div class="row">
    <div class="col-md-6 col-md-offset-2 formularz">
        <table class="table table-striped">
            <?php
                if (count($posts)>0)
                { ?>
                      <thead>
                            <tr>
                                <th>#</th>
                                <th>title</th>
                                <th>Options</th>
                            </tr>
                      </thead>
                      <tbody>
        <?php   }

                foreach($posts as $post)
                { ?>
                    <tr>
                        <td><?php echo $post['Post']['id'];?></td>
                        <td><?php echo $post['Post']['title'];?></td>
                        <td>
                            <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?> |
                            <?php echo $this->Form->postLink('Delete',array('action' => 'delete', $post['Post']['id']),array('confirm' => 'Czy aby napewno?'));?> <br>
                        </td>
                    </tr>
        <?php   } ?>
                </tbody>
        </table>
    </div>
</div>
