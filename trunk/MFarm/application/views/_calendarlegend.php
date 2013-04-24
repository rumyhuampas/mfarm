<table>
	<tbody>
	<tr>
		<td style="padding:5px;"><input type="checkbox" class="calendarcheck" id="modif" name="modif" value="modif" checked> Modificacion</td>
		<td>
			<div style="border:1px solid #ccc;padding:1px">
				<?php $colors = Helpers_Calendar::getModificationColors();
				echo '<div style="width:4px;height:0;border:5px solid '.$colors['backgroundColor'].';overflow:hidden"></div>'
				?>
			</div>
		</td>
		<td style="padding:5px;"><input type="checkbox" class="calendarcheck" id="servicio" name="servicio" value="servicio" checked> Servicio</td>
		<td>
			<div style="border:1px solid #ccc;padding:1px">
				<?php $colors = Helpers_Calendar::getServicioColors();
				echo '<div style="width:4px;height:0;border:5px solid '.$colors['backgroundColor'].';overflow:hidden"></div>'
				?>
			</div>
		</td>
		<td style="padding:5px;"><input type="checkbox" class="calendarcheck" id="celo21" name="celo21" value="celo21" checked> Probable celo 21</td>
		<td>
			<div style="border:1px solid #ccc;padding:1px">
				<?php $colors = Helpers_Calendar::getProbCelo21Colors();
				echo '<div style="width:4px;height:0;border:5px solid '.$colors['backgroundColor'].';overflow:hidden"></div>'
				?>
			</div>
		</td>
		<td style="padding:5px;"><input type="checkbox" class="calendarcheck" id="celo42" name="celo42" value="celo42" checked> Probable celo 42</td>
		<td>
			<div style="border:1px solid #ccc;padding:1px">
				<?php $colors = Helpers_Calendar::getProbCelo42Colors();
				echo '<div style="width:4px;height:0;border:5px solid '.$colors['backgroundColor'].';overflow:hidden"></div>'
				?>
			</div>
		</td>
		<td style="padding:5px;"><input type="checkbox" class="calendarcheck" id="probparto" name="probparto" value="probparto" checked> Probable parto</td>
		<td>
			<div style="border:1px solid #ccc;padding:1px">
				<?php $colors = Helpers_Calendar::getProbPartoColors();
				echo '<div style="width:4px;height:0;border:5px solid '.$colors['backgroundColor'].';overflow:hidden"></div>'
				?>
			</div>
		</td>
		<td style="padding:5px;"><input type="checkbox" class="calendarcheck" id="parto" name="parto" value="parto" checked> Parto</td>
		<td>
			<div style="border:1px solid #ccc;padding:1px">
				<?php $colors = Helpers_Calendar::getPartoColors();
				echo '<div style="width:4px;height:0;border:5px solid '.$colors['backgroundColor'].';overflow:hidden"></div>'
				?>
			</div>
		</td>
	</tr>
	</tbody>
</table>