<?php 

// Unique error identifier
$error_id = uniqid('error');
$title = 'MFarm - Error';
include Kohana::find_file('views', '_header');

?>

<body class="loggedin errorpage">

	<?php include Kohana::find_file('views', '_headerbar'); ?>
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
     		
     		<div class="errorWrapper">
	        	<h1 class="pageErrorTitle">Error <?php echo $code ?></h1>
	            <span><?php echo $class.': '.HTML::chars($message) ?></span>
	        </div>
	        
            <br />
            
            <div class="maincontent">
    			<div class="maincontentinner">
	            
	            	<div class="content">
			            <div class="contenttitle">
		                	<h2 class="chart"><span><?php echo Debug::path($file) ?> [ <?php echo $line ?> ]</span></h2>
		                </div><!--contenttitle-->
		                
		                <div id="kohana_error">
							<div id="<?php echo $error_id ?>" class="content">
								<?php echo Debug::source($file, $line) ?>
								<ol class="trace">
								<?php foreach (Debug::trace($trace) as $i => $step): ?>
									<li>
										<p>
											<span class="file">
												<?php if ($step['file']): $source_id = $error_id.'source'.$i; ?>
													<a href="#<?php echo $source_id ?>" onclick="return koggle('<?php echo $source_id ?>')"><?php echo Debug::path($step['file']) ?> [ <?php echo $step['line'] ?> ]</a>
												<?php else: ?>
													{<?php echo __('PHP internal call') ?>}
												<?php endif ?>
											</span>
											&raquo;
											<?php echo $step['function'] ?>(<?php if ($step['args']): $args_id = $error_id.'args'.$i; ?><a href="#<?php echo $args_id ?>" onclick="return koggle('<?php echo $args_id ?>')"><?php echo __('arguments') ?></a><?php endif ?>)
										</p>
										<?php if (isset($args_id)): ?>
										<div id="<?php echo $args_id ?>" class="collapsed">
											<table cellspacing="0">
											<?php foreach ($step['args'] as $name => $arg): ?>
												<tr>
													<td><code><?php echo $name ?></code></td>
													<td><pre><?php echo Debug::dump($arg) ?></pre></td>
												</tr>
											<?php endforeach ?>
											</table>
										</div>
										<?php endif ?>
										<?php if (isset($source_id)): ?>
											<pre id="<?php echo $source_id ?>" class="source collapsed"><code><?php echo $step['source'] ?></code></pre>
										<?php endif ?>
									</li>
									<?php unset($args_id, $source_id); ?>
								<?php endforeach ?>
								</ol>
							</div>
							<h2><a href="#<?php echo $env_id = $error_id.'environment' ?>" onclick="return koggle('<?php echo $env_id ?>')"><?php echo __('Environment') ?></a></h2>
							<div id="<?php echo $env_id ?>" class="content collapsed">
								<?php $included = get_included_files() ?>
								<h3><a href="#<?php echo $env_id = $error_id.'environment_included' ?>" onclick="return koggle('<?php echo $env_id ?>')"><?php echo __('Included files') ?></a> (<?php echo count($included) ?>)</h3>
								<div id="<?php echo $env_id ?>" class="collapsed">
									<table cellspacing="0">
										<?php foreach ($included as $file): ?>
										<tr>
											<td><code><?php echo Debug::path($file) ?></code></td>
										</tr>
										<?php endforeach ?>
									</table>
								</div>
								<?php $included = get_loaded_extensions() ?>
								<h3><a href="#<?php echo $env_id = $error_id.'environment_loaded' ?>" onclick="return koggle('<?php echo $env_id ?>')"><?php echo __('Loaded extensions') ?></a> (<?php echo count($included) ?>)</h3>
								<div id="<?php echo $env_id ?>" class="collapsed">
									<table cellspacing="0">
										<?php foreach ($included as $file): ?>
										<tr>
											<td><code><?php echo Debug::path($file) ?></code></td>
										</tr>
										<?php endforeach ?>
									</table>
								</div>
								<?php foreach (array('_SESSION', '_GET', '_POST', '_FILES', '_COOKIE', '_SERVER') as $var): ?>
								<?php if (empty($GLOBALS[$var]) OR ! is_array($GLOBALS[$var])) continue ?>
								<h3><a href="#<?php echo $env_id = $error_id.'environment'.strtolower($var) ?>" onclick="return koggle('<?php echo $env_id ?>')">$<?php echo $var ?></a></h3>
								<div id="<?php echo $env_id ?>" class="collapsed">
									<table cellspacing="0">
										<?php foreach ($GLOBALS[$var] as $key => $value): ?>
										<tr>
											<td><code><?php echo HTML::chars($key) ?></code></td>
											<td><pre><?php echo Debug::dump($value) ?></pre></td>
										</tr>
										<?php endforeach ?>
									</table>
								</div>
								<?php endforeach ?>
							</div>
						</div>
                
	            <!--<a class="default" href="javascript:history.back()">Back to Previous Page</a> &nbsp; <a class="default" href="dashboard.html">Return to Dashboard</a>
	        -->
		        	</div><!--content-->
	                
	            </div><!--maincontentinner-->
	            
	            <?php include Kohana::find_file('views', '_copyright'); ?>
	            
	        </div><!--maincontent-->
	        
     	</div><!--mainwrapperinner-->
    </div><!--mainwrapper-->
	<!-- END OF MAIN CONTENT -->
    

</body>

<?php include Kohana::find_file('views', '_footer'); ?>