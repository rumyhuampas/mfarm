<table>
	<tbody>
	<tr>
		<?php if(Request::current()->controller() == 'Home'){ ?>
			<td style="padding:5px; border:1px solid #ccc;">
				<?php 
				if(Request::current()->controller() == 'Home'){ 
					echo '<input type="checkbox" class="calendarcheck" id="new" name="new" value="new" checked>';
				}
				?>
				<div style="width:14px; border:1px solid #ccc; padding:1px; display: inline-block;">
					<?php $colors = Helpers_Calendar::getNewCerdaColors();
					echo '<div style="width:4px;height:0;border:5px solid '.$colors['backgroundColor'].';overflow:hidden"></div>'
					?>
				</div>
				Alta de cerda
			</td>
		<?php } ?>
		<?php if(Request::current()->controller() != 'Home'){ ?>
			<td style="padding:5px; border:1px solid #ccc;">
				<?php 
				if(Request::current()->controller() == 'Home'){ 
					echo '<input type="checkbox" class="calendarcheck" id="modif" name="modif" value="modif" checked>';
				}
				?>
				<div style="width:14px; border:1px solid #ccc; padding:1px; display: inline-block;">
					<?php $colors = Helpers_Calendar::getModificationColors();
					echo '<div style="width:4px;height:0;border:5px solid '.$colors['backgroundColor'].';overflow:hidden"></div>'
					?>
				</div>
				Modificacion
			</td>
		<?php } ?>
		<td style="padding:5px; border:1px solid #ccc;">
			<?php 
			if(Request::current()->controller() == 'Home'){
				echo '<input type="checkbox" class="calendarcheck" id="servicio" name="servicio" value="servicio" checked>';
			}
			?>
			<div style="width:14px; border:1px solid #ccc; padding:1px; display: inline-block;">
				<?php $colors = Helpers_Calendar::getServicioColors();
				echo '<div style="width:4px;height:0;border:5px solid '.$colors['backgroundColor'].';overflow:hidden"></div>'
				?>
			</div>
			Servicio
		</td>
		<td style="padding:5px; border:1px solid #ccc;">
			<?php 
			if(Request::current()->controller() == 'Home'){
				echo '<input type="checkbox" class="calendarcheck" id="celo21" name="celo21" value="celo21" checked>';
			}
			?>
			<div style="width:14px; border:1px solid #ccc; padding:1px; display: inline-block;">
				<?php $colors = Helpers_Calendar::getProbCelo21Colors();
				echo '<div style="width:4px;height:0;border:5px solid '.$colors['backgroundColor'].';overflow:hidden"></div>'
				?>
			</div>
			Probable celo 21
		</td>
		<td style="padding:5px; border:1px solid #ccc;">
			<?php 
			if(Request::current()->controller() == 'Home'){
				echo '<input type="checkbox" class="calendarcheck" id="celo42" name="celo42" value="celo42" checked>';
			}
			?>
			<div style="width:14px; border:1px solid #ccc; padding:1px; display: inline-block;">
				<?php $colors = Helpers_Calendar::getProbCelo42Colors();
				echo '<div style="width:4px;height:0;border:5px solid '.$colors['backgroundColor'].';overflow:hidden"></div>'
				?>
			</div>
			Probable celo 42
		</td>
		<td style="padding:5px; border:1px solid #ccc;">
			<?php 
			if(Request::current()->controller() == 'Home'){
				echo '<input type="checkbox" class="calendarcheck" id="probparto" name="probparto" value="probparto" checked>';
			}
			?>
			<div style="width:14px; border:1px solid #ccc; padding:1px; display: inline-block;">
				<?php $colors = Helpers_Calendar::getProbPartoColors();
				echo '<div style="width:4px;height:0;border:5px solid '.$colors['backgroundColor'].';overflow:hidden"></div>'
				?>
			</div>
			Probable parto
		</td>
		<td style="padding:5px; border:1px solid #ccc;">
			<?php 
			if(Request::current()->controller() == 'Home'){
				echo '<input type="checkbox" class="calendarcheck" id="parto" name="parto" value="parto" checked>';
			}
			?>
			<div style="width:14px; border:1px solid #ccc;padding:1px; display: inline-block;">
				<?php $colors = Helpers_Calendar::getPartoColors();
				echo '<div style="width:4px;height:0;border:5px solid '.$colors['backgroundColor'].';overflow:hidden"></div>'
				?>
			</div>
			Parto
		</td>
	</tr>
	</tbody>
</table>