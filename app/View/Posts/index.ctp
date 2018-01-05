<div class="row">
	<div class="col-md-12">
<?php
foreach ($posts as $post)
{ ?>
		<div class="post">
			<div class="post-header">
				<h1><?php echo h($post['Post']['title']); ?></h1>
				<p><small>przez <b>maq</b>
				<?php
				echo $post['Post']['created'];
				?>
				</small></p>
			</div>
			<div class="post-text">
		    	<p><?php echo $post['Post']['text']; ?></p>
		    </div>
	    </div>
	    <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		      	<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $post['Post']['id'];?>">
		          <b>Dodaj Komentarz</b>
		        </a>
		      </h4>
		    </div>
		    <div id="collapse<?php echo $post['Post']['id'];?>" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<?php
		      	echo $this->Form->create('Comment',array('action'=>'add','role'=>'form'));
				echo $this->Form->input('post_id', array('type' => 'hidden','value'=>$post['Post']['id']));
				echo $this->Form->input('name', array('label' => __('Nazwa'),'placeholder'=>'Podaj swoje imię lub ksywę'));
				echo $this->Form->input('text', array('label' => __('Komentarz'),'type'=>'textarea','placeholder' => 'Podaj Treść Komentarza'));
				echo $this->Form->end(__('Dodaj komentarz'));
				?>
		      </div>
		    </div>
		  </div>
		  	    <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		      	<a data-toggle="collapse" data-parent="#accordion" href="#collapsek<?php echo $post['Post']['id'];?>">
		      	<?php if (count($post['Comment']) > 0)
		      	{ ?>
		          <b>Komentarze ( <?php echo count($post['Comment']);?> )</b>
		         <?php
		     	}else{ ?>
		     	  <b>Brak Komentarzy</b>
		     	<?php } ?>
		        </a>
		      </h4>
		    </div>
		    <div id="collapsek<?php echo $post['Post']['id'];?>" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<?php
		      	foreach($post['Comment'] as $comment)
		      	{ ?>
		      	<div class="komentarz">
			      	<div class="komentarz-header">
			      		<b><?php echo $comment['name'];?></b> - <small><?php echo $comment['created'];?></small>
			      	</div>
			      	<div class="komentarz-text">
			      		<?php echo $comment['text']; ?>
			      	</div>
		      	</div>
		      	<?php } ?>
		      </div>
		    </div>
		  </div>
		<hr>
<?php } ?>
</div>
</div>