<form class="search" action="<?php echo esc_url( home_url( '/' ) ); ?>/" method="get">
	<input type="text" value="<?php esc_attr_e('Search and hit enter', 'rayden') ?>" onblur="if(this.value == '') { this.value = '<?php esc_attr_e('Search and hit enter', 'rayden') ?>'; }" onfocus="if(this.value == '<?php esc_attr_e('Search and hit enter', 'rayden') ?>') { this.value = ''; }" size="30" id="search-field" name="s">
	<label class="input_label"></label>
</form>