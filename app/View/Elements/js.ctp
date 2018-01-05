<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo $this->params->webroot ?>js/lib/jquery.min.js"><\/script>')</script>
<?php echo $this->Html->script(array('lib/bootstrap.min', 'src/scripts.js','lib/bootstrap-wysiwyg-master/bootstrap-wysiwyg','lib/bootstrap-wysiwyg-master/external/jquery.hotkeys.js')); ?>
<?php

    if (is_file(WWW_ROOT . 'js' . DS . $this->params->controller . '.js')) {
    echo $this->Html->script($this->params->controller);
    }
    if (is_file(WWW_ROOT . 'js' . DS . $this->params->controller . DS . $this->params->action . '.js')) {
    echo $this->Html->script($this->params->controller . '/' . $this->params->action);
    }

?>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
	var _gaq = [
		['_setAccount', 'UA-XXXXX-X'],
		['_trackPageview']
	];
	(function (d, t) {
		var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
		g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g, s)
	}(document, 'script'));
</script>
<script>
    jQuery('.creload').on('click', function() {
        var mySrc = $(this).prev().attr('src');
        var glue = '?';
        if(mySrc.indexOf('?')!=-1)  {
            glue = '&';
        }
        $(this).prev().attr('src', mySrc + glue + new Date().getTime());
        return false;
    });

    $(document).ready(function(){
    	$('.editor').wysiwyg();
    });
</script>