<?php global $is_multi_steps; ?>
<div id="virtual-tour" class="dashboard-content-block-wrap <?php echo esc_attr($is_multi_steps);?>">
	<h2><?php echo houzez_option('cls_bedrooms', 'Bedrooms'); ?></h2>
	<div class="dashboard-content-block">
		<?php //get_template_part('template-parts/dashboard/submit/form-fields/virtual-tour'); ?>
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group">
					<label for="prop_bedroom1">Bedroom 1</label>
					<div class="form-radio">
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="prop_bedroom1" value="King" <?php
								if (houzez_edit_property()) {
									if(houzez_get_field_meta('property_bedroom1') == 'King'){
										echo "checked";
									}
								}
								?>
							>
						  <label class="form-check-label">King</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="prop_bedroom1" value="Queen" <?php
								if (houzez_edit_property()) {
									if(houzez_get_field_meta('property_bedroom1') == 'Queen'){
										echo "checked";
									}
								}
								?>
							>
						  <label class="form-check-label">Queen</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="prop_bedroom1" value="Full" <?php
								if (houzez_edit_property()) {
									if(houzez_get_field_meta('property_bedroom1') == 'Full'){
										echo "checked";
									}
								}
								?>
							>
						  <label class="form-check-label">Full</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="prop_bedroom1" value="Twin" <?php
								if (houzez_edit_property()) {
									if(houzez_get_field_meta('property_bedroom1') == 'Twin'){
										echo "checked";
									}
								}
								?>
							>
						  <label class="form-check-label">Twin</label>
						</div>
					</div>

				</div>
			</div>
			<div class="col-sm-12">
				<div class="form-group">
					<label for="prop_bedroom2">Bedroom 2</label>
					<div class="form-radio">
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="prop_bedroom2" value="King" <?php
								if (houzez_edit_property()) {
									if(houzez_get_field_meta('property_bedroom2') == 'King'){
										echo "checked";
									}
								}
								?>
							>
						  <label class="form-check-label">King</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="prop_bedroom2" value="Queen" <?php
								if (houzez_edit_property()) {
									if(houzez_get_field_meta('property_bedroom2') == 'Queen'){
										echo "checked";
									}
								}
								?>
							>
						  <label class="form-check-label">Queen</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="prop_bedroom2" value="Full" <?php
								if (houzez_edit_property()) {
									if(houzez_get_field_meta('property_bedroom2') == 'Full'){
										echo "checked";
									}
								}
								?>
							>
						  <label class="form-check-label">Full</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="prop_bedroom2" value="Twin" <?php
								if (houzez_edit_property()) {
									if(houzez_get_field_meta('property_bedroom2') == 'Twin'){
										echo "checked";
									}
								}
								?>
							>
						  <label class="form-check-label">Twin</label>
						</div>
					</div>

				</div>
			</div>
			<div class="col-sm-12">
				<div class="form-group">
					<label for="prop_bedroom3">Bedroom 3</label>
					<div class="form-radio">
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="prop_bedroom3" value="King" <?php
								if (houzez_edit_property()) {
									if(houzez_get_field_meta('property_bedroom3') == 'King'){
										echo "checked";
									}
								}
								?>
							>
						  <label class="form-check-label">King</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="prop_bedroom3" value="Queen" <?php
								if (houzez_edit_property()) {
									if(houzez_get_field_meta('property_bedroom3') == 'Queen'){
										echo "checked";
									}
								}
								?>
							>
						  <label class="form-check-label">Queen</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="prop_bedroom3" value="Full" <?php
								if (houzez_edit_property()) {
									if(houzez_get_field_meta('property_bedroom3') == 'Full'){
										echo "checked";
									}
								}
								?>
							>
						  <label class="form-check-label">Full</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="prop_bedroom3" value="Twin" <?php
								if (houzez_edit_property()) {
									if(houzez_get_field_meta('property_bedroom3') == 'Twin'){
										echo "checked";
									}
								}
								?>
							>
						  <label class="form-check-label">Twin</label>
						</div>
					</div>

				</div>
			</div>
			<div class="col-sm-12">
				<div class="form-group">
					<label for="prop_bedroom4">Bedroom 4</label>
					<div class="form-radio">
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="prop_bedroom4" value="King" <?php
								if (houzez_edit_property()) {
									if(houzez_get_field_meta('property_bedroom4') == 'King'){
										echo "checked";
									}
								}
								?>
							>
						  <label class="form-check-label">King</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="prop_bedroom4" value="Queen" <?php
								if (houzez_edit_property()) {
									if(houzez_get_field_meta('property_bedroom4') == 'Queen'){
										echo "checked";
									}
								}
								?>
							>
						  <label class="form-check-label">Queen</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="prop_bedroom4" value="Full" <?php
								if (houzez_edit_property()) {
									if(houzez_get_field_meta('property_bedroom4') == 'Full'){
										echo "checked";
									}
								}
								?>
							>
						  <label class="form-check-label">Full</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="prop_bedroom4" value="Twin" <?php
								if (houzez_edit_property()) {
									if(houzez_get_field_meta('property_bedroom4') == 'Twin'){
										echo "checked";
									}
								}
								?>
							>
						  <label class="form-check-label">Twin</label>
						</div>
					</div>

				</div>
			</div>
			<div class="col-sm-12">
				<div class="form-group">
					<label for="prop_bedroom5">Bedroom 5</label>
					<div class="form-radio">
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="prop_bedroom5" value="King" <?php
								if (houzez_edit_property()) {
									if(houzez_get_field_meta('property_bedroom5') == 'King'){
										echo "checked";
									}
								}
								?>
							>
						  <label class="form-check-label">King</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="prop_bedroom5" value="Queen" <?php
								if (houzez_edit_property()) {
									if(houzez_get_field_meta('property_bedroom5') == 'Queen'){
										echo "checked";
									}
								}
								?>
							>
						  <label class="form-check-label">Queen</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="prop_bedroom5" value="Full" <?php
								if (houzez_edit_property()) {
									if(houzez_get_field_meta('property_bedroom5') == 'Full'){
										echo "checked";
									}
								}
								?>
							>
						  <label class="form-check-label">Full</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="prop_bedroom5" value="Twin" <?php
								if (houzez_edit_property()) {
									if(houzez_get_field_meta('property_bedroom5') == 'Twin'){
										echo "checked";
									}
								}
								?>
							>
						  <label class="form-check-label">Twin</label>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div><!-- dashboard-content-block -->
</div><!-- dashboard-content-block-wrap -->

