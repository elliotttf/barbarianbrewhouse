<?php require( dirname(__FILE__)."/ab_header.php"); ?>
    <div id="main" class="clearfix">
    	<div id="content">
        	<div class="inner">
              <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
			  <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
              <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
              <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
              <?php if ($show_messages && $messages): print $messages; endif; ?>
           	  <?php print $content ?>
        	</div>
        </div>
        <div id="sidebar">
        	<?php print $right ?>
        </div>
    </div>
</div> 
<?php require( dirname(__FILE__)."/ab_footer.php"); ?>